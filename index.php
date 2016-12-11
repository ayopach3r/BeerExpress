<?php


    require 'vendor/autoload.php';
    require 'model/beers.php';
    require 'model/beersModel.php';
    session_start();

    $configuration = [
        'settings' => [
            'displayErrorDetails' => true,
        ],
    ];




    $c = new \Slim\Container($configuration);
    // Create and configure Slim app
    $app = new \Slim\App($c);

    // Fetch DI Container
    $container = $app->getContainer();

    // Register Twig View helper
    $container['view'] = function ($container) {
        $view = new \Slim\Views\Twig('views', [
            'cache' => 'cache',
            'debug' => true,
            'auto_reload' => true]);
        $view->addExtension(new Slim\Views\TwigExtension(
            $container['router'], 
            $container['request']->getUri()));
        return $view;
    };

    $beer=new Beers();
    $model=new beersModel();

    //midleware
    $accesoLogin = function($request, $response, $next) use($app){
        if(!isset($_SESSION['user'])){
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));  
        }else{
            return $next($request, $response);
        }
    };

    //LOGIN (VENTANA PRINCIPAL METODO GET)
    $app->get('/', function ($request, $response, $args) use($app,$model,$beer) {
        if(isset($_SESSION['user'])){
             $data = array(
                'beers' => $model->mostrarBeers(),
                'router'=> $this->router,
                'beer'=>$beer);
            $body = $this->view->fetch('inicio.twig.php',$data);
            return $response->write($body);
        }else{
            $body = $this->view->fetch('login.twig.php');
            return $response->write($body);
        }
        
    })->setName('login');

    //INICIO (ACCESSO DESDE EL LOGION POR EL METODO POST)
    /*Posible cambio de crear un usuario admin para la modificacion de la base de datos 
    y crear un usuario normal para la compra del producto*/
    $app->post('/', function ($request, $response, $args) use ($app,$model,$beer) {
        $nick = $request->getParam('nick');
        $password = $request->getParam('password');
        if(($nick == 'ayopacher' && $password =='123456') || isset($_SESSION['user'])){
            $_SESSION['user']= $nick;
            $data = array(
                'beers' => $model->mostrarBeers(),
                'router'=> $this->router,
                'beer'=>$beer);
            return $this->view->fetch('inicio.twig.php',$data);
        }else{
            $body = $this->view->fetch('login.twig.php');
            return $response->write($body);
        }
    })->setName('inicio');

    //LOGOUT
    $app->get('/logout', function($request,$response,$args) use ($app){
        unset($_SESSION['user']);
        $this->get('view')->getEnvironment()->addGlobal('user', null);
        return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));
    })->setName('logout')->add($accesoLogin);

    // Borrar un producto a partir de su id
     $app->get('/delete/{id:\d+}', function ($request, $response, $args) use($app, $model){
            $data= array('beers'=>$model->delete($args['id']));
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('inicio'));
        })->setName('borrar');

     //NUEVO va al formulario para la creacion de un nuevo elemento
     $app->get('/nuevo', function($request,$response,$args) {
        $body = $this->view->fetch('formulario.twig.php');
        return $response->write($body);
    })->setName('nuevo')->add($accesoLogin);

     //Recupera la informacion 
    $app->post('/nuevo', function($request, $response, $args) use($app,$model){
        $value=$model->nuevo($_POST);
        if(value){
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('inicio'));  
        }else{
            echo "no salio bien";
        }
    })->setName('nuevo');

    $app->get('/editar/{id:\d+}', function($request, $response, $args) use($app,$model){
        $elegida=$model->obtener($args['id']);
        $data=array(
            'elegida'=>$elegida
        );
        return $this->view->fetch('formulario.twig.php',$data);
    })->setName('editar');


    $app->post('/editar/{id:\d+}', function($request, $response, $args) use($app,$model){
        $value=$model->nuevo($_POST);
        return $this->view->fetch('formulario.twig.php',$data);
    })->setName('editar');

    

$app->post('/actualizar', function ($request, $response, $args) use ($app, $model, $beer){
    $beer-> __SET('id',     $_REQUEST['id']);
    $beer-> __SET('nombre',     $_REQUEST['nombre']);
    $beer-> __SET('fabricante',     $_REQUEST['fabricante']);
    $beer-> __SET('origen',     $_REQUEST['origen']);
    $beer-> __SET('cantidad',     $_REQUEST['cantidad']);


    $model->actualizar($beer);


    return $response->withRedirect($app->getContainer()->get('router')->pathFor('inicio'));
})->setName('actualizar')->add($accesoLogin);

    $app->run();

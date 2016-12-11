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
    $app->get('/', function ($request, $response, $args) use($app) {
        if(isset($_SESSION['user'])){
            $body = $this->view->fetch('inicio.twig.php');
            return $response->write($body);
        }else{
            $body = $this->view->fetch('login.twig.php');
            return $response->write($body);
        }
        
    })->setName('login');

    //INICIO (ACCESSO DESDE EL LOGION POR EL METODO POST)
    $app->post('/', function ($request, $response, $args) use ($app,$model,$beer) {
        $nick = $request->getParam('nick');
        $password = $request->getParam('password');
        if(($nick == 'ayopacher' && $password =='123456') || isset($_SESSION['user'])){
            $_SESSION['user']= $nick;
            $data = array(
                'beers' => $model->mostrarBeers(),
                'router'=> $this->router,
                'beer'=>$beer);
            return $this->view->render($response,'inicio.twig.php',$data);
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

    // Run app
    $app->run();

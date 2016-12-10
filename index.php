<?php


require 'vendor/autoload.php';


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
        'auto_reload' => true,
    ]);
    $view->addExtension(new Slim\Views\TwigExtension(
        $container['router'], 
        $container['request']->getUri()
    ));


    return $view;
};


//midleware

$accesoLogin = function($request, $response, $next) use($app){
    if(!isset($_SESSION['user'])){
        return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));  
    }else{
        return $next($request, $response);
    }
};

$app->get('/', function ($request, $response, $args) use($app) {
    if(isset($_SESSION['user'])){
        $body = $this->view->fetch('inicio.twig.php');
        return $response->write($body);
    }else{
        $body = $this->view->fetch('login.twig.php');
        return $response->write($body);
    }
    
})->setName('login');

$app->post('/', function ($request, $response, $args) {
    $nick = $request->getParam('nick');
    $password = $request->getParam('password');
    if(($nick == 'ayopacher' && $password =='123456') || isset($_SESSION['user'])){
        $_SESSION['user']= $nick;
        $body = $this->view->fetch('inicio.twig.php');
        return $response->write($body);
    }else{
        $body = $this->view->fetch('login.twig.php');
        return $response->write($body);
    }
})->setName('inicio');

$app->get('/logout', function($request,$response,$args) use ($app){
    unset($_SESSION['user']);
    $this->get('view')->getEnvironment()->addGlobal('user', null);
    return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));
})->setName('logout')->add($accesoLogin);

// Run app
$app->run();

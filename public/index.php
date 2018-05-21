<?php

require __DIR__."/../vendor/autoload.php";

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Monetify\Entities\Application\Application;
use \Monetify\Entities\User\User;
use \Monetify\Service\Application\ApplicationService;
use Monetify\Entities\Application\Components\Background\Backgrounds;
use Monetify\Entities\Application\Components\Picture\PictureItem;
use Monetify\Entities\Application\Components\Background\BackgroundItem;
use Monetify\Entities\Application\Components\Picture\Pictures;


$app = new \Slim\App;
$app->get('/', function (Request $request, Response $response) {

    $application = new Application();
    $application->addComponent( new Backgrounds([
        new BackgroundItem(__DIR__.'/../tests/resources/applications/01/background.png')
    ]));
    $application->addComponent(new Pictures([
        new PictureItem(323, 323, 847, 217, 100, false, false, true)
    ]));




    $user = new User(
        "Fabricio",
        __DIR__.'/../tests/resources/fabricio.jpg',
        "30/03/1995",
        "male"
    );

    $service = new ApplicationService($application, $user);


    header('Content-Type: image/png');
    echo $service->build()->encode('png');
    exit;
});
$app->run();
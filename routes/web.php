<?php
use Monetify\Entities\Application\Application;
use Monetify\Entities\Application\Components\Background\Backgrounds;
use Monetify\Entities\Application\Components\Background\BackgroundItem;
use Monetify\Entities\Application\Components\Filter\Filter;
use Monetify\Entities\Application\Components\Filter\GenderEnum;

$router->get('/', function () use ($router) {

    $application = new Application();
    $application->setTitle("O que o Google sugere ao pesquisar seu nome?")
                ->setText("Faça o teste e descubra o que o Google sugere ao pesquisar seu nome!")
                ->setImageLarge("https://wordpress.funtests.org/2017/09/21195616/CHAMADA71.jpg")
                ->setImageSmall("https://wordpress.funtests.org/2017/09/21195607/FORA.gif");

    $backgrounds = new Backgrounds();

    $item = new BackgroundItem(resource_path('tests/application/google/fundo_female.png'));
    $item->setFilter(new Filter(GenderEnum::FEMALE));
    $backgrounds->addBackground($item);

    $item = new BackgroundItem(resource_path('tests/application/google/fundo_male.png'));
    $item->setFilter(new Filter(GenderEnum::MALE));
    $backgrounds->addBackground($item);

    $application->addComponent($backgrounds);

    dd($application);
});

<?php

namespace Monetify\Service;


use Monetify\Entities\Aplicativo\Application;

class ApplicationService {

    private $image;

    public function build(Application $application){
        foreach($application->listComponents() as $component){
            $component->
        }
    }
}
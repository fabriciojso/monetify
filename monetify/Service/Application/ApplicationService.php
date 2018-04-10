<?php

namespace Monetify\Service;


use Intervention\Image\Image;
use Monetify\Entities\Aplicativo\Application;
use Monetify\Entities\Application\Components\Picture;
use Monetify\Service\Application\Components\PictureService;

class ApplicationService {

    private $image;
    public function __construct() {
        $this->image = new Image();
        $this->image->canvas(1200, 630);
    }

    public function build(Application $application){
        foreach($application->listComponents() as $component){
            $service = null;
            if($component instanceof Picture){
                $service = PictureService::class;
            }
            $service = new $service($component);
            $this->image = $service->marge($this->image);
        }
    }
}
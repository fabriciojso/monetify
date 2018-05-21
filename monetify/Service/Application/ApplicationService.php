<?php

namespace Monetify\Service\Application;


use Intervention\Image\Image;
use Intervention\Image\ImageManagerStatic as ImageFacade;
use Monetify\Builder\Components\BackgroundsBuilder;
use Monetify\Builder\Components\PicturesBuilder;
use Monetify\Entities\Application\Application;
use Monetify\Entities\Application\Components\Background\BackgroundItem;
use Monetify\Entities\Application\Components\Background\Backgrounds;
use Monetify\Entities\Application\Components\Buildable;
use Monetify\Entities\Application\Components\Picture;
use Monetify\Entities\User\User;
use Tightenco\Collect\Support\Collection;

class ApplicationService {

    private $image;
    private $application;
    private $user;

    public function __construct(Application $application, User $user) {
        $this->application = $application;
        $this->user = $user;
        $this->image = ImageFacade::canvas(1200, 630);
    }

    protected function getImage(): Image {
        return $this->image;
    }

    protected function getApplication() : Application {
        return $this->application;
    }

    protected function getUser(): User {
        return $this->user;
    }

    public function build() : Image {
        $components =  (new Collection(($this->getApplication()->listComponents())))->sort(function(Buildable $item){
            if($item instanceof Backgrounds){
                return -1;
            }else{
                return 1;
            }
        })->toArray();

        foreach($components as $component){
            $classBuilder = $this->getNameBuilderClass($component);
            $builder = new $classBuilder($this->getImage(), $this->getUser(), $component);
            $this->image = $builder->build();
        }
        return $this->getImage();
    }

    private function getNameBuilderClass($component){
        return sprintf(
            "\Monetify\Builder\Components\%sBuilder",
            ucfirst(class_basename($component))
        );
    }
}
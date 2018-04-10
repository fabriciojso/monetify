<?php
namespace Monetify\Entities\Application\Components\Picture;


use Monetify\Entities\Application\Components\Picture;

class Pictures {


    private $itens = [];

    public function addPicture(Picture $picture){
        $this->itens[] = $picture;
    }

    public function listPictures(){
        return $this->itens;
    }
}
<?php

namespace Monetify\Entities\Application\Components\Background;


use Monetify\Entities\Application\Components\Component;

class Backgrounds extends Component {

    /**
     * @var BackgroundItem[]
     */
    private $itens = [];

    public function addBackground(BackgroundItem $item){
        $this->itens[] = $item;
    }

    public function listBackgrounds(){
        return $this->itens;
    }
}
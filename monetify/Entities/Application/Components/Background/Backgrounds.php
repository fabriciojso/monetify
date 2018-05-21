<?php

namespace Monetify\Entities\Application\Components\Background;


use Monetify\Entities\Application\Components\Buildable;

class Backgrounds extends Buildable {

    /**
     * @var BackgroundItem[]
     */
    private $backgrounds;

    /**
     * Backgrounds constructor.
     * @param BackgroundItem[] $backgrounds
     */
    public function __construct(array $backgrounds = []) {
        $this->backgrounds = $backgrounds;
    }


    /**
     * @return BackgroundItem[]
     */
    public function listBackgrounds(): array {
        return $this->backgrounds;
    }

    public function addBackground(BackgroundItem $background) {
        $this->backgrounds[] = $background;
        return $this;
    }



}
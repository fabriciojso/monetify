<?php

namespace Monetify\Entities\Application\Components\Filter;


use Intervention\Zodiac\AbstractZodiac;

class Filter {

    protected $gender;
    protected $zodic;
    protected $nameLength;
    protected $initLetter;

    public function __construct($gender = null, AbstractZodiac $zodic = null, $nameLength = null, $initLetter = null) {
        $this->gender = $gender;
        $this->zodic = $zodic;
        $this->nameLength = $nameLength;
        $this->initLetter = $initLetter;
    }


}
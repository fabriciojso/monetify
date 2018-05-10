<?php

namespace Monetify\Entities\User;


class User {

    private $name;
    private $picture;
    private $birtday;
    private $gender;


    public function __construct($name, $picture, $birtday, $gender) {
        $this->name = $name;
        $this->picture = $picture;
        if(is_string($birtday)){
            $this->birtday = \DateTime::createFromFormat('d/m/Y', $birtday);
        }else {
            $this->birtday = $birtday;
        }
        $this->gender = $gender;
    }

    public function getName() {
        return $this->name;
    }

    public function getPicture() {
        return $this->picture;
    }

    public function getBirtday() {
        return $this->birtday;
    }

    public function getGender() {
        return $this->gender;
    }


}
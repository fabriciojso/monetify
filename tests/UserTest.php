<?php

namespace Tests;

use Monetify\Entities\User\User;

class UserTest extends \PHPUnit\Framework\TestCase {


    public function testCriaUsuarioWithDateFromObject() {
        $user = new User(
            "Fabricio",
            __DIR__ . "/../../resources/fabricio.jpg",
            \DateTime::createFromFormat('d/m/Y', '30/03/1995'),
            "male"
        );
        $this->getAsserts($user);
    }

    public function testCriaUsuarioWithDateFromString() {
        $user = new User(
            "Fabricio",
            __DIR__ . "/../../resources/fabricio.jpg",
            "30/03/1995",
            "male"
        );
        $this->getAsserts($user);
    }

    private function getAsserts(User $user){
        $this->assertEquals("Fabricio", $user->getName());
        $this->assertContains("fabricio.jpg", $user->getPicture());
        $this->assertEquals("30/03/1995", $user->getBirtday()->format("d/m/Y"));
        $this->assertEquals("male", $user->getGender());
    }

}
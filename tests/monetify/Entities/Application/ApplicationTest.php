<?php

use Monetify\Entities\Aplicativo\{
    Application
};
use Monetify\Entities\Application\Components\Picture;

class ApplicationTest extends TestCase {

    /**
     * @var Application
     */
    private $application;
    public function setUp() {
        parent::setUp();

        $this->application = new Application();
        $this->application
            ->setId(1)
            ->setTitle("Descubra seu antes e depois")
            ->setText("Você descobrirá o seu antes e o seu depois")
            ->setImageLarge("")
            ->setImageSmall("");
    }
    public function test_criar_um_aplicativo(){


        $this->assertEquals(1, $this->application->getId());
        $this->assertEquals("Descubra seu antes e depois", $this->application->getTitle());
        $this->assertEquals("Você descobrirá o seu antes e o seu depois", $this->application->getText());
        $this->assertEquals("", $this->application->getImageLarge());
        $this->assertEquals("", $this->application->getImageSmall());
    }

    public function test_cria_um_aplicativo_com_foto(){
        $application = clone $this->application;
        $application->addComponent(new Picture(0, 0, 100, 100, false, false, false));
    }

}
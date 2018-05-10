<?php
namespace Tests\Service\Application;

use Monetify\Entities\Application\Application;
use Monetify\Entities\Application\Components\Background\BackgroundItem;
use Monetify\Entities\Application\Components\Background\Backgrounds;
use Monetify\Entities\Application\Components\Picture\PictureItem;
use Monetify\Entities\Application\Components\Picture\Pictures;
use Monetify\Entities\User\User;
use Monetify\Service\Application\ApplicationService;
use PHPUnit\Framework\TestCase;

class ApplicationServiceTest extends TestCase{

    private $resources;
    private $tmp;

    public function __construct(?string $name = null, array $data = [], string $dataName = '') {
        parent::__construct($name, $data, $dataName);
        $this->resources = __DIR__.'/../../resources';
        $this->tmp = __DIR__.'/../../tmp';
    }

    public function testCreateService1(){
        $user = $this->getMockBuilder(User::class)
                     ->disableOriginalConstructor()
                     ->getMock();

        $user->method("getPicture")->willReturn($this->getResource("fabricio.jpg"));

        $application = $this->getMockBuilder(Application::class)->getMock();
        $application->method("listComponents")
                    ->willReturn([
                       new Backgrounds([
                           new BackgroundItem($this->getResource("applications/01/background.png"))
                       ]),
                       new Pictures([
                           new PictureItem(323, 323, 847, 217, 90, true, true, true)
                       ])
                    ]);
        $service = new ApplicationService($application, $user);
        $service->build()->save($this->getTmp("image.png"));
        $this->assertEquals(
            file_get_contents($this->getResource("applications/01/result1.png")),
            file_get_contents($this->getTmp("image.png"))
        );

    }

    public function testCreateService2(){
        $user = $this->getMockBuilder(User::class)
            ->disableOriginalConstructor()
            ->getMock();

        $user->method("getPicture")->willReturn($this->getResource("fabricio.jpg"));

        $application = $this->getMockBuilder(Application::class)->getMock();
        $application->method("listComponents")
            ->willReturn([
                new Backgrounds([
                    new BackgroundItem($this->getResource("applications/01/background.png"))
                ]),
                new Pictures([
                    new PictureItem(323, 323, 847, 217, 100, false, false, false)
                ])
            ]);
        $service = new ApplicationService($application, $user);
        $service->build()->save($this->getTmp("image.png"));
        $this->assertEquals(
            file_get_contents($this->getResource("applications/01/result2.png")),
            file_get_contents($this->getTmp("image.png"))
        );

    }

    private function getResource($name){
        return $this->resources."/".$name;
    }

    private function getTmp($name){
        return $this->tmp."/".$name;
    }
}
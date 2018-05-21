<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Monetify\Entities\Application\Application;
use Monetify\Entities\Application\Components\Background\BackgroundItem;
use Monetify\Entities\Application\Components\Background\Backgrounds;
use Monetify\Entities\Application\Components\Picture\PictureItem;
use Monetify\Entities\Application\Components\Picture\Pictures;
use Monetify\Entities\User\User;
use Monetify\Service\Application\ApplicationService;

class IndexController extends Controller
{

    public function gerar(Request $request){
        $app = new Application();
        $app->addComponent(new Backgrounds([
            new BackgroundItem('https://wordpress.funtests.org/2017/09/14145522/148.png'),
            new BackgroundItem('https://wordpress.funtests.org/2017/09/14145525/226.png'),
            new BackgroundItem('https://wordpress.funtests.org/2017/09/14145527/326.png'),
            new BackgroundItem('https://wordpress.funtests.org/2017/09/14145529/425.png'),
            new BackgroundItem('https://wordpress.funtests.org/2017/09/14145532/525.png'),
            new BackgroundItem('https://wordpress.funtests.org/2017/09/14145534/626.png'),
            new BackgroundItem('https://wordpress.funtests.org/2017/09/14145538/724.png'),
        ]));
        $app->addComponent(new Pictures([
            new PictureItem(408, 433, 54, 61, 100, true)
        ]));

        $user = new User($request->input('name'), $request->input('imagem'), new Carbon(), 'male');

        $service = new ApplicationService($app, $user);
        $data = $service->build()->encode()->getEncoded();
        $name = md5($data).'.jpg';
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/result/'.$name, $data);
        return [
            'imagem'=>url('result/'.$name)
        ];
    }
}

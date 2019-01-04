<?php

namespace App\Http\Controllers;

use Geek\classes\Superman\Module\UltraBomb;
use Geek\classes\Superman\Module\XPower;
use Geek\classes\Superman\Superman;
use Illuminate\Container\Container;

//use Geek\container\Container;

class WelcomeController extends Controller
{
    public function index()
    {

        $container = new Container();

        // 向该 超级工厂 添加 超人 的生产脚本
        $container->bind('superman', function ($container, $moduleName) {
            return new Superman($container->make($moduleName));
        });

        // 向该 超级工厂 添加 超能力模组 的生产脚本
        $container->bind('xpower', function ($container) {
            return new XPower;
        });

        $container->bind('ultrabomb', function ($container) {
            return new UltraBomb;
        });

        // ******************  华丽丽的分割线  **********************
        //// 开始启动生产
        $superman_1 = $container->make('superman', ['xpower']);
        $superman_2 = $container->make('superman', ['ultrabomb']);
        $superman_3 = $container->make('superman', ['xpower']);
        // ...随意添加
        echo "<pre>";

        print_r($superman_1);



        return '<h1>控制器成功!!!</h1>';
//        $app = Container::getInstance();
//        $factory = $app->make('view');
//        return $factory->make('welcome')->with('data', $data);
    }
}
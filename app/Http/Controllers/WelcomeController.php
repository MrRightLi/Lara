<?php

namespace App\Http\Controllers;

use Geek\classes\Superman\Module\UltraBomb;
use Geek\classes\Superman\Module\XPower;
use Geek\classes\Superman\Superman;
use Geek\container\Container;

class WelcomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'tony',
            'profession' => 'barber',
        ];

        $container = new Container();
        $container->bind('supperman', function ($container, $module) {
            return new Superman($container->make($module));
        });

        // 向该 超级工厂添加超能力模组的生产脚本
        $container->bind('xpower', function($container) {
            return [XPower::class];
        });

        $container->bind('ultrabomb', function($container) {
            return [UltraBomb::class];
        });

        // ****************** 华丽丽的分割线 **********************
        // 开始启动生产
        $superman_1 = $container->make('superman', 'xpower');
        $superman_2 = $container->make('superman', 'ultrabomb');
        $superman_3 = $container->make('superman', 'xpower');
        // ...随意添加


        return '<h1>控制器成功!!!</h1>';
//        $app = Container::getInstance();
//        $factory = $app->make('view');
//        return $factory->make('welcome')->with('data', $data);
    }
}
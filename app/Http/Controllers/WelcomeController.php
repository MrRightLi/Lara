<?php

namespace App\Http\Controllers;


use Geek\classes\MyClass\MyClass;
use Illuminate\Container\Container;

class WelcomeController extends Controller
{
    public function index()
    {

        $container = Container::getInstance();


        $instance = $container->make(MyClass::class); // 等同于 $instance = new MyClass(new AnotherClass());

        $params= ['a', 'b', 'c'];
        $instance->done($params);
    }

    public function mockery()
    {
        $double = \Mockery::mock();
    }
}
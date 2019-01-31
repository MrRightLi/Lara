<?php
/**
 * Created by PhpStorm.
 * User: mrrightli
 * Date: 2019/1/7
 * Time: 8:04 PM
 */

namespace Geek\classes\MyClass;


class MyClass
{
    private $dependency;

    public function __construct(AnotherClass $dependency)
    {
        $this->dependency = $dependency;
    }

    public function done($param)
    {
        $this->dependency->callfuntion($param);
    }
}
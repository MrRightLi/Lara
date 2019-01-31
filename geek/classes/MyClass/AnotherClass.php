<?php
/**
 * Created by PhpStorm.
 * User: mrrightli
 * Date: 2019/1/7
 * Time: 8:05 PM
 */

namespace Geek\classes\MyClass;


class AnotherClass
{

    private $dependency;

    public function __construct(ThirdClass $dependency)
    {
        $this->dependency = $dependency;
    }

    public function callfuntion($params)
    {
        $this->dependency->callThird($params);
    }
}
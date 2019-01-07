<?php
/**
 * Created by PhpStorm.
 * User: mrrightli
 * Date: 2019/1/7
 * Time: 8:09 PM
 */

namespace Geek\classes\MyClass;


class ThirdClass
{

    public function callThird($params)
    {
        echo "<pre>";
        var_dump(__METHOD__);

        var_dump($params);
    }

}
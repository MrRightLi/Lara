<?php
/**
 * Created by PhpStorm.
 * User: mrrightli
 * Date: 2019/1/4
 * Time: 11:26 AM
 */

namespace Geek\classes\Superman\Module;


use Geek\contracts\Superman\SuperModule;


/**
 * 终极炸弹
 */
class UltraBomb implements SuperModule
{
    public function activate(array $target)
    {
        var_dump(__METHOD__);
    }
}
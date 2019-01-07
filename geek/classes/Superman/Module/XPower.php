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
 * X-超能量
 */
class XPower implements SuperModule
{
    public function activate(array $target)
    {
        var_dump(__METHOD__);
    }
}
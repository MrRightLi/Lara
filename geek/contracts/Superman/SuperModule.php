<?php
/**
 * Created by PhpStorm.
 * User: mrrightli
 * Date: 2019/1/4
 * Time: 11:22 AM
 */

namespace Geek\contracts\Superman;


interface SuperModule
{
    /**
     * 超能力激活方法
     *
     * @param array $target 针对目标，可以是一个或多个，自己或他人
     */
    public function activate(array $target);
}
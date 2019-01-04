<?php
/**
 * Created by PhpStorm.
 * User: mrrightli
 * Date: 2019/1/4
 * Time: 11:18 AM
 */

namespace Geek\classes\Superman;


use Geek\contracts\Superman\SuperModule;

class Superman
{
    public $module;

    public function __construct(SuperModule $module)
    {
        $this->module = $module;
    }
}
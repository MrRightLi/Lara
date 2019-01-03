<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Container;

class WelcomeController extends Controller
{
    public function index()
    {
        $user = User::first();

        echo "<pre>";
        var_dump($user);exit;

        $app = Container::getInstance();
        $factory = $app->make('view');

        return $factory->make('welcome')->with('data', $data);
    }
}
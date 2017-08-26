<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class WelcomeController extends Controller
{
    public function index()
    {
        $transactions = Transaction::first();
        $data = $transactions->getAttributes();

        return $data['id'];
    }
}
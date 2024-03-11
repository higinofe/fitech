<?php

namespace App\Http\Controllers\register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankCar extends Controller
{
    public function index()
    {
        return view('register.BankCards');
    }
}

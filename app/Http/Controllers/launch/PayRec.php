<?php

namespace App\Http\Controllers\launch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayRec extends Controller
{
    public function index()
    {
        return view('launch.Paymrec');
    }
}

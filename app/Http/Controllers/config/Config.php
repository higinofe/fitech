<?php

namespace App\Http\Controllers\config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class config extends Controller
{
    public function index()
    {
        return view('config.Con');
    }
}

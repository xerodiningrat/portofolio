<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlarController extends Controller
{
    public function index()
    {
        return view('game.ular');
    }
}

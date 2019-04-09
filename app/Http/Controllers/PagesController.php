<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    return view('home', [

    ]);
    }

    public function goClock()
    {
        return view('clock',[


        ]);
    }

    public function ticTacToe()
    {
        return view("ticTacToe", [

        ]);
    }

    public function calculator()
    {
        return view('calculator', [

        ]);
    }

    public function campaign()
    {
        return view('campaign', [

        ]);
    }

    public function crud()
    {
        return view('crud', [

        ]);
    }
}

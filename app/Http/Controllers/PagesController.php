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

    public function restaurant()
    {
        return view('restaurant', [

        ]);
    }

    public function crud()
    {
        return view('crud', [

        ]);
    }
    public function weather()
    {
        return view('weather', [
    
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $motor = Motor::all();
        return view('welcome', compact('motor'));
    }

    function tawarMotor()
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $motor = Motor::all();

        return view('welcomeUser', compact('motor'));
    }
}

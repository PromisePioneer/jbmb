<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListMotorController extends Controller
{
    function index()
    {
        $motor = DB::table('table_motor')
            ->select(
                'table_motor.id',
                'table_motor.name',
                'table_motor.harga',
                'table_motor.deskripsi',
                'table_motor.status',
                'table_motor.foto',
            )
            ->get();
        return view('layouts.pages.welcome-page.motor.index', compact('motor'));
    }
}

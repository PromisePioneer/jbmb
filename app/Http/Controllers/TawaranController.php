<?php

namespace App\Http\Controllers;

use App\Http\Requests\TawaranRequest;
use App\Models\Tawaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TawaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tawaran = Tawaran::with('motor', 'user')->get();
        return view('layouts.pages.dashboard-page.admin.tawaran.index', compact('tawaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $motor = DB::table('table_motor')
            ->select('table_motor.id', 'table_motor.name', 'table_motor.harga')
            ->get();
        $user = DB::table('users')
            ->select('users.id', 'users.name')
            ->get();
        return view(
            'layouts.pages.dashboard-page.admin.motor.create',
            [
                'motor' => $motor,
                'user' => $user
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TawaranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tawaran $tawaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tawaran $tawaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TawaranRequest $request, Tawaran $tawaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tawaran $tawaran)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\MotorRequest;
use App\Models\Motor;

class MotorController extends Controller
{
    public function index()
    {
        $motor = Motor::latest()->paginate(10);
        return view('layouts.pages.dashboard-page.admin.motor.index', compact('motor'));
    }

    public function create()
    {
        return view('layouts.pages.dashboard-page.admin.motor.create');
    }
    public function store(MotorRequest $request)
    {
        Motor::create($request->validated());
        return redirect('/motor')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit(Motor $motor)
    {
        return view('layouts.pages.dashboard-page.admin.motor.edit', compact('motor'));
    }

    public function update(MotorRequest $request, Motor $motor)
    {
        $motor->update($request->validated());
        return redirect('/motor')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy(Motor $motor)
    {
        $motor->delete();
        return redirect('/motor')->with('success', 'Data Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\MotorRequest;
use App\Models\Motor;
use Illuminate\Support\Facades\DB;

class MotorController extends Controller
{
    public function index()
    {
        $motor = Motor::latest()->paginate(10);
        return view('layouts.pages.dashboard-page.admin.motor.index', compact('motor'));
    }

    public function create()
    {
        $kondisi = DB::table('table_kondisi')->select('table_kondisi.id', 'table_kondisi.name')->get();
        $jenis = DB::table('table_jenis')->select('table_jenis.id', 'table_jenis.name')->get();
        $year = range(1945, strftime("%Y", time()));
        return view(
            'layouts.pages.dashboard-page.admin.motor.create',
            [
                'kondisi' => $kondisi,
                'jenis' => $jenis,
                'year' => $year
            ]
        );
    }
    public function store(MotorRequest $request)
    {
        $motor = new Motor();
        $motor->name = $request->name;
        $motor->merkMotor = $request->merkMotor;
        $motor->transmisi = $request->transmisi;
        $motor->tahun = $request->tahun;
        $motor->masaPajak = $request->masaPajak;
        $motor->kilometer = $request->kilometer;
        $motor->deskripsi = $request->deskripsi;
        $motor->kondisi_id = $request->kondisi;
        $motor->harga = $request->harga;
        $motor->jenis_id = $request->jenis;
        $motor->foto = $request->file('foto')->store('foto/motor', 'public');
        $motor->status = $request->status;
        $motor->save();

        return redirect('/motor')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit(Motor $motor)
    {
        return view('layouts.pages.dashboard-page.admin.motor.edit', compact('motor'));
    }
    public function show(Motor $motor)
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

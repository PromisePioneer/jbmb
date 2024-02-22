<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jenis;
use App\Models\Kondisi;
use App\Models\Motor;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MotorController extends Controller
{
    function indexJenis()
    {
        $breadcrumb = generateBreadcrumb([
            'Jenis Motor' => 'jenis'
        ]);

        $jenis = Jenis::latest()->paginate(10);
        return view('admin.motor.jenis.index', [
            'jenis' => $jenis,
            'breadcrumb' => $breadcrumb
        ]);
    }

    function addJenis()
    {
        $breadcrumb = generateBreadcrumb([
            'Jenis Motor' => 'jenis',
            'Tambah Jenis Motor' => 'add'
        ]);

        return view('admin.motor.jenis.create', [
            'breadcrumb' => $breadcrumb
        ]);
    }

    function simpanJenis(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2'
        ]);
        Jenis::create($request->all());

        return redirect('jenis')->with('success', 'Data berhasil disimpan');
    }

    function editJenis(Jenis $jenis)
    {
        $breadcrumb = generateBreadcrumb([
            'Jenis Motor' => 'jenis',
            'Edit Jenis Motor' => 'jenis/edit'
        ]);

        return view('admin.motor.jenis.edit', [
            'jenis' => $jenis,
            'breadcrumb' => $breadcrumb
        ]);
    }

    function updateJenis(Request $request, Jenis $jenis)
    {
        $request->validate([
            'name' => 'required|min:2'
        ]);
        $jenis->update($request->all());
        return redirect('jenis')->with('success', 'Data berhasil di ubah');
    }

    function destroyJenis(Jenis $jenis)
    {
        $jenis->delete();

        return redirect('jenis')->with('success', 'Data ' . $jenis->name . ' berhasil dihapus ');
    }

    function indexKondisi()
    {
        $breadcrumb = generateBreadcrumb([
            'Kondisi Motor' => 'kondisi'
        ]);

        $kondisi = Kondisi::latest()->paginate(10);
        return view('admin.motor.kondisi.index', [
            'kondisi' => $kondisi,
            'breadcrumb' => $breadcrumb
        ]);
    }

    function createKondisi()
    {
        $breadcrumb = generateBreadcrumb([
            'Kondisi Motor' => 'kondisi',
            'Tambah Kondisi Motor' => 'kondisi/add'
        ]);

        return view('admin.motor.kondisi.create', [
            'breadcrumb' => $breadcrumb
        ]);
    }

    function simpanKondisi(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:2'
        ]);

        Kondisi::create($request->all());

        return redirect('kondisi')->with('success', 'Data berhasil disimpan');
    }

    function editKondisi(Kondisi $kondisi)
    {
        $breadcrumb = generateBreadcrumb([
            'Kondisi Motor' => 'kondisi',
            'Edit Kondisi Motor' => 'kondisi/edit'
        ]);


        return view('admin.motor.kondisi.edit', [
            'breadcrumb' => $breadcrumb,
            'kondisi' => $kondisi
        ]);
    }

    function updateKondisi(Request $request, Kondisi $kondisi)
    {
        $request->validate([
            'name' => 'required|string|min:2'
        ]);
        $kondisi->update([
            'name' => $request->name
        ]);

        return redirect('kondisi')->with('success', 'Data berhasil di ubah');
    }

    function deleteKondisi(Kondisi $kondisi)
    {
        $kondisi->delete();
        return redirect('kondisi')->with('success', 'Data berhasil di hapus');
    }

    function indexMotor()
    {
        $breadcrumb = generateBreadcrumb([
            'List Motor' => 'motor'
        ]);

        $motor = Motor::with(
            'user',
            'kondisi',
            'jenis'
        )->latest()->paginate(10);

        return view('admin.motor.index', [
            'breadcrumb' => $breadcrumb,
            'motor' => $motor
        ]);
    }

    function addMotor()
    {
        $breadcrumb = generateBreadcrumb([
            'List Motor' => 'motor',
            'Tambah Motor' => 'motor/add'
        ]);
        $user = User::all();
        $jenis = Jenis::all();
        $kondisi = Kondisi::all();
        $status = Status::all();

        return view('admin.motor.create', [
            'breadcrumb' => $breadcrumb,
            'kondisi' => $kondisi,
            'status' => $status,
            'jenis' => $jenis,
            'user' => $user,
        ]);
    }

    function simpanMotor(Request $request)
    {
        $user_id = Auth::id();

        $request->validate([
            'name' => 'required|string',
            'merkMotor' => 'required|string',
            'transmisi' => 'required|string',
            'tahun' => 'required|integer',
            'masaPajak' => 'required|date',
            'kilometer' => 'required|numeric',
            'deskripsi' => 'required|string',
            'kondisiID' => 'required|exists:table_kondisi,id',
            'harga' => 'required|numeric',
            'JenisId' => 'required|exists:table_jenis,id',
            'foto' => 'required|mimes:jpg,png,jpeg',
        ]);

        $motor = new Motor();
        $motor->name = $request->name;
        $motor->merkMotor = $request->merkMotor;
        $motor->transmisi = $request->transmisi;
        $motor->tahun = $request->tahun;
        $motor->masaPajak = $request->masaPajak;
        $motor->kilometer = $request->kilometer;
        $motor->deskripsi = $request->deskripsi;
        $motor->kondisi_id = $request->kondisiID;
        $motor->harga = $request->harga;
        $motor->jenis_id = $request->JenisId;
        $motor->foto = $request->file('foto')->store('foto/motor', 'public');
        $motor->user_id = $user_id;
        $motor->save();

        return redirect('motor')->with('success', 'Data berhasil disimpan');
    }

    function editMotor(Motor $motor)
    {
        $breadcrumb = generateBreadcrumb([
            'List Motor' => 'motor',
            'Edit Motor' => 'motor/edit'
        ]);

        $jenis = Jenis::all();
        $kondisi = Kondisi::all();
        return view('admin.motor.edit', compact('motor', 'jenis', 'kondisi', 'breadcrumb'));
    }
}

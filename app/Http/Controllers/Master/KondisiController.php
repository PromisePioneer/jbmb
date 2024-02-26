<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\KondisiRequest;
use App\Models\Kondisi;

class KondisiController extends Controller
{
    function index()
    {
        $kondisi = Kondisi::latest()->paginate(10);
        return view('layouts.pages.dashboard-page.admin.kondisi.index', compact('kondisi'));
    }

    function create()
    {
        return view('layouts.pages.dashboard-page.admin.kondisi.create');
    }

    function store(KondisiRequest $request)
    {
        Kondisi::create($request->validated());
        return redirect('/kondisi')->with('success', 'Data Berhasil Disimpan');
    }

    function edit(Kondisi $kondisi)
    {
        return view('layouts.pages.dashboard-page.admin.kondisi.edit', compact('kondisi'));
    }

    function update(KondisiRequest $request, Kondisi $jenis)
    {
        $jenis->update($request->validated());
        return redirect('/kondisi')->with('success', 'Data Berhasil Diubah');
    }

    function destroy(Kondisi $kondisi)
    {
        $kondisi->delete();
        return redirect('/kondisi')->with('success', 'Data Berhasil Dihapus');
    }
}

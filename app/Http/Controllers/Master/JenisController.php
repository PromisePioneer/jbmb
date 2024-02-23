<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\JenisRequest;
use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        $jenis = Jenis::latest()->paginate(10);
        return view('layouts.pages.dashboard-page.admin.jenis.index', compact('jenis'));
    }

    public function create()
    {
        return view('layouts.pages.dashboard-page.admin.jenis.create');
    }

    public function store(JenisRequest $request)
    {
        Jenis::create($request->validated());
        return redirect('/jenis')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit(Jenis $jenis)
    {
        return view('layouts.pages.dashboard-page.admin.jenis.edit', compact('jenis'));
    }

    public function update(JenisRequest $request, Jenis $jenis)
    {
        $jenis->update($request->validated());
        return redirect('/jenis')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy(Jenis $jenis)
    {
        $jenis->delete();
        return redirect('/jenis')->with('success', 'Data Berhasil Dihapus');
    }
}

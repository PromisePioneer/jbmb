<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    function indexStatus()
    {
        $breadcrumb = generateBreadcrumb([
            'Status' => 'status'
        ]);

        $status = Status::latest()->paginate(10);

        return view('admin.status.index', [
            'breadcrumb' => $breadcrumb,
            'status' => $status
        ]);
    }

    function addStatus()
    {
        $breadcrumb = generateBreadcrumb([
            'Satus' => 'status',
            'Tambah Status' => 'status/add'
        ]);

        return view('admin.status.create', [
            'breadcrumb' => $breadcrumb
        ]);
    }

    function simpanStatus(Request $request)
    {
        $request->validate([
            'status' => 'required|string|min:2'
        ]);

        Status::create($request->all());

        return redirect('status')->with('status', 'Data berhasil disimpan');
    }

    function editStatus(Status $status)
    {
        $breadcrumb = generateBreadcrumb([
            'Status' => 'status',
            'Edit Status' => 'status/edit'
        ]);

        return view('admin.status.edit', [
            'breadcrumb' => $breadcrumb,
            'status' => $status
        ]);
    }

    function updateStatus(Request $request, Status $status)
    {
        $request->validate([
            'status' => 'required|string|min:2'
        ]);

        $status->update([
            'status' => $request->status
        ]);

        return redirect('status')->with('success', 'Data berhasil diubah');
    }

    function deleteStatus(Status $status)
    {
        $status->delete();
        return redirect('status')->with('success', 'Data berhasil dihapus');
    }
}

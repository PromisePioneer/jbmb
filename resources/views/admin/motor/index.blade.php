@extends('partials.main')
@section('title', 'Motor')
@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4>List Motor</h4>
                    @include('partials.add-button', ['href' => route('motor.add')])
                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th width=10px>#</th>
                            <th>Nama Motor</th>
                            <th>Kondisi Motor</th>
                            <th>Jenis Motor</th>
                            <th>Masa Pajak</th>
                            <th>Penjual</th>
                            <th>Foto Motor</th>
                            <th width=10px>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($motor as $m)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $m->name }}</td>
                                <td>{{ $m->kondisi->name }}</td>
                                <td>{{ $m->jenis->name }}</td>
                                <td>{{ $m->masaPajak }}</td>
                                <td>{{ $m->user->name }}</td>
                                <td>
                                    <img src="{{ Storage::url($m->foto) }}" alt="Foto Motor" width="50px" />
                                </td>
                                <td>
                                    <a href="{{ route('motor.edit', $m->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $m->id }}">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            {{-- @include('admin.delete', ['id' => $m->id]) --}}
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->

@endsection

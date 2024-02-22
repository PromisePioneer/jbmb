@extends('partials.main')
@section('title', 'Motor')
@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4>Tabel Jenis Motor</h4>
                    @include('partials.add-button', ['href' => route('jenis.add')])
                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th width=10px>#</th>
                            <th>Jenis Motor</th>
                            <th width=10px>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($jenis as $j)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $j->name }}</td>
                                <td>
                                    <a href="{{ route('jenis.edit', $j->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $j->id }}">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            @include('admin.motor.jenis.delete', ['id' => $j->id])
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->

@endsection

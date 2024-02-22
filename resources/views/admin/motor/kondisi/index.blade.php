@extends('partials.main')
@section('title', 'Kondisi')
@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4>Tabel Kondisi Motor</h4>
                    @include('partials.add-button', ['href' => route('kondisi.add')])
                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th width=10px>#</th>
                            <th>Kondisi Motor</th>
                            <th width=10px>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($kondisi as $k)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->name }}</td>
                                <td>
                                    <a href="{{ route('kondisi.edit', $k->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $k->id }}">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            @include('admin.motor.kondisi.delete', ['id' => $k->id])
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->

@endsection

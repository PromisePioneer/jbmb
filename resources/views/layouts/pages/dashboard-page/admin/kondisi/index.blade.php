@extends('dashboard')
@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif

    <div class="col-lg-6">
        <a href="{{ url('kondisi/create') }}" class="btn btn-primary btn-sm mb-4">Tambah Data</a>
    </div>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kondisi as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->name }}</td>
                        <td>
                            <a href="{{ url('kondisi/edit/' . $row->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ url('kondisi/delete/' . $row->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row justify-content-center mt-4">
            {{ $kondisi->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection

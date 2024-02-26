@extends('dashboard')
@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif

    <div class="col-lg-6">
        <a href="{{ url('motor/create') }}" class="btn btn-primary btn-sm mb-4">Tambah Data</a>
    </div>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Tahun Motor</th>
                    <th>Pajak Motor</th>
                    <th>Jarak Tempuh(km)</th>
                    <th>Status</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($motor as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->harga }}</td>
                        <td>{{ $row->tahun }}</td>
                        <td>{{ $row->masaPajak }}</td>
                        <td>{{ $row->kilometer }}</td>
                        <td>{{ $row->status }}</td>
                        <td>{{ $row->foto }}</td>
                        <td>
                            <a href="{{ url('motor/edit/' . $row->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ url('motor/show/' . $row->id) }}" class="btn btn-primary btn-sm">Lihat</a>
                            <form action="{{ url('motor/delete/' . $row->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row float-end">
            <div class="col-lg-6 mt-4">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

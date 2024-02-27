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
                        <td>
                            @if ($row->status == 0)
                                <span class="badge bg-warning">Belum Terjual</span>
                            @else
                                <span class="badge bg-success">Terjual</span>
                            @endif
                        </td>
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
        <div class="row justify-content-center mt-4">
            {{ $motor->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection

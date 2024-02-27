@extends('dashboard')
@section('content')
    <div class="col-lg-6">
        <a href="{{ url('motor') }}" class="btn btn-warning btn-sm mb-4">Kembali</a>
    </div>

    <form action="{{ url('motor/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-1 col-form-label">Motor</label>
            <div class="col-sm-12">
                <input class="form-control" type="text" placeholder="Nama Motor" name="name">
                @if ($errors->has('name'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Kondisi</label>
            <div class="col-sm-12">
                <select name="kondisi" id="" class="form-control">
                    @forelse ($kondisi as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @empty
                        <option value="" selected disabled>Data Kosong</option>
                    @endforelse
                </select>
                @if ($errors->has('kondisi'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('kondisi') }}</div>
                @endif
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Jenis</label>
            <div class="col-sm-12">
                <select name="jenis" id="" class="form-control">
                    @forelse ($jenis as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @empty
                        <option value="" selected disabled>Data Kosong</option>
                    @endforelse
                </select>
                @if ($errors->has('jenis'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('jenis') }}</div>
                @endif
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-12">
                <select name="status" id="" class="form-control">
                    <option value="0">Belum Terjual</option>
                    <option value="1">Terjual</option>
                </select>
                @if ($errors->has('status'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('status') }}</div>
                @endif
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Merek Motor</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" name="merkMotor" placeholder="Merek Motor">
                @if ($errors->has('merkMotor'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('merkMotor') }}</div>
                @endif
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Transmisi Motor</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" name="transmisi" placeholder="Transmisi Motor">
                @if ($errors->has('transmisi'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('transmisi') }}</div>
                @endif
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Tahun Motor</label>
            <div class="col-sm-12">
                <select name="tahun" class="form-control select2">
                    @foreach ($year as $yearItem)
                        <option value="{{ $yearItem }}">{{ $yearItem }}</option>
                    @endforeach
                </select>
            </div>
            @if ($errors->has('tahun'))
                <div class="alert alert-danger mt-4">{{ $errors->first('tahun') }}</div>
            @endif
            <label for="example-text-input" class="col-sm-2 col-form-label">Kilometer Motor</label>
            <div class="col-sm-12">
                <input type="number" class="form-control" name="kilometer" placeholder="Jarak Tempuh Motor">
                @if ($errors->has('kilometer'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('kilometer') }}</div>
                @endif
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Harga Motor</label>
            <div class="col-sm-12">
                <input type="number" class="form-control" name="harga" placeholder="Harga Motor">
                @if ($errors->has('harga'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('harga') }}</div>
                @endif
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Gambar Motor</label>
            <div class="col-sm-12">
                <input type="file" class="form-control" name="foto" placeholder="Gambar Motor">
                @if ($errors->has('foto'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('foto') }}</div>
                @endif
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Pajak Motor</label>
            <div class="col-sm-12">
                <input type="date" class="form-control" name="masaPajak" placeholder="Pajak Motor">
                @if ($errors->has('masaPajak'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('masaPajak') }}</div>
                @endif
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Deskripsi Motor</label>
            <div class="col-sm-12">
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Motor"></textarea>
                @if ($errors->has('deskripsi'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('deskripsi') }}</div>
                @endif
            </div>
        </div>

        <div class="col-lg-6 mt-4">
            <button type="submit" class="btn btn-primary btn-sm float-end">Submit</button>
        </div>
    </form>
@endsection

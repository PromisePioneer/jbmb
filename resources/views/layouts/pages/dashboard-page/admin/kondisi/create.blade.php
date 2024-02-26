@extends('dashboard')
@section('content')
    <div class="col-lg-6">
        <a href="{{ url('kondisi') }}" class="btn btn-warning btn-sm mb-4">Kembali</a>
    </div>

    <form action="{{ url('kondisi/store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-1 col-form-label">Kondisi</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" placeholder="Kondisi Motor" name="name">
                @if ($errors->has('name'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('name') }}</div>
                @endif
            </div>

        </div>

        <div class="col-lg-6 mt-4">
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </div>
    </form>
@endsection

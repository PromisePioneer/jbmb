@extends('partials.main')
@section('title', 'Edit Jenis')
@section('content')
    <div class="col-12">
        <div class="card">
            @if (session('error'))
                <div class="alert alert-danger mb-0" role="alert">
                    {{ $message }}
                </div>
            @endif
            <div class="card-body">
                <h4 class="card-title">Form @yield('title')</h4>
                <form action="{{ route('jenis.update', ['jenis' => $jenis]) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama Jenis</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('name') is-invalid
                            @enderror"
                                type="text" name="name" value="{{ $jenis->name }}"
                                placeholder="Masukkan Jenis Motor">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="col-12">
                        <button type="submit"
                            class="float-end btn btn-outline-info waves-effect waves-light">Simpan</button>
                    </div>
                    <!-- end row -->
                </form>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div> <!-- end col -->
@endsection
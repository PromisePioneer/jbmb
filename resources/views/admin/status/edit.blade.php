@extends('partials.main')
@section('title', 'Edit Status')
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
                <form action="{{ route('status.update', ['status' => $status]) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('status') is-invalid
                            @enderror"
                                type="text" name="status" value="{{ $status->status }}"
                                placeholder="Masukkan Kondisi Motor">
                            @error('status')
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

@extends('partials.main')
@section('title', 'Tambah Motor')
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
                <form action="{{ route('motor.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama Motor</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('name') is-invalid
                            @enderror"
                                type="text" name="name" placeholder="Masukkan Nama Motor">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Tahun</label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <input type="text" id="year" name="tahun"
                                    class="form-control @error('tahun') is-invalid
                            @enderror">
                                @error('tahun')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- <label for="example-text-input" class="col-sm-2 col-form-label">Penjual</label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                @if (auth()->check())
                                    @if (auth()->user()->hasRole('admin'))
                                        <select name="user" id="" class="form-control">
                                            @foreach ($user as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    @else
                                        <select name="user" id="" class="form-control" disabled>
                                            <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                                        </select>
                                    @endif
                                @endif
                            </div>
                        </div> --}}
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Jenis Motor</label>
                        <div class="col-sm-10">
                            <select name="JenisId"
                                class="form-control select2 @error('JenisId')
                                is-invalid
                            @enderror">
                                @foreach ($jenis as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('JenisId')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Kondisi Motor</label>
                        <div class="col-sm-10">
                            <select name="kondisiID"
                                class="form-control select2 @error('kondisiID')
                                is-invalid
                            @enderror">
                                @foreach ($kondisi as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('kondisiID')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Status Motor</label>
                        <div class="col-sm-10">
                            <select name="statusMID"
                                class="form-control select2 @error('statusMID')
                                is-invalid
                            @enderror">
                                @foreach ($status as $item)
                                    <option value="{{ $item->id }}">{{ $item->status }}</option>
                                @endforeach
                            </select>
                            @error('statusMID')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Trasmisi</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('transmisi') is-invalid
                            @enderror"
                                type="text" name="transmisi" placeholder="Masukkan Trasmisi">
                            @error('transmisi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Merk Motor</label>
                        <div class="col-sm-6">
                            <input class="form-control @error('merkMotor') is-invalid
                            @enderror"
                                type="text" name="merkMotor" placeholder="Masukkan Merk Motor">
                            @error('merkMotor')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="example-text-input" class="col-sm-2 col-form-label">Pajak Motor</label>
                        <div class="col-sm-2">
                            <input class="form-control @error('masaPajak') is-invalid
                            @enderror"
                                type="date" name="masaPajak" placeholder="Masukkan Merk Motor">
                            @error('masaPajak')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Kilometer Motor</label>
                        <div class="col-sm-10">
                            <input type="number"
                                class="form-control @error('kilometer') is-invalid
                            @enderror"
                                name="kilometer" placeholder="Masukkan Kilometer Motor">
                            @error('kilometer')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Deskripsi Motor</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('deskripsi') is-invalid
                            @enderror" type="text"
                                name="deskripsi" placeholder="Masukkan Deskripsi Motor"></textarea>
                            @error('deskripsi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Harga Motor</label>
                        <div class="col-sm-10">
                            <input type="number"
                                class="form-control @error('harga') is-invalid
                            @enderror"
                                name="harga" placeholder="Masukkan Harga Motor">
                            @error('harga')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Foto Motor</label>
                        <div class="col-sm-10">
                            <input type="file"
                                class="form-control @error('foto') is-invalid
                            @enderror"
                                name="foto" placeholder="Masukkan Foto Motor">
                            @error('foto')
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
    @push('js-external')
        <script>
            $(function() {
                $("#year").datepicker({
                    format: "yyyy",
                    viewMode: "years",
                    minViewMode: "years",
                    autoclose: true
                });
            })
        </script>
    @endpush
@endsection

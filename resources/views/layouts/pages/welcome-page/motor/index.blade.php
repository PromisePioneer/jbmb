@extends('welcome')
@section('welcome-content')
    @forelse ($motor as $item)
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make
                        up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary waves-effect waves-light">Button</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card-title">
                <h4>Motor Tidak Ditemukan</h4>
            </div>
        </div>
    @endforelse

    </div><!-- end col -->
@endsection

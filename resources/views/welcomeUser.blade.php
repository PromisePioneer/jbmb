@extends('partials-user.main')
@section('content')
    <!-- end page title -->
    <div class="row">
        @forelse ($motor as $item)
            <div class="col-xl-3 col-md-6">
                <div class="card pricing-box">
                    <div class="card-body p-4">
                        <div class="d-flex mt-2">
                            <div class="flex-shrink-0 align-self-center">
                                <i class="ion ion-md-aperture h2"></i>
                            </div>
                            <div class="flex-grow-1 ms-auto text-end">
                                <h4>{{ $item->name }}</h4>
                                <p class="text-muted mb-0">Sed ut neque unde</p>
                            </div>
                        </div>
                        <div class="pricing-features mt-5 pt-2">
                            <div class="text-center mt-5">
                                <h1 class="mb-0"><sup><small>$</small></sup>19/<span class="font-size-16">Per month</span>
                                </h1>
                            </div>
                            <p><i class="mdi mdi-check text-primary me-2"></i> Free Live Support</p>
                            <p><i class="mdi mdi-check text-primary me-2"></i> Unlimited User</p>
                            <p><i class="mdi mdi-check text-primary me-2"></i> No Time Tracking</p>
                            <p><i class="mdi mdi-close text-primary me-2"></i> Free Setup</p>
                        </div>
                        <div class="d-grid mt-5">
                            <a href="#" class="btn btn-primary waves-effect waves-light">Tawar</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection

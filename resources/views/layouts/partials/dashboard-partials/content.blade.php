<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="page-title">@yield('title')</h6>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">@yield('title-desc')</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- end row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">@yield('page-desc')</h4>
                            <div class="row">
                                @yield('content')
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

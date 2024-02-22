<!doctype html>
<html lang="en">

@include('partials-user.headT')

<body data-topbar="light" data-layout="horizontal">
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('partials-user.header')

        @include('partials-user.menu')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="float-end d-none d-md-block">
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Veltrix<span class="d-none d-sm-inline-block"> - Crafted with <i
                                    class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                        </div>
                    </div>
                </div>
            </footer>


        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title px-3 py-4">
                <a href="javascript:void(0);" class="right-bar-toggle float-end">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
                <h5 class="m-0">Login</h5>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center">Masukkan Email dan Password</h6>

            <div class="p-4">
                <form class="mt-4" action="{{ route('authenticate') }}" method="POST">
                    @csrf
                    @if (session('error'))
                        <div class="alert alert-warning">{{ session('error') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{ implode('', $errors->all()) }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="Enter email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="userpassword">Password</label>
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" id="userpassword"
                            placeholder="Enter password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customControlInline">
                                <label class="form-check-label" for="customControlInline">Remember
                                    me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-end">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log
                                In</button>
                        </div>
                    </div>

                    <div class="mt-2 mb-0 row">
                        <div class="col-12 mt-4">
                            <a href="pages-recoverpw.html"><i class="mdi mdi-lock"></i> Forgot your
                                password?</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    @include('partials.script')

</body>

</html>

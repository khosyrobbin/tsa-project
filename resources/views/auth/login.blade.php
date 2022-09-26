@extends('layouts.app')

@section('content')
<body>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3">
                            Absen Magang Pelindo
                        </a>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content mt-0 ps">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Log In</h4>
                                    <p class="mb-0">Enter your email and password</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="http://magang-pelindo.herokuapp.com/login">
                                        <input type="hidden" name="_token" value="RhZjkeofWdhGDAm6HYON6MAIKc6yfjkkbjZTrQOM">
                                        <div class="mb-3">
                                            <input id="email" type="email" class="form-control form-control-lg" "="" name="email" value="" placeholder="Email" aria-label="Email" required="" autocomplete="email" autofocus="">
                                        </div>
                                        <div class="mb-3">
                                            <input id="password" type="password" class="form-control form-control-lg" "="" placeholder="Password" aria-label="Password" name="password" required="" autocomplete="current-password">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Login</button>
                                            <a class="btn btn-link" href="http://magang-pelindo.herokuapp.com/password/reset"></a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1591907303049-a5e5df26bcb9?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1814&amp;q=80'); background-size: cover;">
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">PT PELINDO MULTI TERMINAL</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></main>
    <!--   Core JS Files   -->
    <script src="http://magang-pelindo.herokuapp.com/template/assets/js/core/popper.min.js"></script>
    <script src="http://magang-pelindo.herokuapp.com/template/assets/js/core/bootstrap.min.js"></script>
    <script src="http://magang-pelindo.herokuapp.com/template/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="http://magang-pelindo.herokuapp.com/template/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="http://magang-pelindo.herokuapp.com/template/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>
@endsection

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/ionicons/dist/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/shared/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset("lending_page/assets/img/Logo-Karang-Taruna-300x293.png")}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-10 mx-auto">
              	<br>
            	<div class="row">
	              	<div class="col-lg-6 text-center">
	              		<img src="{{ asset('lending_page/assets/img/Logo-Karang-Taruna-300x293.png') }}" width="45%">
	              		<h1>Login Admin Web Karangtaruna Desa Maguwoharjo</h1>
	              	</div>
	              	<div class="col-lg-1"></div>
	              	<div class="col-lg-5">
	              		@if (session('pesan'))
	              			<div class="alert alert-warning alert-dismissible fade show" role="alert">
								{{ session('pesan') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    	<span aria-hidden="true">&times;</span>
								</button>
							</div>
	              		@endif
              			<div class="auto-form-wrapper">
		              		<form action="{{ route('admin/login') }}" method="post"> 
		              			@csrf
			                  <div class="form-group">
			                    <div class="input-group">
			                      <input type="text" name="username" class="form-control" placeholder="Username" style="font-size: 19px; font-weight: 300;">
			                      <div class="input-group-append">
			                        <span class="input-group-text">
			                          <i class="mdi mdi-check-circle-outline"></i>
			                        </span>
			                      </div>
			                    </div>
			                  </div>
			                  <div class="form-group">
			                    <div class="input-group">
			                      <input type="password" name="password" class="form-control" placeholder="Password" style="font-size: 19px; font-weight: 300;">
			                      <div class="input-group-append">
			                        <span class="input-group-text">
			                          <i class="mdi mdi-check-circle-outline"></i>
			                        </span>
			                      </div>
			                    </div>
			                  </div>
			                  <div class="form-group text-center">
			                    <button class="btn btn-primary submit-btn btn-block" style="font-size: 20px">Login</button>
			                    <br>
			                    <a href="">Lupa Kata Sandi?</a>
			                    <hr>
			                    <button class="btn btn-success submit-btn btn-lg" style="font-size: 20px">Buat Akun Baru</button>
			                  </div>
			                  {{-- <div class="form-group d-flex justify-content-between"> --}}
			                    {{-- <div class="form-check form-check-flat mt-0">
			                      <label class="form-check-label">
			                        <input type="checkbox" class="form-check-input" checked> Keep me signed in </label>
			                    </div> --}}
			                    {{-- <a href="#" class="text-small forgot-password text-black">Forgot Password</a> --}}
			                  {{-- </div> --}}
			                  {{-- <div class="form-group">
			                    <button class="btn btn-block g-login">
			                      <img class="mr-3" src="../../../assets/images/file-icons/icon-google.svg" alt="">Log in with Google</button>
			                  </div> --}}
			                  {{-- <div class="text-block text-center my-3">
			                    <span class="text-small font-weight-semibold">Not a member ?</span>
			                    <a href="register.html" class="text-black text-small">Create new account</a>
			                  </div> --}}
			                </form>
              			</div>
	              	</div>
            	</div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js') }}"></script> --}}
    <!-- endinject -->
    <!-- inject:js -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/shared/off-canvas.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/shared/misc.js') }}"></script> --}}
    <!-- endinject -->
    <script src="{{ asset('assets/js/shared/jquery.cookie.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
    	$('.alert').alert()
    </script>
  </body>
</html>
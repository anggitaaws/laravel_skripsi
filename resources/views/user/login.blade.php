<!doctype html>
<html lang="en">
  <head>
  	<title>Login Dokumen Digital</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('halaman_login/css/style.css') }}">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Dokumen Digital PLN</title>
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
	<link href="{{ asset('halaman_dashboard/dist/css/styles.css')}}" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	</head>
	<body class="sb-nav-fixed">
		<nav class="sb-topnav navbar navbar-expand navbar" style="background-color: #14a2ba;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 font-inter" href="#" style="color: #fff;">
            <img src="{{ asset('halaman_dashboard/dist/assets/img/Logo_PLN.png') }}" width="40" height="50" alt="" class="d-inline-block align-text-center">
            PT PLN (Persero) UP3 Pinrang
         </a>
        </nav>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section fw-bold" style="color: #125D72;">LOGIN UNTUK AKSES DOKUMEN DIGITAL</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5" style="background-color: #E7F6F9;">
							<form action="{{ route('login.post') }}" class="signin-form" method="post">
                                @csrf
			      		<div class="form-group mt-3">
			      			<input type="email" name="email" id="email" value= "{{ old('email') }}" class="form-control" required>
			      			<label class="form-control-placeholder" for="email" style="color: #14A2BA;">Email</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" name="password" id="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password" style="color: #14A2BA;">Password</label>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3" style="background-color: #14A2BA;">LOGIN</button>
						</a>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	<footer class="py-4 mt-auto" style="background-color: #D9D9D9; color: black;">
		<div class="container-fluid px-3">
			<div class="d-flex align-items-center justify-content-between small">
				<div class="text-muted">Copyright &copy; Anggita-Maya 2025</div>
			</div>
		</div>
	</footer>

    <script src="{{ asset('halaman_login/js/jquery.min.js') }}"></script>
  <script src="{{ asset('halaman_login/js/popper.js') }}"></script>
  <script src="{{ asset('halaman_login/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('halaman_login/js/main.js') }}"></script>

	</body>
</html>


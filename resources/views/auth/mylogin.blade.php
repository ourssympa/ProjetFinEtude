<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from warehouse-admin-dashboard.multipurposethemes.com/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 23:34:08 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="https://warehouse-admin-dashboard.multipurposethemes.com/images/favicon.ico">

	<title>Connexion page </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{Asset("AdminAssets/main/css/vendors_css.css")}}">

	<!-- Style-->
	<link rel="stylesheet" href="{{Asset("AdminAssets/main/css/style.css")}}">
	<link rel="stylesheet" href="{{Asset("AdminAssets/main/css/skin_color.css")}}">
</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(AdminAssets/images/auth-bg/bg-1.jpg)">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Mida Microfinance</h2>
								<p class="mb-0">Connexion</p>
								<x-auth-session-status class="mb-4" :status="session('status')" />

								<!-- Validation Errors -->
								<x-auth-validation-errors class="mb-4" :errors="$errors" />
							</div>
							<div class="p-40">
								<form method="POST" action="{{ route('login') }}">
									@csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input class="form-control ps-15 bg-transparent" placeholder="Votre Email" type="email" name="email" :value="old('email')" required autofocus>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" name="password" required autocomplete="current-password" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									<button type="submit" class="btn btn-primary">
										Connexion
									</button>
								</form>

							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{Asset("AdminAssets/main/js/vendors.min.js")}}"></script>
	<script src="{{Asset("AdminAssets/mainjs/pages/chat-popup.js")}}"></script>
	<script src="{{Asset("AdminAssets/assets/icons/feather-icons/feather.min.js")}}"></script>

</body>

<!-- Mirrored from warehouse-admin-dashboard.multipurposethemes.com/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 23:34:08 GMT -->

</html>
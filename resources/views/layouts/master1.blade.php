<!-- <!DOCTYPE html>
<html>
<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">PositronX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html> -->


<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/header-colors.css')}}" />
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N')}}" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css')}}" >
    <!--datatable link-->
   <link rel="stylesheet" href="{{asset('//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css')}}">
	<title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
	 <!--start header wrapper-->	
	  <div class="header-wrapper">
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="topbar-logo-header d-none d-lg-flex">
						<div class="">
							<img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
						</div>
						<div class="">
							<h4 class="logo-text">Rocker</h4>
						</div>
					</div>
					<div class="mobile-toggle-menu d-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"><i class='bx bx-menu'></i></div>
					<div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
						<input class="form-control px-5" disabled type="search" placeholder="Search">
						<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"><i class='bx bx-search'></i></span>
					  </div>
					  <div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="assets/images/county/02.png" width="22" alt="">
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/01.png" width="20" alt=""><span class="ms-2">English</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/02.png" width="20" alt=""><span class="ms-2">Catalan</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/03.png" width="20" alt=""><span class="ms-2">French</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/04.png" width="20" alt=""><span class="ms-2">Belize</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/05.png" width="20" alt=""><span class="ms-2">Colombia</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/06.png" width="20" alt=""><span class="ms-2">Spanish</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/07.png" width="20" alt=""><span class="ms-2">Georgian</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/08.png" width="20" alt=""><span class="ms-2">Hindi</span></a>
									</li>
								</ul>
							</li>
							<li class="nav-item dark-mode d-none d-sm-flex">
								<a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
								</a>
							</li>

							<li class="nav-item dropdown dropdown-app">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a>
								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="app-container p-2 my-2">
									  <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/slack.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Slack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/behance.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Behance</p>
											  </div>
											  </div>
										  </a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												<img src="{{asset('assets/images/app/google-drive.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/outlook.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Outlook</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/github.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">GitHub</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/stack-overflow.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/figma.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/twitter.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Twitter</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/google-calendar.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Calendar</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/spotify.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Spotify</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/google-photos.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/pinterest.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/linkedin.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">linkedin</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/dribble.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/youtube.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">YouTube</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/google.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">News</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/envato.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Envato</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{asset('assets/images/app/safari.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Safari</p>
											  </div>
											  </div>
											</a>
										 </div>
				
									  </div><!--end row-->
				
									</div>
								</div>
							</li>

							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-badge">8 New</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('assets/images/avatars/avatar-1.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger">dc
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('assets/images/avatars/avatar-2.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success">
													<img src="{{asset('assets/images/app/outlook.png')}}" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Account Created<span class="msg-time float-end">28 min
												ago</span></h6>
													<p class="msg-info">Successfully created new email</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info">Ss
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
												class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('assets/images/avatars/avatar-4.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
												min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
												ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary">
													<img src="{{asset('assets/images/app/github.png')}}" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
												ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('assets/images/avatars/avatar-8.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
												ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<button class="btn btn-primary w-100">View All Notifications</button>
										</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-shopping-bag'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">My Cart</p>
											<p class="msg-header-badge">10 Items</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{asset('assets/images/products/11.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{asset('assets/images/products/02.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{asset('assets/images/products/03.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{asset('assets/images/products/04.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{asset('assets/images/products/05.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{asset('assets/images/products/06.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{asset('assets/images/products/07.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{asset('assets/images/products/08.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{asset('assets/images/products/09.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<h5 class="mb-0">Total</h5>
												<h5 class="mb-0 ms-auto">$489.00</h5>
											</div>
											<button class="btn btn-primary w-100">Checkout</button>
										</div>
									</a>
								</div>
							</li>
						</ul>
					</div>

                    @php

                    $id = Auth::user()->admin_id;
                    $profileData = App\Models\subscription_admin::find($id);
            
                      @endphp
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img class="wd-30 ht-30 rounded-circle" width="60"height="50"
  src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="profile">
							<div class="user-info">
								<p class="user-name mb-0">{{ $profileData->company_name}}</p>
								<p class="designattion mb-0">{{ $profileData->admin_email}}</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center" href="{{route('profile')}}"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="{{route('setting')}}"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="{{route('dashboard')}}"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-download fs-5"></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							 <li><a class="dropdown-item d-flex align-items-center" href="{{route('admin.logout')}}">
                                <i class="bx bx-log-out-circle"></i><span>Logout</span></a> 
                            {{-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                            </li>
                            @endguest --}}
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>

		
		<!--end header -->
		<!--navigation-->
		   <div class="primary-menu">
			   <nav class="navbar navbar-expand-lg align-items-center">
				  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
				   aria-labelledby="offcanvasNavbarLabel">
					<div class="offcanvas-header border-bottom">
						<div class="d-flex align-items-center">
							<div class="">
								<img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
							</div>
							<div class="">
								<h4 class="logo-text">Rocker</h4>
							</div>
						</div>
					  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
					  <ul class="navbar-nav align-items-center flex-grow-1">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="parent-icon"><i class='bx bx-home-alt'></i>
								</div>
								<div class="menu-title d-flex align-items-center">Customer</div>
								<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
							</a>
							<ul class="dropdown-menu">
							  <li><a class="dropdown-item" href="{{route('customerview')}}"><i class='bx bx-pie-chart-alt' ></i>Customer View</a></li>
							  {{-- <li><a class="dropdown-item" href="index2.html"><i class='bx bx-shield-alt-2'></i>Alternate</a></li> --}}
							  {{-- <li><a class="dropdown-item" href="index3.html"><i class='bx bx-line-chart'></i>Graphical</a></li> --}}
							</ul>
						  </li>
						  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="parent-icon"><i class='bx bx-cube'></i>
								</div>
								<div class="menu-title d-flex align-items-center">Supplier</div>
								<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
							</a>
							<ul class="dropdown-menu">
							  <li><a class="dropdown-item" href="{{route('supplierview')}}"><i class='bx bx-envelope'></i>Supplier View</a></li>
							  {{-- <li><a class="dropdown-item" href="app-chat-box.html"><i class='bx bx-conversation' ></i>Chat Box</a></li> --}}
							  {{-- <li><a class="dropdown-item" href="app-file-manager.html"><i class='bx bx-file' ></i>File Manager</a></li> --}}
							  {{-- <li><a class="dropdown-item" href="app-contact-list.html"><i class='bx bx-microphone' ></i>Contacts</a></li> --}}
							  {{-- <li><a class="dropdown-item" href="app-to-do.html"><i class='bx bx-check-shield'></i>Todo</a></li> --}}
							  {{-- <li><a class="dropdown-item" href="app-invoice.html"><i class='bx bx-printer' ></i>Invoice</a></li> --}}
							  {{-- <li class="nav-item dropend">
								<a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-file'></i>Pages</a>
								<ul class="dropdown-menu submenu">
									<li class="nav-item dropend"><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-radio-circle'></i>Error</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="errors-404-error.html"><i class='bx bx-radio-circle'></i>404 Error</a></li>
											<li><a class="dropdown-item" href="errors-500-error.html"><i class='bx bx-radio-circle'></i>500 rror</a></li>
											<li><a class="dropdown-item" href="errors-coming-soon.html"><i class='bx bx-radio-circle'></i>Coming Soon</a></li>
											<li><a class="dropdown-item" href="error-blank-page.html"><i class='bx bx-radio-circle'></i>Blank Page</a></li>
										  </ul>
									</li>
									<li><a class="dropdown-item" href="user-profile.html"><i class='bx bx-radio-circle'></i>User Profile</a></li>
									<li><a class="dropdown-item" href="timeline.html"><i class='bx bx-radio-circle'></i>Timeline</a></li>
									<li><a class="dropdown-item" href="faq.html"><i class='bx bx-radio-circle'></i>FAQ</a></li>
									<li><a class="dropdown-item" href="pricing-table.html"><i class='bx bx-radio-circle'></i>Pricing</a></li>
								  </ul>
							  </li> --}}
							</ul>
						  </li>
						  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="parent-icon">
									<i class='bx bx-message-square-edit'></i>
								</div>
								<div class="menu-title d-flex align-items-center">Products</div>
								<div class="ms-auto dropy-icon">
									<i class='bx bx-chevron-down'></i>
								</div>
							</a>
							{{-- <ul class="dropdown-menu">
								<li> <a class="dropdown-item" href="form-elements.html"><i class='bx bx-message-square-dots'></i>Form Elements</a>
								</li>
								<li> <a class="dropdown-item" href="form-input-group.html"><i class='bx bx-book-content' ></i>Input Groups</a>
								</li>
								<li> <a class="dropdown-item" href="form-radios-and-checkboxes.html"><i class='bx bx-radio-circle-marked'></i>Radios & Checkboxes</a>
								</li>
								<li> <a class="dropdown-item" href="form-layouts.html"><i class='bx bx-layer'></i>Forms Layouts</a>
								</li>
								<li> <a class="dropdown-item" href="form-validations.html"><i class='bx bx-file-blank' ></i>Form Validation</a>
								</li>
								<li> <a class="dropdown-item" href="form-wizard.html"><i class='bx bx-glasses'></i>Form Wizard</a>
								</li>
								<li> <a class="dropdown-item" href="form-text-editor.html"><i class='bx bx-edit'></i>Text Editor</a>
								</li>
								<li> <a class="dropdown-item" href="form-file-upload.html"><i class='bx bx-upload'></i>File Upload</a>
								</li>
								<li> <a class="dropdown-item" href="form-date-time-pickes.html"><i class='bx bx-calendar-check' ></i>Date Pickers</a>
								</li>
								<li> <a class="dropdown-item" href="form-select2.html"><i class='bx bx-check-double'></i>Select2</a>
								</li>
								<li> <a class="dropdown-item" href="form-repeater.html"><i class='bx bx-directions'></i>Form Repeater</a>
								</li>
							</ul> --}}
						  </li>
						  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="parent-icon"><i class='bx bx-lock'></i>
								</div>
								<div class="menu-title d-flex align-items-center">Enquiry</div>
								<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
							</a>
							{{-- <ul class="dropdown-menu">
							  <li class="nav-item dropend">
								<a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-receipt'></i>Basic</a>
								<ul class="dropdown-menu submenu">
									<li><a class="dropdown-item" href="auth-basic-signin.html"><i class='bx bx-radio-circle'></i>Sign In</a></li>
									<li><a class="dropdown-item" href="auth-basic-signup.html"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
									<li><a class="dropdown-item" href="auth-basic-forgot-password.html"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
									<li><a class="dropdown-item" href="auth-basic-reset-password.html"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
								  </ul>
							  </li>
							  <li class="nav-item dropend">
								<a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-cylinder'></i>Cover</a>
								<ul class="dropdown-menu submenu">
									<li><a class="dropdown-item" href="auth-cover-signin.html"><i class='bx bx-radio-circle'></i>Sign In</a></li>
									<li><a class="dropdown-item" href="auth-cover-signup.html"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
									<li><a class="dropdown-item" href="auth-cover-forgot-password.html"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
									<li><a class="dropdown-item" href="auth-cover-reset-password.html"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
								  </ul>
							  </li>
							  <li class="nav-item dropend">
								<a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-aperture'></i>Header & Footer</a>
								<ul class="dropdown-menu submenu">
									<li><a class="dropdown-item" href="auth-header-footer-signin.html"><i class='bx bx-radio-circle'></i>Sign In</a></li>
									<li><a class="dropdown-item" href="auth-header-footer-signup.html"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
									<li><a class="dropdown-item" href="auth-header-footer-forgot-password.html"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
									<li><a class="dropdown-item" href="auth-header-footer-reset-password.html"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
								  </ul>
							  </li>
							</ul> --}}
						  </li>
						  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="parent-icon"><i class='bx bx-briefcase-alt'></i>
								</div>
								<div class="menu-title d-flex align-items-center">Orders</div>
								<div class="ms-auto dropy-icon">
									<i class='bx bx-chevron-down'></i></div>
							</a>
							{{-- <ul class="dropdown-menu">
							  <li> <a class="dropdown-item" href="widgets.html"><i class='bx bx-wine'></i>Widgets</a></li>
							  <li class="nav-item dropend">
								<a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-cart' ></i>eCommerce</a>
								<ul class="dropdown-menu submenu">
									<li><a class="dropdown-item" href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Products</a></li>
									<li><a class="dropdown-item" href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Product Details</a></li>
									<li><a class="dropdown-item" href="ecommerce-add-new-products.html"><i class='bx bx-radio-circle'></i>Add New Products</a></li>
									<li><a class="dropdown-item" href="ecommerce-orders.html"><i class='bx bx-radio-circle'></i>Orders</a></li>
								  </ul>
							  </li>
							  <li class="nav-item dropend">
								<a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-ghost'></i>Components</a>
								<ul class="dropdown-menu scroll-menu">
									<li><a class="dropdown-item" href="component-alerts.html"><i class='bx bx-radio-circle'></i>Alerts</a></li>
									<li><a class="dropdown-item" href="component-accordions.html"><i class='bx bx-radio-circle'></i>Accordions</a></li>
									<li><a class="dropdown-item" href="component-badges.html"><i class='bx bx-radio-circle'></i>Badges</a></li>
									<li><a class="dropdown-item" href="component-buttons.html"><i class='bx bx-radio-circle'></i>Buttons</a></li>
									<li><a class="dropdown-item" href="component-cards.html"><i class='bx bx-radio-circle'></i>Cards</a></li>
									<li><a class="dropdown-item" href="component-carousels.html"><i class='bx bx-radio-circle'></i>Carousels</a></li>
									<li><a class="dropdown-item" href="component-list-groups.html"><i class='bx bx-radio-circle'></i>List Groups</a></li>
									<li><a class="dropdown-item" href="component-media-object.html"><i class='bx bx-radio-circle'></i>Media Objects</a></li>
									<li><a class="dropdown-item" href="component-modals.html"><i class='bx bx-radio-circle'></i>Modals</a></li>
									<li><a class="dropdown-item" href="component-navs-tabs.html"><i class='bx bx-radio-circle'></i>Navs & Tabs</a></li>
									<li><a class="dropdown-item" href="component-navbar.html"><i class='bx bx-radio-circle'></i>Navbar</a></li>
									<li><a class="dropdown-item" href="component-paginations.html"><i class='bx bx-radio-circle'></i>Pagination</a></li>
									<li><a class="dropdown-item" href="component-popovers-tooltips.html"><i class='bx bx-radio-circle'></i>Popovers & Tooltips</a></li>
									<li><a class="dropdown-item" href="component-progress-bars.html"><i class='bx bx-radio-circle'></i>Progress</a></li>
									<li><a class="dropdown-item" href="component-spinners.html"><i class='bx bx-radio-circle'></i>Spinners</a></li>
									<li><a class="dropdown-item" href="component-notifications.html"><i class='bx bx-radio-circle'></i>Notifications</a></li>
									<li><a class="dropdown-item" href="component-avtars-chips.html"><i class='bx bx-radio-circle'></i>Avatrs & Chips</a></li>
								  </ul>
							  </li>
							  <li class="nav-item dropend">
								<a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-card' ></i>Content</a>
								<ul class="dropdown-menu submenu">
									<li><a class="dropdown-item" href="content-grid-system.html"><i class='bx bx-radio-circle'></i>Grid System</a></li>
									<li><a class="dropdown-item" href="content-typography.html"><i class='bx bx-radio-circle'></i>Typography</a></li>
									<li><a class="dropdown-item" href="content-text-utilities.html"><i class='bx bx-radio-circle'></i>Text Utilities</a></li>
								  </ul>
							  </li>
							  <li class="nav-item dropend">
								<a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-droplet' ></i>Icons</a>
								<ul class="dropdown-menu submenu">
									<li><a class="dropdown-item" href="icons-line-icons.html"><i class='bx bx-radio-circle'></i>Line Icons</a></li>
									<li><a class="dropdown-item" href="icons-boxicons.html"><i class='bx bx-radio-circle'></i>Boxicons</a></li>
									<li><a class="dropdown-item" href="icons-feather-icons.html"><i class='bx bx-radio-circle'></i>Feather Icons</a></li>
								  </ul>
							  </li>
							</ul> --}}
						  </li>
						  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="parent-icon"><i class='bx bx-line-chart'></i>
								</div>
								<div class="menu-title d-flex align-items-center">Reports</div>
								<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
							</a>
							{{-- <ul class="dropdown-menu">
							  <li><a class="dropdown-item" href="charts-apex-chart.html"><i class='bx bx-bar-chart-alt-2' ></i>Apex</a></li>
							  <li><a class="dropdown-item" href="charts-chartjs.html"><i class='bx bx-line-chart'></i>Chartjs</a></li>
							  <li><a class="dropdown-item" href="charts-highcharts.html"><i class='bx bx-pie-chart-alt'></i>HighCharts</a></li>
							  <li class="nav-item dropend">
								<a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-map-pin'></i>Maps</a>
								<ul class="dropdown-menu submenu">
									<li><a class="dropdown-item" href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a></li>
									<li><a class="dropdown-item" href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a></li>
								 </ul>
							  </li>
							</ul> --}}
						  </li>
						  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="parent-icon"><i class="bx bx-grid-alt"></i>
								</div>
								<div class="menu-title d-flex align-items-center">Custom</div>
								<div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
							</a>
							<ul class="dropdown-menu">
							  <li><a class="dropdown-item" href="table-basic-table.html"><i class='bx bx-table'></i>Address Region</a></li>
							  <li><a class="dropdown-item" href="table-datatable.html"><i class='bx bx-data' ></i>Address Type</a></li>
							  <li><a class="dropdown-item" href="table-basic-table.html"><i class='bx bx-table'></i>Status</a></li>
							  <li><a class="dropdown-item" href="{{route('user')}}"><i class='bx bx-data' ></i>User</a></li>
							  <li><a class="dropdown-item" href="table-basic-table.html"><i class='bx bx-table'></i>UOM</a></li>
							  <li><a class="dropdown-item" href="table-datatable.html"><i class='bx bx-data' ></i>Supply TermList</a></li>
							  <li><a class="dropdown-item" href="table-basic-table.html"><i class='bx bx-table'></i>Enquiry Priority List</a></li>

							</ul>
						  </li>
					 

					  </ul>
					</div>
				  </div>
			  </nav>
		</div>
		<!--end navigation-->
	   </div>
	   <!--end header wrapper-->

       @yield('content')
       <footer class="page-footer">
        <p class="mb-0">Copyright © 2023. All right reserved.</p>
    </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
    <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
        </div>
        <hr/>
        <h6 class="mb-0">Theme Styles</h6>
        <hr/>
        <div class="d-flex align-items-center justify-content-between">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                <label class="form-check-label" for="lightmode">Light</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                <label class="form-check-label" for="darkmode">Dark</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                <label class="form-check-label" for="semidark">Semi Dark</label>
            </div>
        </div>
        <hr/>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
            <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
        </div>
        <hr/>
        <h6 class="mb-0">Header Colors</h6>
        <hr/>
        <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
                <div class="col">
                    <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/plugins/chartjs/js/chart.js')}}"></script>
    <script src="{{asset('assets/js/index.js')}}"></script>
    <!--app JS-->
    <script src="{{asset('assets/js/app.js')}}"></script>
    
    
    <script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js')}}"></script>
	<script src="{{asset('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js')}}" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js')}}" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
    </body>
    
    </html>
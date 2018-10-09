<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Coldfin Lab</title>
	<link rel="icon" type="image/png" sizes="32x32"  href="{{ url('img/feb.png')}}">
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/header.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/testimonial_slider.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> -->

</head>

<body>

<nav class="navbar navbar-expand-xl navbar-light header bg-white" style="box-shadow: 0 0px 20px 0 rgba(0,2,0,0.1);">

	<a class="navbar-brand" href="{{ url('/')}}">&nbsp; &nbsp;<img src="{{ url('img/Coldfin Logo.png')}}" class="img-fluid logo" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#coldfin">
         <span class="navbar-toggler-icon"></span>
      </button>

	<div class="collapse navbar-collapse" id="coldfin">
	     <ul class="navbar-nav ml-auto">

			 <li class="nav-item active dropdown">
				<a class="nav-link dropdown-toggle px-2 px-xl-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">COMPANY</a>
				<div class="dropdown-menu">
					<a class="dropdown-item pt-2 pt-xl-4" style="color: #20729c; font-weight: 500;">ABOUT US</a>
                    <a class="dropdown-item my-2" href="{{ url('/who-we-are') }}"><i class="fa fa-angle-right"></i> Who We Are</a>
                    <a class="dropdown-item my-2" href="{{ url('/client-testimonial') }}"><i class="fa fa-angle-right"></i> Clients Testimonial</a>
					<a class="dropdown-item my-2" href="{{ url('/career-faq') }}"><i class="fa fa-angle-right"></i> Career FAQ</a>
                </div>
			 </li>

			 <li class="nav-item active dropdown">
				<a class="nav-link dropdown-toggle px-2 px-xl-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">SERVICES</a>
				 <div class="dropdown-menu dropdown-menu1">
				     <div class="row">
							<div class="col-md-5">
						        <a class="dropdown-item pt-2 pt-xl-4" style="color: #20729c; font-weight: 500;">MOBILE APP DEVELOPMENT</a>
								<a class="dropdown-item my-2" href="{{ url('/service/iphone') }}"><i class="fa fa-angle-right"></i> iPhone App Development</a>
								<a class="dropdown-item my-2" href="{{ url('/service/ipad') }}"><i class="fa fa-angle-right"></i> iPad App Development</a>
								<a class="dropdown-item my-2" href="{{ url('/service/android') }}"><i class="fa fa-angle-right"></i> Android App Development</a>
								<a class="dropdown-item my-2" href="{{ url('/service/react') }}"><i class="fa fa-angle-right"></i> React-Native App Development</a>
								<a class="dropdown-item my-2" href="{{ url('/service/ionic') }}"><i class="fa fa-angle-right"></i> Ionic App Development</a>
								<a class="dropdown-item my-2" href="{{ url('/service/web') }}"><i class="fa fa-angle-right"></i> Web App Development</a>
						    </div>

				             <div class="col-md-7">

								<a class="dropdown-item pt-2 pt-xl-4" style="color: #20729c; font-weight: 500;">FUTURE APP DEVELOPMENT</a>
								<a class="dropdown-item my-2" href="{{ url('/service/real-time-app') }}"><i class="fa fa-angle-right"></i> Real-time App Development</a>
								<a class="dropdown-item my-2" href="{{ url('/service/health-care-app') }}"><i class="fa fa-angle-right"></i> Health care Based App Development</a>
								<a class="dropdown-item my-2" href="{{ url('/service/ble-app') }}"><i class="fa fa-angle-right"></i> BLE App Development</a>
								<a class="dropdown-item my-2" href="{{ url('/service/apple-watch') }}"><i class="fa fa-angle-right"></i> Apple Watch App Development</a>
								<a class="dropdown-item my-2" href="{{ url('/service/web-to-mobile') }}"><i class="fa fa-angle-right"></i> Convert Your Website into Android<br> and Ios Development</a>
								<a class="dropdown-item my-2" href="{{ url('/service/wearable-app') }}"><i class="fa fa-angle-right"></i> Wearable App Development</a>
								<a class="dropdown-item my-2" href="{{ url('/service/sass-services') }}"><i class="fa fa-angle-right"></i> Sass Services</a>
								<a class="dropdown-item my-2" href="{{ url('/service/field-work-app')}}"><i class="fa fa-angle-right"></i> Field Work App Development</a>
								<a class="dropdown-item my-2" href="{{ url('/service/real-estate') }}"><i class="fa fa-angle-right"></i> Real-Estate App Development</a>
								<a class="dropdown-item my-2" href="{{ url('/service/iot') }}"><i class="fa fa-angle-right"></i> IOT Development</a>
                             </div>
				 </div>
			</li>

			 <li class="nav-item active">
				<a class="nav-link px-2 px-xl-4" href="{{ url('/portfolio') }}">PORTFOLIO</a>
			 </li>

			 <li class="nav-item active">
				<a class="nav-link px-2 px-xl-4" href="{{ url('/blog') }}">BLOG</a>
			 </li>

			 <li class="nav-item active">
				<a class="nav-link px-2 px-xl-4" href="{{ url('/contact') }}">CONTACT US</a>
			 </li>

			 <li class="nav-item active">
				<a class="nav-link btn btn-primary1 px-2 px-xl-4 hide" href="{{ url('/start-project') }}" style="color: #fff;">START A PROJECT</a>
			 </li>

			 <li class="nav-item active">
				<a class="nav-link px-2 px-xl-4 hide1" href="{{ url('/start-project') }}">START A PROJECT</a>
			 </li>

		</ul>
	</div>
</nav>
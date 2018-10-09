
<!--FOOTER-->

<div class="container-fluid footer-bg">
    <div class="container">
	    <div class="row py-3 py-lg-0">

			<div class="col-md-4 col-lg-3 f1 my-3 my-lg-5">
			    <h2><a>COMPANY</a></h2>
				<hr class="h2-hr">
				<h6 class="mb-3 mt-2 mt-md-4">ABOUT US :</h6>
				<ul>
				    <li class="my-2"><a href="{{ url('/who-we-are') }}"><i class="fa fa-angle-right"></i> Who We Are</a></li>
					<li class="my-2"><a href="{{ url('/client-testimonial') }}"><i class="fa fa-angle-right"></i> Clients Testimonial</a></li>
					<li class="my-2"><a href="{{ url('/career-faq') }}"><i class="fa fa-angle-right"></i> Career FAQ</a></li>
				</ul>
			</div>

			<div class="col-lg-7 my-3 my-lg-5">
			    <h2><a>SERVICE</a></h2>
				<hr class="h2-hr h2-hr1">
				<div class="row">

					<div class="col-md-5">
						<h6 class="mb-3 mt-2 mt-lg-4">MOBILE APP DEVELOPMENT </h6>
						<ul>
							<li class="my-2"><a href="{{ url('/service/iphone') }}"><i class="fa fa-angle-right"></i> iPhone App Development</a></li>
							<li class="my-2"><a href="{{ url('/service/ipad') }}"><i class="fa fa-angle-right"></i> iPad App Development</a></li>
							<li class="my-2"><a href="{{ url('/service/android') }}"><i class="fa fa-angle-right"></i> Android App Development</a></li>
							<li class="my-2"><a href="{{ url('/service/react') }}"><i class="fa fa-angle-right"></i> React-Native App Development</a></li>
							<li class="my-2"><a href="{{ url('/service/ionic') }}"><i class="fa fa-angle-right"></i> Ionic App Development</a></li>
							<li class="my-2"><a href="{{ url('/service/web') }}"><i class="fa fa-angle-right"></i> Web App Development</a></li>
						</ul>
					</div>

                    <div class="col-md-7">
					   <h6 class="mb-3 mt-2 mt-lg-4">FUTURE OF APP DEVELOPMENT </h6>
					   <ul>
						  <li class="my-2"><a href="{{ url('/service/real-time-app') }}"><i class="fa fa-angle-right"></i> Real-Time App Development</a></li>
						  <li class="my-2"><a href="{{ url('/service/health-care-app') }}"><i class="fa fa-angle-right"></i> Health Care Based App Development</a></li>
						  <li class="my-2"><a href="{{ url('/service/ble-app') }}"><i class="fa fa-angle-right"></i> BLE App Development</a></li>
						  <li class="my-2"><a href="{{ url('/service/apple-watch') }}"><i class="fa fa-angle-right"></i> Apple Watch App Development</span></a></li>
						  <li class="my-2"><a href="{{ url('/service/web-to-mobile') }}"><i class="fa fa-angle-right"></i> Convert Your Website Into Android And IOS</a></li>
					       <li class="my-2"><a href="{{ url('/service/wearable-app') }}"><i class="fa fa-angle-right"></i> Wearable App Development</a></li>
						  <li class="my-2"><a href="{{ url('/service/sass-services') }}"><i class="fa fa-angle-right"></i> Sass Services</a></li>
					      <li class="my-2"><a href="{{ url('/service/field-work-app')}}"><i class="fa fa-angle-right"></i> Field Work App Development</a></li>
					      <li class="my-2"><a href="{{ url('/service/real-estate') }}"><i class="fa fa-angle-right"></i> Real-estate App Development</a></li>
					      <li class="my-2"><a href="{{ url('/service/iot') }}"><i class="fa fa-angle-right"></i> IOT Development</a></li>
					  </ul>
				    </div>

		       </div>
			</div>

	        <div class="col-md-4 col-lg-2 my-3 my-lg-5">
			     <h2><a href="{{ url('/portfolio') }}">PORTFOLIO</a></h2>
				 <hr class="h2-hr">

				 <h2><a href="{{ url('/blog') }}">BLOG</a></h2>
				 <hr class="h2-hr">

				 <h2><a href="{{ url('/contact') }}">CONTACT US</a></h2>
				 <hr class="h2-hr">
		    </div>
	</div>
</div>
</div>

<!--FOOTER2-->

<div class="container-fluid footer2-bg py-4">
    <div class="container">
	    <p class="mb-0">Copyright © {{ date('Y') }} by Coldfin Lab</p>
	</div>
</div>


<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src=" {{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/prefixfree.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
   var mobileHover = function () {
    $('*').on('touchstart', function () {
        $(this).trigger('hover');
    }).on('touchend', function () {
        $(this).trigger('hover');
    });
};

mobileHover();
</script>






</body>
</html>

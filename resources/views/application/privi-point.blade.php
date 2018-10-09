@include('header.header')
<link href="{{ asset('css/privi_point.css') }}" rel="stylesheet" type="text/css">
<!--SLIDER BG-->

<div class="container-fluid privi-bg">
    <div class="container text-center">
	    <img src="{{ asset('img/PriviPoint_appIcon.png') }}" />
		<h2>Privi Point</h2>
		<p>This app can be used for the social
           networking purpose </p>
	</div>
</div>

<!--PROJECT OVERVIEW-->

<div class="container-fluid app-bg">
    <div class="row justify-content-center">
	    <div class="col-xl-8 my-auto pl-4 pl-md-5 order-2 order-xl-1 py-xl-5">
		    <h2 class="mb-4">App Story</h2>
			<h3 class="mb-4">This app can be used for the social networking
                purpose and is a market place app that helps in
                organizing everything for selling, buying,
                discovering everything else.</h3>
			<p>Privi point has the ability to track and connect the people for the transactions
of the goods and services as well.</p>
			<p>Privi point is the finest app that would do be done using the instant messaging
for buying and selling the goods.</p>
		</div>

		<div class="col-6 col-lg-4 col-xl-4 order-1 order-xl-2 py-5 text-center">
		    <img src="{{ asset('img/PriviPoint mobile.png') }}" class="img-fluid" />
		</div>
	</div>
</div>

<!--WIRE FRAME-->

<div class="container-fluid app-bg py-5" style="background-color: #448ac5;">
    <div class="container text-center">
	    <h2 style="color: #fff;">Wire Frame</h2>

		<div class="row">
		    <div class="col-6 col-md-3 my-3 mt-md-5">
			    <img src="{{ asset('img/PriviPoint wireframe1.png') }}" class="img-fluid" />
			</div>

			<div class="col-6 col-md-3 my-3 mt-md-5">
			    <img src="{{ asset('img/PriviPoint wireframe2.png') }}" class="img-fluid" />
			</div>

			<div class="col-6 col-md-3 my-3 mt-md-5">
			    <img src="{{ asset('img/PriviPoint wireframe3.png') }}" class="img-fluid" />
			</div>

			<div class="col-6 col-md-3 my-3 mt-md-5">
			    <img src="{{ asset('img/PriviPoint wireframe4.png') }}" class="img-fluid" />
			</div>
		</div>
	</div>
</div>

<!--STYLE GUID-->

<div class="container-fluid app-bg py-5">
    <div class="container text-center">
	    <h2>Style Guide</h2>
		<img src="{{ asset('img/PriviPoint color.png') }}" class="img-fluid py-3 py-md-5" />
	</div>
</div>
<!--ICON DESIGN-->

<div class="container-fluid app-bg">
	<div class="container text-center">
	    <h2 class="pt-3 pt-md-5">ICON DESIGN</h2>
		<hr style="width: 20%; height: 3px; background-color: #448ac5;">
		<img src="{{ asset('img/PriviPoint icon.png') }}" class="img-fluid py-3 py-md-5" />
	</div>
</div>

<!--FINAL ITERFACE-->

<div class="container-fluid app-bg">
	<div class="container text-center">
	    <h2 class="pt-3 pt-md-5">FINAL DESIGN</h2>
		<hr style="width: 20%; height: 3px; background-color: #448ac5;">
	</div>
	<img src="{{ asset('img/PriviPoint final design.png') }}" class="img-fluid py-3 py-md-5" />
</div>


<!--TESTIMONIAL SLIDER-->

<div class="container-fluid test-bg text-center py-5">

	    <h2 class="mb-5">What Client Say</h2>
	<div id="aj1" class="carousel slide" data-ride="carousel">

		<ol class="carousel-indicators">
			<li data-target="#aj1" data-slide-to="0" class="active indi1"></li>
			<li data-target="#aj1" data-slide-to="1" class="indi1"></li>
			<li data-target="#aj1" data-slide-to="2" class="indi1"></li>
        </ol>

		<div class="carousel-inner test">

			<div class="carousel-item active">
				<div class="container">
					   <div class="row">
						   <div class="col-12">
							     <img src="{{ asset('img/profile_3.png') }}" class="mb-5" width="100" height="100"/>
							     <h6 class="mb-3">Shane Booth | (20-Aug-2015)</h6>
							     <p> One of the difficult thing about iphone app development is finding someone reliable and who are highly-skilled,trusted,
organized, dependable and fast.I know that I made the right choice in hiring them to develop our business application.</p>
						   </div>
					   </div>
				</div>
			</div>

			<div class="carousel-item">
				<div class="container">
					  <div class="row">
						  <div class="col-12">
							    <img src="{{ asset('img/profile_3.png') }}" class="mb-5" width="100" height="100"/>
							    <h6 class="mb-3">Shane Booth | (20-Aug-2015)</h6>
							    <p> One of the difficult thing about iphone app development is finding someone reliable and who are highly-skilled,trusted,
organized, dependable and fast.I know that I made the right choice in hiring them to develop our business application.</p>
						  </div>
					  </div>
				</div>
			</div>

			<div class="carousel-item">
				<div class="container">
					 <div class="row">
						 <div class="col-12">
							  <img src="{{ asset('img/profile_3.png') }}" class="mb-5" width="100" height="100"/>
							  <h6 class="mb-3">Shane Booth | (20-Aug-2015)</h6>
							  <p> One of the difficult thing about iphone app development is finding someone reliable and who are highly-skilled,trusted,
organized, dependable and fast.I know that I made the right choice in hiring them to develop our business application.</p>
						 </div>
					 </div>
				</div>
			</div>

		</div>

	</div>
</div>

@include('footer.footer')

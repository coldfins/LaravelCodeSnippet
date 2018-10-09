@include('header.header')
<link href="{{ asset('css/kids_cancer.css') }}" rel="stylesheet" type="text/css">
<!--SLIDER BG-->

<div class="container-fluid kids-bg">
    <div class="container text-center">
	    <img src="{{ asset('img/Kids Cancer_appIcon(1).png') }}" />
		<h2>Kids Cancer</h2>
		<p>Basically this app is used for keeping the track of medicine, dosage in timely manner. </p>
	</div>
</div>

<!--PROJECT OVERVIEW-->

<div class="container-fluid system-bg py-5">
    <div class="container py-md-3">
	    <h2 class="mb-4">Project Overview</h2>
		<p>The drawback of using it is that it can be only used if it is advised by the medical team for the treatment of the cancer patients.
Basically this app is used for keeping the track of medicine, dosage in timely manner. It can be helpful to keep the record of the medicine that is available to you easily.
</p>

	</div>
</div>

<!--SERVICES-->

<div class="container-fluid services-bg py-5">
    <div class="container">
	    <h4 class="my-4 my-md-5">
- Basically this app is used for keeping the track of medicine, dosage in timely manner. It can be helpful to keep the record of the medicine that is available to you easily.
</h4>
		<h4 class="my-4 my-md-5">- Kids’ cancer app is composed of various features such as login, list of dosses, taking medicine etc. It can be useful for treatment of kids’ cancer.</h4>
		<h4 class="my-4 my-md-5">- The drawback of using it is that it can be only used if it is advised by the medical team for the treatment of the cancer patients.
</h4>
	</div>
</div>

<!--WIRE FRAME-->

<div class="container-fluid system-bg px-0">
    <div class="container text-center">
	    <h2 class="mb-5 mt-5">Wireframe</h2>
	</div>
	<img src="{{ asset('img/Kids Cancer wireframe.png') }}" class="img-fluid" />
</div>

<!--COLOR STYSTEM-->

<div class="container-fluid system-bg">
    <div class="container py-5">
	    <h2 class="mb-5">COLOR SYSTEM</h2>
		<div class="row">
			<div class="col-12 text-center">
				<img src="{{ asset('img/Kids Cancer color.png') }}" class="img-fluid" />
			</div>
        </div>
	</div>
</div>

<!--ICON DESIGN-->

<div class="container-fluid icon-bg py-5">
    <div class="container">
	    <h2>ICON DESIGN</h2>
		<hr class="hr2 mb-5 mb-lg-0">

		<div class="row justify-content-center">
		    <div class="col-5 col-md-3 col-lg-2 my-3 my-lg-5">
			    <img src="{{ asset('img/Kids Cancer icon 1.png') }}" class="img-fluid" />
			</div>

			<div class="col-5 col-md-3 col-lg-2 my-3 my-lg-5">
			    <img src="{{ asset('img/Kids Cancer icon 2.png') }}" class="img-fluid" />
			</div>

			<div class="col-5 col-md-3 col-lg-2 my-3 my-lg-5">
			    <img src="{{ asset('img/Kids Cancer icon 3.png') }}" class="img-fluid" />
			</div>

			<div class="col-5 col-md-3 col-lg-2 my-3 my-lg-5">
			    <img src="{{ asset('img/Kids Cancer icon 4.png') }}" class="img-fluid" />
			</div>

			<div class="col-5 col-md-3 col-lg-2 my-3 my-lg-5">
			    <img src="{{ asset('img/Kids Cancer icon 5.png') }}" class="img-fluid" />
			</div>

			<div class="col-5 col-md-3 col-lg-2 my-3 my-lg-5">
			    <img src="{{ asset('img/Kids Cancer icon 6.png') }}" class="img-fluid" />
			</div>
		</div>
	</div>

</div>

<!--FINAL DESIGN-->

<div class="container-fluid system-bg py-5 px-0">
    <div class="container py-md-5">
	    <h2 class="mb-5">FINAL INTERFACE</h2>
	</div>
	    <img src="{{ asset('img/Kids Cancer final design.png') }}" class="img-fluid" />

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

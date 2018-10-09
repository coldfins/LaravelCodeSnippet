@include('header.header')
<link href="{{ asset('css/memosnag.css') }}" rel="stylesheet" type="text/css">
<!--SLIDER BG-->

<div class="container-fluid memosnag-bg">
    <div class="container text-center">
	    <img src="{{ asset('img/memosnag_appIcon.png')}}" />
		<h2>Memosnag</h2>
		<p>Memosnag help you in the organizing of the everything as possible. Such app is really helpful for saving the data.</p>
	</div>
</div>

<!--PROJECT OVERVIEW-->

<div class="container-fluid story-bg py-5">

		<div class="row justify-content-center">

		<div class="col-md-12 col-lg-6 col-xl-8 my-auto order-2 order-lg-1 pl-md-5 pl-3">
			<h2 class="mb-4">Memosnag Story</h2>
			<p>Memosnag is the one of the outstanding android app. It help you to save and do the organization of the things online. It would be a doing shopping or finding other things that you want or need to save in mobile. </p>
			<p>By using this app you can save anything in your memosnag gallery it would be the pictures or videos etc.</p>
			<p>Memosnag help you in the organizing of the everything as possible. Such app is really helpful for saving the data.
</p>
			<p>
Memosnag comes with the various features and functionalities that you are willing to add or save for your iOS devices. This app is really helpful for you to save and organize things very quickly as well.
</p>
		</div>

		<div class="col-md-6 col-lg-6 col-xl-4 px-0 order-1 order-lg-2 py-5 py-lg-0 my-lg-auto">
		    <img src="{{ asset('img/memosnag mobile.png')}}" class="img-fluid" />
		</div>

		</div>

</div>

<!--WIRE FRAME-->

<div class="container-fluid story-bg px-0">
    <div class="container">
	    <h2 class="mb-3">Wireframe</h2>
	</div>
	<img src="{{ asset('img/memosnag wireframe.png')}}" class="img-fluid" />
</div>

<!--BRAND COLOR-->

<div class="container-fluid story-bg py-5">
    <div class="container py-lg-4">
	    <h2>BRAND COLOR</h2>

		<div class="row">
		    <div class="col-6 col-md-3 my-3 my-md-5">
			    <img src="{{ asset('img/memosnag color1.png')}}" class="img-fluid" />
			</div>

			<div class="col-6 col-md-3 my-3 my-md-5">
			   <img src="{{ asset('img/memosnag color2.png')}}" class="img-fluid" />
			</div>

			<div class="col-6 col-md-3 my-3 my-md-5">
			    <img src="{{ asset('img/memosnag color3.png')}}" class="img-fluid" />
			</div>

			<div class="col-6 col-md-3 my-3 my-md-5">
			    <img src="{{ asset('img/memosnag color4.png')}}" class="img-fluid" />
			</div>
		</div>
	</div>
</div>


<!--ICON DESIGN-->

<div class="container-fluid icon-bg story-bg py-5">
    <div class="container py-lg-4">
	    <h2>ICON DESIGN</h2>
        <img src="{{ asset('img/memosnag icon.png')}}" class="img-fluid my-3 my-md-5" />
	</div>

</div>

<!--FINAL DESIGN-->

<div class="container-fluid story-bg py-5 px-0">
    <div class="container py-md-5">
	    <h2 class="mb-5">FINAL INTERFACE</h2>
	</div>
	    <img src="{{ asset('img/memosnag final design.png')}}" class="img-fluid" />

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
							     <img src="{{ asset('img/profile_3.png')}}" class="mb-5" width="100" height="100"/>
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
							    <img src="{{ asset('img/profile_3.png')}}" class="mb-5" width="100" height="100"/>
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
							  <img src="{{ asset('img/profile_3.png')}}" class="mb-5" width="100" height="100"/>
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

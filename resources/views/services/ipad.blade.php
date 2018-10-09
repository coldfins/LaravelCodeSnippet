@include('header.header')
<link href="{{ asset('css/ipad_app_development.css ') }}" rel="stylesheet" type="text/css">
<!--i Pad  Section-->

<div class="container-fluid ipad-bg">
	<div class="container text-center">
	     <h2>i Pad<br>
             App Development Company</h2>
	</div>
</div>

<!--SOLUTION-->

<div class="container-fluid app-bg">
    <div class="container">
	    <h2>iPad App Solutions</h2>
		<hr style="width: 45%; height: 3px; background-color: #fff; display: inline-block;">
		<p class="my-4">-  Native iPad app development</p>
		<p class="my-4">-  Enterprise iPad application</p>
		<p class="my-4">-  iPad social media application</p>
		<p class="my-4">-  iPad app port & testing</p>
		<p class="my-4">-  iPad app upgrade</p>
		<p class="my-4">-  iPad mini solution</p>
		<p class="my-4">-  iPad support and maintenance</p>
	</div>
</div>

<!--ABOUT-->

<div class="container-fluid about-bg py-5">
    <div class="container">
	    <h2 class="mb-4">iPad App Development Company</h2>
		<p>As we found there is tremendous increase in the use of iPad by the company and entrepreneurs day by day. We create user friendly iPad applications.
</p>
		<p>We have created high class and impressive application which is easy and efficient to use.
</p>
		<p>We have built some top ranking ipad apps at iTunes Appstore in various categories such as business, health and fitness. We built customized robust apps to fill the ipad and ipad mini screens.
</p>
		<p>We have ceritified app developers, excellent design services, award winning mobile app development company, cost effective solution, 100 percent transparency with clients.
</p>
	</div>
</div>

<!--WHY CHOOSE-->

<div class="container-fluid why-bg py-4">
    <div class="container text-center">
	   <h2 class="mb-0">Why Choose</h2>
	</div>
</div>

<div class="container-fluid why py-5">
    <div class="container">
	   <div class="row">
		   <div class="col-md-6 text-center my-4">
		       <img src=" {{ asset('img/I pad Development icon.png') }}" />
			   <h2 class="mt-4">Experienced iPad app developers</h2>
		   </div>

		   <div class="col-md-6 text-center my-4">
		       <img src="{{ asset('img/I pad Development icon2.png') }}" />
			   <h2 class="mt-4">World-class user interface designers</h2>
		   </div>

		   <div class="col-md-6 text-center my-4">
		       <img src="{{ asset('img/I pad Development icon3.png') }}" />
			   <h2 class="mt-4">Guaranteed approval on appstore</h2>
		   </div>

		   <div class="col-md-6 text-center my-4">
		       <img src="{{ asset('img/I pad Development icon4.png') }}" />
			   <h2 class="mt-4">On time deployment of app</h2>
		   </div>

		   <div class="col-md-6 text-center my-4">
		       <img src="{{ asset('img/I pad Development icon5.png') }}" />
			   <h2 class="mt-4">Cross device functionality across Apple devices</h2>
		   </div>

		   <div class="col-md-6 text-center my-4">
		       <img src="{{ asset('img/I pad Development icon6.png') }}" />
			   <h2 class="mt-4">Source code security with non-disclosure agreement</h2>
		   </div>
	   </div>
	</div>
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
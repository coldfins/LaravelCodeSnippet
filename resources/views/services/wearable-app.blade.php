@include('header.header')
<link href="{{ asset('css/wearable_app_development.css') }}" rel="stylesheet" type="text/css">
<div class="container-fluid wear-bg">
    <div class="container text-center">
	    <h2>Wearable<br>
		    App Development</h2>
	</div>
</div>

<!--ABOUT-->

<div class="container-fluid about-bg py-5">
    <div class="container">
		<h2 class="mb-2 mb-md-4">Why choose wearable app development?</h2>
	    <p>We are trusted partner in wearable app development weather you are looking for smart watch app development such as apple watch or fitness tacker we can take your ideas to the next level.</p>
		<p class="mb-0">Wearable app development helps you to say ahead and first moreover advantage weather it is business, fitness, lifestyle, gaming or utilities. </p>
	</div>
</div>

<!--APP DEVELOPMENT-->

<div class="container-fluid py-5 wearable-app-bg">
	<div class="container text-center py-lg-5">
		<h2>Build app for the best wearable devices</h2>
		<hr class="app-hr">
		<p>Be it smart watches, or the glasses, our team takes all necessary boulevards to create and design an application that takes user experiance to entirerly new standards. We have unmatched experience of working on various niches, which is followed by a big list of satisfied clients.</p>
		<div class="row">
			<div class="col-md-4 mt-5">
			   <img src="{{ asset('img/Wearable App Development icon1.png') }}" class="img-fluid" />
			</div>
			<div class="col-md-4 mt-5">
			   <img src="{{ asset('img/Wearable App Development icon2.png') }}" class="img-fluid" />
			</div>
			<div class="col-md-4 mt-5">
			   <img src="{{ asset('img/Wearable App Development icon3.png') }}" class="img-fluid" />
			</div>
		</div>
	</div>
</div>

<!--DEVICES-->

<div class="container-fluid devices-bg pb-5">
    <div class="row justify-content-center">
	   <div class="col-11 col-lg-10">
		   <h2 class="mb-2 mb-md-5">innovative, interactive - Connected Wearable AppsBuild app for the best wearable devices</h2>
		   <p>need to cope up with the advancing market and changing consumer demands? We're here to enhance your services with a completely new customer-engagment story that will be realished bt generations to come. We offer ground-breaking wearable development services to fulfill various business, customer and enterprise purposes.</p>
		   <p>Appinventive offers cutting-edge wearable devices application development services to help you stay ahead and gain first-mover advantages. Whether it is fitness, medical, lifestyle, gaming or utilities, our team of developers will bring your vision to life and create wearable app development experiences that exceed all expectations.</p>
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
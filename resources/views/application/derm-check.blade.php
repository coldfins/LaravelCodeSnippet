@include('header.header')
<link href="{{ asset('css/derm_check.css') }}" rel="stylesheet" type="text/css">
<!--SLIDER BG-->

<div class="container-fluid derm-bg">
    <div class="container text-center">
	    <img src="{{ asset('img/DermCheck_appIcon.png') }}" />
		<h2>DermCheck</h2>
		<p>This treatment can help you in the diagnosing of the skin diseases and treating them as well for the various skin issues.</p>
	</div>
</div>

<!--APP STORY-->

<div class="container-fluid story-bg">
    <div class="container text-center py-5">
	    <h2 class="mb-3 mb-md-4">Story</h2>
		<p>Dermcheck is the dermatology service provider app that is used for the diagnosis of the treatment plan, if patient suffer from some skin diseases or else he can directly contact to the dermatologist and solve that issues using this app.</p>
		<p>Also, you can take the photos of skin, answer the medical question, dermatologist will create a detailed plan and prescription will sent to him. This is one of the most easy and efficient technique that can be helpful for the dermatological treatment.</p>
		<p>This treatment can help you in the diagnosing of the skin diseases and treating them as well for the various skin issues.</p>
	</div>
</div>

<!--STRATEGY-->

<div class="container-fluid strat-bg">
    <div class="container py-5">
	    <h2>Strategy</h2>
		<div class="row justify-content-center">
		    <div class="col-8 col-md-3 my-3 my-md-5">
			    <img src="{{ asset('img/DermCheck wireframe1.png') }}" class="img-fluid" />
			</div>

			<div class="col-8 col-md-3 my-3 my-md-5">
			    <img src="{{ asset('img/DermCheck wireframe2.png') }}" class="img-fluid" />
			</div>

			<div class="col-8 col-md-3 my-3 my-md-5">
			   <img src="{{ asset('img/DermCheck wireframe3.png') }}" class="img-fluid" />
			</div>

			<div class="col-8 col-md-3 my-3 my-md-5">
			   <img src="{{ asset('img/DermCheck wireframe4.png') }}" class="img-fluid" />
			</div>
		</div>
	</div>
</div>

<!--WORK-->

<div class="container-fluid work-bg py-5">
    <div class="container py-md-5">
	    <h2 class="mb-5">How does it works?</h2>
		<h4 class="my-3">- You take photos of your skin condition.</h4>
		<h4 class="my-3">- Answer a few medical question & submit.</h4>
		<h4 class="my-3">- Dermatologists will create a customised, detailed, treatment plant.</h4>
		<h4 class="my-3">- Prescriptions are electronically sent to your pharmacy.</h4>
	</div>
</div>

<!--BRAND COLOR -->

<div class="container-fluid strat-bg py-5">
     <div class="container">
	     <h2>BRAND COLOR</h2>
	     <div class="row justify-content-center">

			 <div class="col-8 col-md-4 col-lg-3 my-3 my-md-5">
			     <img src="{{ asset('img/DermCheck color1.png') }}" class="img-fluid" />
			 </div>

			 <div class="col-8 col-md-4 col-lg-3 my-3 my-md-5">
			     <img src="{{ asset('img/DermCheck color2.png') }}" class="img-fluid" />
			 </div>

			 <div class="col-8 col-md-4 col-lg-3 my-3 my-md-5">
			    <img src="{{ asset('img/DermCheck color3.png') }}" class="img-fluid" />
			 </div>

		 </div>
	 </div>
</div>

<!--ICON DESIGN-->

<div class="container-fluid strat-bg">
    <div class="container">
	    <h2>ICON DESIGN</h2>
        <img src="{{ asset('img/DermCheck icon.png') }}" class="img-fluid" />
	</div>

</div>

<!--FINAL DESIGN-->

<div class="container-fluid strat-bg pb-5">
    <div class="container pb-md-5">
	    <h2 class="mb-5">FINAL DESIGN</h2>
		<img src="{{ asset('img/DermCheck final design.png') }}" class="img-fluid" />
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

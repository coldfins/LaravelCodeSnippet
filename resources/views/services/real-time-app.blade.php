@include('header.header')
<link href="{{ asset('css/real_time_app_development.css') }}" rel="stylesheet" type="text/css">
<div class="container-fluid real-bg">
	<div class="container text-center">
	     <h2 class="mb-3">Realtime<br>
                          App Development Company</h2>
	</div>
</div>

<!--about-->

<div class="container-fluid py-5 re-about-bg">
    <div class="container">
	   <h2>What type of apps use</h2>
	   <h4 class="mb-3">Real Time features?</h4>
	   <p class="my-4">The demand for real time application is increased tremendously from past few years. Due to increase in internet mobile traffic providing real time information.
</p>

	</div>
</div>

<!--REAL TIME-->

<div class="container-fluid realtime-bg py-5">
    <div class="container py-md-3">
	    <h2 class="mb-4">Some of the major type of Real time applications are</h2>
		<ul>
		   <li>Real time multi player game</li>
		   <li>Instant/messaging chat apps</li>
		   <li>Collaboration apps</li>
		   <li>Location tracking apps</li>
		   <li>Real time dashboard</li>
		</ul>
	</div>
</div>

<div class="container-fluid build-bg py-3 py-md-5">
    <div class="container">
	    <h2 class="mb-4">Real time application are applicable over many areas such as mobile application, web application, games, VoIP etc.
</h2>
		<p class="mb-0">Real time application help you in exchange of data and information that will get you high returns for your investments.
</p>

		<!--<div class="row mt-3 mt-md-5">
		    <div class="col-12 text-center">
			    <h3>“REAL-TIME APPS ARE INFINITELY MORE ENGAGING.”</h3>
			</div>
		</div>
-->	</div>
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
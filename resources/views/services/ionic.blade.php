@include('header.header')
<link href="{{ asset('css/ionic_app_development.css') }}" rel="stylesheet" type="text/css">
<!--IONIC SLIDER-->

<div class="container-fluid ionic-bg">
	<div class="container text-center">
	     <h2 class="mb-0">Ionic<br>
                          App Development Company</h2>
	</div>
</div>

<!--about-->

<div class="container-fluid py-5 ionic-about-bg">
    <div class="container">
	    <h2 class="mb-2 mb-md-4">Rich and Elegant Ionic Mobile App Development</h2>
		<p>Ionic development deals with the creation of front end user UI that can manage the look and feel similar to the other UI interaction to ensure app need to compel users’ application.
</p>
		<p>Ionic app development services include up to date data integration, ionic app support and maintenance, ionic App UI/UX design.
 </p>
		<p>Ionic framework is open source and it’s a cost effective, it can support multiple platforms such Android, iOS, windows etc.
</p>
		<p>There are set of user interface offered by ionic framework. Also, there in no need to do additional investment in business when you use ionic app.
</p>
		<p>Clients get the application that are high quality and highly functional, it can be deployed everywhere once it is created.
</p>
		<p>The use of Angular js is embedded in ionic by default to build robust and secure applications.
</p>
	</div>
</div>

<div class="container-fluid px-0">
    <img src="{{ asset('img/ionic app development img.png') }}" class="img-fluid" />
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
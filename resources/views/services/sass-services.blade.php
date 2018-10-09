@include('header.header')
<link href="{{ asset('css/sass_services.css') }}" rel="stylesheet" type="text/css">
<div class="container-fluid sass-bg">
	<div class="container text-center">
	     <h2 class="mb-3">Sass Service<br>
                          Development Company</h2>
	</div>
</div>

	<!--
SERVICES-->

<div class="container-fluid services-bg py-5">
    <div class="container text-center">
        <h2 class="mb-3 mb-md-5">Saas Services We Cater</h2>

		<div class="row">
		    <div class="col-md-5 my-2 my-md-4 px-0">
				<img src="{{ asset('img/Saas icon1.png') }}" />
			    <h4 class="mt-4">Developing Platform Strategy </h4>
				<p>SaaS is the software distribution model in which the third party host provider host application and provide them available to customer over the internet.
</p>
			</div>

			<div class="col-md-2 my-auto px-0"><div class="line"></div></div>

			<div class="col-md-5 my-2 my-md-4 px-0">
				<img src="{{ asset('img/Saas icon2.png') }}" />
			    <h4 class="mt-4">Architecture & Design </h4>
				<p>SaaS provide their organization to run application on their own computer and their own data centers. SaaS is similar to Asp(application service provider).
</p>
			</div>

			<div class="col-md-5 my-2 my-md-4 px-0">
				<img src="{{ asset('img/Saas icon3.png') }}" />
			    <h4 class="mt-4">Development & Testing </h4>
				<p>SaaS allows you to connect the and use the cloud based app over the internet. Common examples are emailing, calendaring, office tools etc.
</p>
			</div>

			<div class="col-md-2 my-auto px-0"><div class="line"></div></div>

			<div class="col-md-5 my-2 my-md-4 px-0">
				<img src="{{ asset('img/Saas icon4.png') }}" />
			    <h4 class="mt-4">Deployment </h4>
				<p>Advantages of using SaaS application are pay only what you use, use free client software, mobilise your workforce easily, access app data from anywhere.
</p>
			</div>

		</div>
	</div>
</div>

<!--CATER-->

<div class="container-fluid cater-bg py-5 text-white">
    <div class="container">
	    <h2 class="mb-4">Saas Services We Cater</h2>

		<div class="row">
		    <div class="col-md-6">
			    <p>- Superior Community Support</p>
				<p>- Rapid & Continuous Upgrades</p>
				<p>- Easy Accessibility</p>
				<p>- Web Services based Integration</p>
				<p>- Superior Services using SLAs</p>
				<p>- Multi-tenant Architecture</p>
			</div>

			<div class="col-md-6">
			    <p>- Highly Secure</p>
				<p>- Enriched User Experience</p>
				<p>- Pay for What you Use</p>
				<p>- Standardized Application Development</p>
				<p>- Smooth Integration</p>
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
@include('footer.footer')') }}
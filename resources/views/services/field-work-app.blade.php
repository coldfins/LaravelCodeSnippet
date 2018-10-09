@include('header.header')
<link href="{{ asset('css/field_work_app_development.css') }}" rel="stylesheet" type="text/css">
<div class="container-fluid field-bg">
	<div class="container text-center">
	     <h2 class="mb-3">Field Work<br>
                          App Development</h2>
	</div>
</div>

<!--SERVICES-->

<div class="container-fluid services py-5">
	<div class="row justify-content-center">
        <div class="col-md-10">
	    <h2 class="mb-4">Field Service Apps Are The<br>
            Evolving Workforce…</h2>
		<h4 class="mb-4">The IoT</h4>
		<p>Iot helps you to connect and exchange the data from anywhere with the help of network of physical devices. Object have been assigned an IP address due to which you can exchange or transfer the data over network.
</p>
			<p>By using IOT you can enable the field workers to share their location. Also, you can allow the geographic awareness and communication using the IOT.
</p>
			<p>If there is any last minute changes in schedule the user can juggle his schedule and inform the others team mates.
</p>
			<p>Using this app the pictures will be captured and take esignatures data entered will be accessed offline.
</p>
			<p>Meanwhile, by using the app you can create inventory of information.
</p>
		</div>
	</div>
</div>

<div class="container-fluid icon-bg py-5">
    <div class="container text-center">
	    <div class="row">

			<div class="col-md-6 my-3 my-md-4 px-md-5">
			   <img src="{{ asset('img/Field Work icon 1.png') }}" />
			   <h4>Geographic Awareness<br> and Communication</h4>
			   <hr class="icon-hr">
			   <p >Enables field workers to share their
					location and availability of time for the
					next service. Sort your work based
					on priority and location.</p>
			</div>

			<div class="col-md-6 my-3 my-md-4 px-md-5">
			   <img src="{{ asset('img/Field Work icon 2.png') }}" />
			   <h4 class="mb-5">Juggling Schedules</h4>
			   <hr class="icon-hr">
			   <p>With real time field service app, a worker
can juggle his schedule while informing his
team mates at the same time, if there
are any last minute changes in any schedule.</p>
			</div>

			<div class="col-md-6 my-3 my-md-4 px-md-5">
			   <img src="{{ asset('img/Field Work icon g3.png') }}" />
			   <h4>No Piles of Paperwork</h4>
			   <hr class="icon-hr">
			   <p>Every data entered will be cached to the
device, making it possible for the worker
to access the data offline. Using app
one can also capture pictures and take
eSignatures.</p>
			</div>

			<div class="col-md-6 my-3 my-md-4 px-md-5">
			   <img src="{{ asset('img/Field Work icon 4.png') }}" />
			   <h4>Embedded Big Data Analytic</h4>
			   <hr class="icon-hr">
			   <p>The organizations that allow field services,
generally have the opportunity to collect
and draw data by using IoT and the mobile app.
Using this data they can identify a way of
bringing out patterns and trends to predict
the future results and make preventive
changes with field services technology.</p>
			</div>

			<div class="col-md-6 my-3 my-md-4 px-md-5">
			   <img src="{{ asset('img/Field Work iocn 5.png') }}" />
			   <h4>No Piles of Paperwork</h4>
			   <hr class="icon-hr">
			   <p>Customer generally expect fast and efficient
services like the mobile apps give. Based on
that it is important that they get a mobile
application that helps them in knowing
everything they need to about the product
and repairing it if any minorflaw occurs.</p>
			</div>

			<div class="col-md-6 my-3 my-md-4 px-md-5">
			   <img src="{{ asset('img/Field Work icon 6.png') }}" />
			   <h4>Cost Saving</h4>
			   <hr class="icon-hr">
			   <p>By using the power of the mobile app, one
can create an inventory of information, from
information like the skillset of the personnel.
This way, the profitability of the company
can be increased by making sure everything
is planned and that there is no overtime done.</p>
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
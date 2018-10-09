@include('header.header')
<link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
<!--SLIDER-->

<div class="container-fluid px-0">
	<div id="aj" class="carousel slide carousel-fade" data-ride="carousel">

		<div class="row carousel-indicators1 mx-0">

			<div class="col-2 active px-0" data-target="#aj" data-slide-to="0">
				<img src="img/dive thru button.png" class="img-fluid" />
			</div>

			<div class="col-2 px-0" data-target="#aj" data-slide-to="1">
				<img src="img/MykaliApp_button.png" class="img-fluid" />
	        </div>

			<div class="col-2 px-0" data-target="#aj" data-slide-to="2">
				<img src="img/DermCheck_buttton.png" class="img-fluid" />
	        </div>

			<div class="col-2 px-0" data-target="#aj" data-slide-to="3">
				<img src="img/PriviPoint_button.png" class="img-fluid" />
	        </div>

			<div class="col-2 px-0" data-target="#aj" data-slide-to="4">
				<img src="img/memosnag_button.png" class="img-fluid" />
	        </div>

			<div class="col-2 px-0" data-target="#aj" data-slide-to="5">
				 <img src="img/Kids_button.png" class="img-fluid" />
	        </div>

		</div>

		<div class="carousel-inner">

			<div class="carousel-item active">
			  <img class="d-block w-100" src="img/divethru banner.png">
				 <div class="carousel-caption  content text-left">
					 <div class="row">
						 <div class="col-8 col-md-10 col-lg-8 col-xl-7">
							<img src="img/divethru banner logo.png" />
							<h2><a href="{{ url('/slider/divethru') }}">Dive Thru</a></h2>
							<p>Brilliant things happen in calm minds</p>
						</div>
					 </div>
                 </div>
			</div>

			<div class="carousel-item">
			  <img class="d-block w-100" src="img/MykaliApp banner.png">
				<div class="carousel-caption text-center content1">
					<div class="row">
						<div class="col-xl-10">
							<img src="img/mykali banner logo.png" />
							<h2><a href="{{ url('/slider/mykali') }}">MyKali</a></h2>
							<p>Could be the solution for you.</p>
						</div>
					</div>
                 </div>
			</div>

			<div class="carousel-item">
			  <img class="d-block w-100" src="img/DermCheck banner.png">
				<div class="carousel-caption content2">
					<div class="row">
						<div class="col-8 col-md-8 col-lg-8 col-xl-6 text-center">
							<img src="img/DermCheck banner logo.png" />
							<h2><a href="{{ url('/slider/derm-check') }}">DermCheck</a></h2>
							<p>This treatment can help you in the diagnosing of the skin diseases.</p>
						</div>
					</div>
                </div>
			</div>

			<div class="carousel-item">
			  <img class="d-block w-100" src="img/PriviPoint banner.png">
				<div class="carousel-caption content3 text-center">
					<div class="row">
						<div class="col-8 col-md-8 col-lg-8 col-xl-6">
							<img src="img/privipoint banner logo.png" />
							<h2><a href="{{ url('/slider/privi-point') }}">PriviPoint</a></h2>
							<p>Smart combination of social network and service based application.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-item">
			  <img class="d-block w-100" src="img/memosnag banner.png">
				<div class="carousel-caption content4 text-center">
					<div class="row">
						<div class="col-8 col-md-8 col-lg-8 col-xl-6">
				            <img src="img/memosnag banner logo.png">
							<h2><a href="{{ url('/slider/memosnag') }}">Memosnag</a></h2>
							<p>Memosnag let's you quickly save and organize things you like online.</p>
						</div>
					</div>
                </div>
			</div>

			<div class="carousel-item">
			  <img class="d-block w-100" src="img/Kids Cancer banner.png">
				<div class="carousel-caption content5 text-left">
					<div class="row">
						<div class="col-8 col-md-8 col-lg-6 col-xl-7">
				            <h2><a href="{{ url('/slider/kids-cancer') }}">Kids Cancer</a></h2>
							<p>This app is to be used in conjuction with your child's oncology team to keep track of medication dosages and timing during treatment
							   for childhood cancer. it should only be used if advised by the treating medical team.</p>
						</div>
					</div>
                </div>
			</div>

		</div>

	</div>
</div>


<!--WHY COLDFIN LAB-->

<div class="container-fluid why-bg py-3 py-md-5 main-bg">
   <div class="row">
			<div class="col-12 px-lg-5">
				<a href="#" style="text-decoration: underline;">WHY COLDFIN LAB</a>
				<h3 class="mb-4 mt-4">Client satisfaction is our key goal.</h3>
				<p>We are software development company and complete IT solution provider that focuses on providing highly qualitative, timely delivered
				   and cost-effective client solutions. Our Key clients are loyal to us because we have volume up their business and has
				   also spread it to world globally.</p>
			</div>
	</div>
</div>

<div class="container-fluid team-bg main-bg">
	<div class="row justify-content-center">
		    <div class="col-6 col-md-4 col-lg-3 px-3 text-center py-5">
		        <img src="img/EXPERT TEAM.png" class="img-fluid" />
		    </div>
			<div class="col-12 col-md-8 col-lg-9 my-auto text-center text-md-left pb-4 pb-md-0">
			    <a href="expert_team.html">EXPERT TEAM</a>
				<p class="mb-0">Highly Experienced and creative team in combination of technologies makes our all delivery possible with best stability. Challenging attitude and great team work is our strength.</p>
			</div>
	</div>
</div>

<div class="container-fluid support-bg main-bg">
	<div class="row justify-content-center">
		    <div class="col-6 col-md-4 col-lg-3 text-center py-5">
		        <img src="img/FULL SUPPORT.png" class="img-fluid" />
		    </div>
			<div class="col-12 col-md-8 col-lg-9 my-auto text-center text-md-left pb-4 pb-md-0">
			    <a href="full_support.html">FULL SUPPORT</a>
				<p class="mb-0">Within or after the development and delivery, Complete support is our guarantee. All clients are given equal importance and full follow up.</p>
			</div>
    </div>
</div>

<div class="container-fluid security-bg main-bg">
		<div class="row justify-content-center">
		    <div class="col-6 col-md-4 col-lg-3 text-center py-5">
			    <img src="img/SECURITY.png" class="img-fluid" />
			</div>
			<div class="col-12 col-md-8 col-lg-9 my-auto text-center text-md-left pb-4 pb-md-0">
			    <a href="security.html">SECURITY</a>
				<p class="mb-0">We never compromise with security. We are taking care of all your important data with privacy.</p>
			</div>
		</div>
</div>

<div class="container-fluid technology-bg main-bg">
		<div class="row justify-content-center">
		    <div class="col-6 col-md-4 col-lg-3 text-center py-5">
			    <img src="img/LATEST TECHNOLOGY.png" class="img-fluid" />
			</div>
			<div class="col-12 col-md-8 col-lg-9 my-auto text-center text-md-left pb-4 pb-md-0">
			    <a href="latest_technology.html">LATEST TECHNOLOGY</a>
				<p class="mb-0">Keeping our selves and also our customer updated is our daily process. Working with All latest technologies and tools results in fast business growth.</p>
			</div>
		</div>
</div>

<!--COUNTER-->

<div class="container-fluid counter-bg px-0">

		<div class="row mx-0">
			<div class="col-md-6 col-lg-3 text-center py-2 py-md-4">
				 <img src="img/Happy Clients.png" class="img-fluid" />
				 <h2 class="mt-2 mt-md-4">4000</h2>
				 <h4>Happy Clients</h4>
			</div>

			<div class="col-md-6 col-lg-3 text-center py-2 py-md-4">
                <img src="img/Modern Application.png" class="img-fluid" />
				<h2 class="mt-2 mt-md-4">200</h2>
				<h4>Modern Application</h4>
			</div>

			<div class="col-md-6 col-lg-3 text-center py-2 py-md-4">
                <img src="img/Team.png" class="img-fluid" />
				<h2 class="mt-2 mt-md-4">100</h2>
				<h4>Team</h4>
			</div>

			<div class="col-md-6 col-lg-3 text-center py-2 py-md-4">
                <img src="img/Fast Support.png" class="img-fluid" />
				<h2 class="mt-2 mt-md-4">24/7</h2>
				<h4>Fast Support</h4>
			</div>
		</div>

</div>

<!--RECENT PROJECTS-->

<div class="container-fluid py-3 py-md-5 text-center recent-bg1">
           <h2 class="mb-3 mb-md-5">RECENT PROJECTS</h2>
	   <div class="row justify-content-center" style="background-color: #f3f3f3;">

		   <div class="col-11 col-md-6 col-lg-4 my-1 px-1 recent-bg">
			   <img src="img/001.png" class="img-fluid" />
			   <div class="recent-bga">
				   <div class="icon center">
			       <a href="#"><i class="fa fa-link"></i></a>
			       <a href="#"><i class="fa fa-android"></i></a>
			       <a href="#"><i class="fa fa-apple"></i></a>
				   </div>

			   </div>
		   </div>

		   <div class="col-11 col-md-6 col-lg-4 my-1 px-1 recent-bg">
		        <img src="img/02.png" class="img-fluid" />
			    <div class="recent-bga">
			       <div class="icon center">
			       <a href="#"><i class="fa fa-link"></i></a>
			       <a href="#"><i class="fa fa-android"></i></a>
			       <a href="#"><i class="fa fa-apple"></i></a>
				   </div>

			    </div>
		   </div>

		   <div class="col-11 col-md-6 col-lg-4 my-1 px-1 recent-bg">
		       <img src="img/03.png" class="img-fluid" />
			   <div class="recent-bga">
			      <div class="icon center">
			       <a href="#"><i class="fa fa-link"></i></a>
			       <a href="#"><i class="fa fa-android"></i></a>
			       <a href="#"><i class="fa fa-apple"></i></a>
				   </div>

			   </div>
		   </div>

		   <div class="col-11 col-md-6 col-lg-4 my-1 px-1 recent-bg">
		       <img src="img/eathub android.png" class="img-fluid" />
			   <div class="recent-bga">
			      <div class="icon center">
			       <a href="#"><i class="fa fa-link"></i></a>
			       <a href="#"><i class="fa fa-android"></i></a>
			       <a href="#"><i class="fa fa-apple"></i></a>
				   </div>

			   </div>
		   </div>

		   <div class="col-11 col-md-6 col-lg-4 my-1 px-1 recent-bg">
		        <img src="img/upslim android.png" class="img-fluid" />
			    <div class="recent-bga">
			       <div class="icon center">
			       <a href="#"><i class="fa fa-link"></i></a>
			       <a href="#"><i class="fa fa-android"></i></a>
			       <a href="#"><i class="fa fa-apple"></i></a>
				   </div>

			   </div>
		   </div>

		   <div class="col-11 col-md-6 col-lg-4 my-1 px-1 recent-bg">
		        <img src="img/toufame android.png" class="img-fluid" />
			    <div class="recent-bga">
			       <div class="icon center">
			       <a href="#"><i class="fa fa-link"></i></a>
			       <a href="#"><i class="fa fa-android"></i></a>
			       <a href="#"><i class="fa fa-apple"></i></a>
				   </div>

			    </div>
		   </div>

	   </div>

</div>

<!--DEVELOPMENT-->

<div class="cotainer-fluid">
    <div class="row mx-0 development">

		<div class="col-lg-6 ios-bg">
		    <div class="row py-4 my-auto mx-auto">
			    <div class="col-md-4 col-lg-3 col-xl-2 text-center my-auto"><img src="img/ios.png" class="img-fluid"/></div>
				<div class="col-md-8 col-lg-9 col-xl-10 my-4 my-md-auto text-md-left text-center">
				    <a href="iphone_app_development.html">IOS Development</a>
					<p class="mb-0">We are an iPhone App Development Company having converted more than 200 ideas into iPhone Apps.</p>
				</div>
			</div>
		</div>

		<div class="col-lg-6 android-bg">
		    <div class="row py-4 my-auto mx-auto">
			    <div class="col-md-4 col-lg-3 col-xl-2 text-center my-auto"><img src="img/android.png" class="img-fluid"/></div>
				<div class="col-md-8 col-lg-9 col-xl-10 my-4 my-md-auto text-md-left text-center">
				    <a href="android_app_development.html">Android Development</a>
					<p class="mb-0">We are an Android app development company capable of producing an app for you that stands out from all the rest.</p>
				</div>
			</div>
		</div>

		<div class="col-lg-6 mobile-bg">
		    <div class="row py-4 my-auto mx-auto">
			    <div class="col-md-4 col-lg-3 col-xl-2 text-center my-auto"><img src="img/mobile.png" class="img-fluid"/></div>
				<div class="col-md-8 col-lg-9 col-xl-10 my-4 my-md-auto text-md-left text-center">
				    <a href="mobile_app_development.html">Mobile App Development</a>
					<p class="mb-0">As an iPad app development company, Space-O tailors an app with a great panache.</p>
				</div>
			</div>
		</div>

		<div class="col-lg-6 web-bg">
		    <div class="row py-4 my-auto mx-auto">
			    <div class="col-md-4 col-lg-3 col-xl-2 text-center my-auto"><img src="img/web.png" class="img-fluid"/></div>
				<div class="col-md-8 col-lg-9 col-xl-10 my-4 my-md-auto text-md-left text-center">
				    <a href="web_development.html">Web Development</a>
					<p class="mb-0">We are a mobile-based company, yet are also experts in designing websites and apps that garner the response you are looking for.</p>
				</div>
			</div>
		</div>

	</div>
</div>

<!--COMPANY LOGO-->

<div class="container-fluid company">
    <div class="container text-center pt-5">
	    <h2 class="mb-0">TOP APP DEVELOPMENT COMPANY ACCRITED BY</h2>
		<hr class="company-hr">
		<div class="row justify-content-center">
		    <div class="col-7 col-md-4 col-lg my-3 my-md-5"><img src="img/logo1.png" class="img-fluid" /></div>
			<div class="col-7 col-md-4 col-lg my-3 my-md-5"><img src="img/logo2.png" class="img-fluid" /></div>
			<div class="col-7 col-md-4 col-lg my-3 my-md-5"><img src="img/logo3.png" class="img-fluid" /></div>
			<div class="col-7 col-md-4 col-lg my-3 my-md-5"><img src="img/logo4.png" class="img-fluid" /></div>
			<div class="col-7 col-md-4 col-lg my-3 my-md-5"><img src="img/logo5.png" class="img-fluid" /></div>
		</div>
	</div>
</div>

<!--START UP-->

<div class="container-fluid start-bg">
    <div class="container py-5 text-center">
		<h2>Mobile App Solutions</h2>
		<h4 class="mb-4">For <span>START UP</span></h4>
		<p>Kick-Starting your <b>Mobile App Development</b> is now very easy and economical with help of<br>
our app development solution for <b>Start-Ups</b></p>
		<div class="btn btn-outline-white py-2 px-4 mt-3" style="border-radius: 25px;">GET MORE DETAILS</div>
	</div>
</div>

<!--IMAGES-->

<div class="container-fluid images">
	<div class="container text-center">
		 <h2 class="mt-5 mb-0">WE FILLED COLORS IN THEIR BLACK AND WHITE APPS</h2>
		 <div class="row py-3 py-lg-5">

			 <div class="col-md-6 col-lg-3 my-3"><img src="img/1.png" class="img-fluid" /></div>

			 <div class="col-md-6 col-lg-3 my-3"><img src="img/2.png" class="img-fluid" /></div>

			 <div class="col-md-6 col-lg-3 my-3"><img src="img/3.png" class="img-fluid" /></div>

			 <div class="col-md-6 col-lg-3 my-3"><img src="img/4.png" class="img-fluid" /></div>

			 <div class="col-md-6 col-lg-3 my-3"><img src="img/5.png" class="img-fluid" /></div>

			 <div class="col-md-6 col-lg-3 my-3"><img src="img/6.png" class="img-fluid" /></div>

			 <div class="col-md-6 col-lg-3 my-3"><img src="img/7.png" class="img-fluid" /></div>

			 <div class="col-md-6 col-lg-3 my-3"><img src="img/8.png" class="img-fluid" /></div>
		 </div>
	</div>
</div>

<!--INSTALIFE-->

<div class="container-fluid insta-bg">
    <div class="container py-5 text-center">
		<h2>Yudiz<span> Instalife</span></h2>
		<h4 class="mb-4">Follow us and see what we’ve been up to!</h4>
		<p>Great colleagues, Amazing atmosphere, interesting projects,<br>
           Sports Events, Fun session</p>
		<div class="btn btn-outline-white py-2 px-4 mt-3" style="border-radius: 25px;">CHECK OUT OUR INSTAGRAM!</div>
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
							     <img src="img/profile_3.png" class="mb-5" width="100" height="100"/>
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
							    <img src="img/profile_3.png" class="mb-5" width="100" height="100"/>
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
							  <img src="img/profile_3.png" class="mb-5" width="100" height="100"/>
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

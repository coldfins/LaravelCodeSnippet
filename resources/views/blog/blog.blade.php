@include('header.header')
<link href="{{ asset('css/blog.css') }}" rel="stylesheet" type="text/css">
<!--ANDROID SLIDER-->

<div class="container-fluid blog-bg">
	<div class="container text-center">
	     <h2><b>Blog</b><br/>
		     Our latest and greatest blogs updates</h2>
	</div>
</div>


<!--IT NEWS-->

<div class="container-fluid news-bg py-5">
    <div class="container">
        <h2 class="mb-3">Top IT News</h2>
		<p class="mb-0">This collection of resources will be interesting for those who want to keep up with
           latest news in technology sphere. They cover everything starting from reviews on
           the newest gadgets to Virtual Reality issues.</p>
	</div>
</div>

<!--BLOG-->

<div class="container-fluid blog py-3 py-md-5">
    <div class="container py-4">
	    <div class="row">
		    <div class="col-12">
				<h2>Merged VR: Augmented Reality Cubed</h2>
			    <img src="img/blog_1.png" class="img-fluid py-3 py-md-5" />
				<p>There is considerable development activity at the high end of hardware and
                   content creation for virtual reality and augmented reality, as well as such AR
				   aliases as mixed reality, extended reality and others.</p>
                <p>Most industry investment is aimed at leading-edge gaming and industrial
                   application development. However, the low-end of the market is also worth
                   looking at, to see how people and institutions without big budgets --
                   consumers and education -- might adopt these technologies sooner, rather
                   than waiting years for all the advancements to trickle down to lower price
				   points.</p>
                <p>An example of AR done on a more human-friendly scale is Merge VR. Its
                    founders seem to have taken the hint from The Graduate ("One word: plastics"),
					added software and a bit of creativity, and then applied it to AR.</p>
                <p>First, Merge VR built a soft plastic headset (which they call "goggles") that
					fits any smartphone, even the largest. The optics worked well for me. The
					physical controls to adjust the optics are easy to use, the headset is
					comfortable to wear, the plastic is easy to clean, and it is inexpensive
					(US$60 retail in mid August 2017). Two indirect touch buttons provide
					limited in-app touch control while the smartphone is mounted in the headset.
					Cord management is easy -- both for keeping the smartphone powered and
					for plugging in headphones.</p>
                    <p>It comes in a variety of colors; I have seen at least 10 colors in Merge VR's
                       offices. The device looks friendly, not high-tech. What's more, the headset
                       has met the safety requirements of a broad swath of regulators for use by
                       kids as young as 10 years old.</p>
			</div>

			<div class="col-12 pt-3 pt-md-5">
				<h2>Watchos 2 Released : Delayed Apple Update Brings Real Apps, Communication Improvements</h2>
			    <img src="img/blog_2.png" class="img-fluid py-md-5 py-3" />
				<p>Apple has released WatchOS 2, addressing many of the criticisms that have
					been made of the wearable through a software update.</p>
                <p>Slightly delayed by a bug that was found in development, the update is now
                   being pushed out to Watch owners. It can be downloaded through the Watch
					app on the phone, which will then push it onto the wearable itself.</p>
                <p>WatchOS 2 can only be downloaded on phones that are running iOS 9. That
					new iPhone update came out last week.</p>
                <p>The update's headline feature brings native apps to the Watch, allowing them
                    to be run from the wrist rather than borrowing information from the phone.
                    That lets them run more quickly, as well as giving them access to the phone's
                    sensors and other hardware.</p>
			</div>
		</div>

	</div>
</div>
@include('footer.footer')

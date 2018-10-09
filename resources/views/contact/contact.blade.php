@include('header.header')
<link href="{{ asset('css/contact.css') }}" rel="stylesheet" type="text/css">
<!--SLIDER-->
<div class="container-fluid">
    <div class="container">
	   <div class="row justify-content-center mt-3">
		    <div class="col-md-8 col-lg-6">
				<div class="flash-message">
					@foreach (['danger', 'warning', 'success', 'info'] as $msg)
					@if(Session::has('alert-' . $msg))
					<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
					@endif
					@endforeach
				</div>
		    </div>
	   </div>
	</div>
</div>


<div class="container-fluid contact-bg">
	<div class="container text-center">
	    <h2>CONTACT US</h2>
		<hr style="background-color: #fff; height: 2px; width: 60%;">
		<p>GOT A QUESTION ? WE'LL GIVE STRAIGHT ANSWERS!</p>
        </p>
	    <hr style="background-color: #fff; height: 2px; width: 60%;">
	    <h4><a>+91-9081444123</a> / <a href="mailto:hr@coldfinlab.com">hr@coldfinlab.com</a></h4>
	</div>
</div>

<!--FORM-->

<div class="container-fluid form-bg">
    <div class="container">

		<div class="row form-bg1">
	        <div class="col-12 text-center">
		       <h2>We'd <i class="fa fa-heart-o" aria-hidden="true"></i> to help!</h2>
				<p>We like to create things fun, open-minded people. Feel free say hello!</p>
			</div>
		</div>

		<div class="row justify-content-center">
		    <div class="col-md-8 col-lg-6 my-4">
			    <form action="{{ url('/message') }}" id="contact_form" method="POST">
				@csrf
                    <div class="form-row">
					     <div class="form-group col-md-6">
						     <input type="text" class="form-control" id="name" name="name" placeholder="Name">
							 <p class="field_error"></p>
						 </div>

						<div class="form-group col-md-6">
						     <input type="email" class="form-control" id="email" name="email" placeholder="Email">
							 <p class="field_error"></p>
						 </div>
					</div>

					<div class="form-row">
					     <div class="form-group col-12">
						     <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number">
							 <p class="field_error"></p>
						</div>
					</div>

					 <div class="form-group">
                          <textarea class="form-control" rows="6" id="message" name="message"></textarea>
						  <p class="field_error"></p>
                     </div>

					 <div class="form-row justify-content-center">
					     <button type="submit" class="btn btn-primary2">SEND</button>
                     </div>
		        </form>

			</div>


		<div class="col-md-8 col-lg-6 text-bg my-4">
		    <h2>Coldfin Lab Private Limited</h2>
			<p class="py-3">Please submit your resume at <a href="mailto:hr@coldfinlab.com">hr@coldfinlab.com</a></p>
			<p>Address; 504-505, City Center, Nr. Param Doctor House,</p>
			<p>Laldarwaja, Station Road, Surat - 395006, Gujrat, INDIA.</p>
			<p>Phone: <a>+91 9081 444 123</a></p>
			<p>Email: <a href="mailto:hr@coldfinlab.com">hr@coldfinlab.com</a></p>
			<p>Website: <a href="https://coldfinlab.com">www.coldfinlab.com</a></p>

			<ul class="mt-3">
			<li><a href="#" class="envelope"><i class="fa fa-envelope"></i></a></li>
					<li class="ml-2"><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
					<li class="ml-2"><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
					<li class="ml-2"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
					<li class="ml-2"><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
				    <li class="ml-2"><a href="#" class="tumblr"><i class="fa fa-tumblr-square"></i></a></li>
		   </ul>
		</div>
		</div>
	</div>
</div>

<!--FOOTER2-->

<div class="container-fluid footer2-bg py-4">
    <div class="container">
	    <p class="mb-0">Copyright © {{ date('Y') }} by Coldfin Lab</p>
	</div>
</div>



<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/jquery.validate.js') }}"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->

<script type="text/javascript">
$(document).ready(function () {
	$('#contact_form').validate({
		// errorClass : "field_error",
			rules: {
				name: {
					required: true,
			},
			email: {
					required: true,
					email : true
			},
			phonenumber: {
					required: true,
					digits : true,
					minlength : 10
			},
			message : {
				required: true
			}


			},
			messages:{
				name: {
					required: "name is required*",
			},
			email: {
					required: "email is required*",
					email : "Please enter valid email"
			},
			phonenumber: {
					required: "phone number is required*",
					digits : "Please enter digits only",
					minlength : "your enter valid 10 digits phone number"
			},
			message :{
				required: "message is required*"
			}
			}
		});
});
</script>
<!-- <script>
  @if(Session::has('notification'))
//   alert("{{ Session::get('notification.alert-type') }}");
    var type = "{{ Session::get('notification.alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('notification.message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('notification.message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('notification.message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('notification.message') }}");
            break;
    }
  @endif
</script> -->
</body>
</html>



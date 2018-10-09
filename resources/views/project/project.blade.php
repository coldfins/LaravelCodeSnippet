@include('header.header')
<link href="{{ asset('css/start_a_project.css') }}" rel="stylesheet" type="text/css">

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

<div class="container-fluid start-bg">
	<div class="container text-center">
	    <h2>GET IN TOUCH</h2>
		<hr style="background-color: #fff; height: 2px; width: 60%;">
		<p>We provide you with the timely and delivery of projects that has everlasting impact. Share your business ideas with us Today!</p>
	    <hr style="background-color: #fff; height: 2px; width: 60%;">
	    <h4><a>+91-9712598349</a> <a href="mailto:coldfinlab@gmail.com">contact@yudiz.com</a></h4>
	</div>
</div>

<!--FORM-->

<div class="container-fluid form-bg">
    <div class="container">

		<form action="{{ url('/start-project') }}" method="post" id="start_project_form" enctype="multipart/form-data">
		@csrf

			<div class="form-row my-md-2">
			    <div class="form-group col-md-6 my-2">
                   <input type="text" class="form-control form-control1" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6 my-2">
                   <input type="email" class="form-control form-control1" id="email" name="email" placeholder="Email">
                </div>
            </div>

			<div class="form-row my-md-2">
			    <div class="form-group col-md-6 my-2">
                   <input type="text" class="form-control form-control1" id="skype" name="skype" placeholder="Skype ID">
                </div>
                <div class="form-group col-md-6 my-2">
                   <select class="form-control form-control1" id="budget" name="budget">
					   <option value="">select your budget</option>
					   <option value="1000">1000</option>
					   <option value="2000">2000</option>
					   <option value="3000">3000</option>
					   <option value="4000">4000</option>
					   <option value="5000">5000</option>
				   </select>
                </div>
            </div>

			<div class="form-row my-md-2">
			    <div class="form-group col-md-6 my-md-2">
                     <div class="form-row">
			             <div class="form-group col-md-6 my-2">
                             <select class="form-control form-control1" id="country" name="country">
								   <option value="">Select Country</option>
								   <option value="india">India</option>
								   <option value="australia">Australia</option>
								   <option value="england">England</option>
								   <option value="usa">USA</option>
								   <option value="canada">Canada</option>
                             </select>
                         </div>
                         <div class="form-group col-md-6 my-2">
                             <input type="text" class="form-control form-control2" id="phonenumber" name="phonenumber" placeholder="Phone Number">
                         </div>
                     </div>
                </div>

				<div class="form-group col-md-6 my-md-2">
                     <div class="form-row">
			              <div class="custom-file custom1">
							  <input type="file" class="custom-file-input" id="filename" name="filename" required>
							  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
							  <small id="emailHelp" class="form-text text-white" style="font-size: 14px;">Required Document: (pdf, doc, docx, txt, ppt, pptx)</small>
                          </div>
                     </div>
                </div>
            </div>

			<div class="form-group my-3 my-md-2">
                <textarea class="form-control form-control3" rows="6" id="message" name="message"></textarea>
            </div>

			<div class="form-row justify-content-center">
				<button type="submit" class="btn btn-primary2 mt-4">SEND</button>
			</div>

		</form>
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
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	$('#start_project_form').validate({
		// errorClass : "field_error",
			rules: {
				name: {
					required: true,
			},
			email: {
					required: true,
					email : true
			},
			skype :{
				required: true,
			},
			budget :{
				required:true,
			},
			country :{
				required: true,
			},
			phonenumber: {
					required: true,
					digits : true,
					minlength : 10
			},
			filename: {
					required: true,
					extension: "pdf|doc|docx|txt|ppt|pptx"
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
			skype: {
					required: "skype ID is required*",
			},
			phonenumber: {
					required: "phone number is required*",
					digits : "Please enter digits only",
					minlength : "your enter valid 10 digits phone number"
			},
			budget: {
					required: "Please select a <b>budget</b>."
			},
			country: {
					required: "country is required*"
			},
			filename : {
				required: "file is required*",
				extension: "please upload valid file"
			},
			message :{
				required: "message is required*"
			}
			}
		});
});
</script>
</body>
</html>



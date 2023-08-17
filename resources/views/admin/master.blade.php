<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

    {{-- bootstrap tagsinput --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap4-tagsinput@4.1.3/tagsinput.min.css">

    		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('admin/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->

     {{-- toastr info here --}}
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}">
	<!-- end: Favicon -->

{{--
stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}

</head>

<body>
		<!-- start: Header -->
@include('admin.header')
	<!-- start: Header -->



			<!-- start: Main Menu -->
	@include('admin.sidebar')
			<!-- end: Main Menu -->

@yield('content')

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">


			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>





	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

		</p>

	</footer>

	<!-- start: JavaScript-->

		<script src="{{asset('admin/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('admin/js/jquery-migrate-1.0.0.min.js')}}"></script>

		<script src="{{asset('admin/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

		<script src="{{asset('admin/js/jquery.ui.touch-punch.js')}}"></script>

		<script src="{{asset('admin/js/modernizr.js')}}"></script>

		<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

		<script src="{{asset('admin/js/jquery.cookie.js')}}"></script>

		<script src="{{asset('admin/js/fullcalendar.min.js')}}"></script>

		<script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>

		<script src="{{asset('admin/js/excanvas.js')}}"></script>
	<script src="{{asset('admin/js/jquery.flot.js')}}"></script>
	<script src="{{asset('admin/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('admin/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('admin/js/jquery.flot.resize.min.js')}}"></script>

		<script src="{{asset('admin/js/jquery.chosen.min.js')}}"></script>

		<script src="{{asset('admin/js/jquery.uniform.min.js')}}"></script>

		<script src="{{asset('admin/js/jquery.cleditor.min.js')}}"></script>

		<script src="{{asset('admin/js/jquery.noty.js')}}"></script>

		<script src="{{asset('admin/js/jquery.elfinder.min.js')}}"></script>

		<script src="{{asset('admin/js/jquery.raty.min.js')}}"></script>

		<script src="{{asset('admin/js/jquery.iphone.toggle.js')}}"></script>

		<script src="{{asset('admin/js/jquery.uploadify-3.1.min.js')}}"></script>

		<script src="{{asset('admin/js/jquery.gritter.min.js')}}"></script>

		<script src="{{asset('admin/js/jquery.imagesloaded.js')}}"></script>

		<script src="{{asset('admin/js/jquery.masonry.min.js')}}"></script>

		<script src="{{asset('admin/js/jquery.knob.modified.js')}}"></script>

		<script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>

		<script src="{{asset('admin/js/counter.js')}}"></script>

		<script src="{{asset('admin/js/retina.js')}}"></script>

		<script src="{{asset('admin/js/custom.js')}}"></script>
	<!-- end: JavaScript-->
{{-- @include('admin.js') --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap4-tagsinput@4.1.3/tagsinput.min.js"></script>




<script>
    @if (Session::has('message'))

toastr.options={
     'clossButton':true,
     'progressBar':true
}
toastr.success("{{ Session::get('message') }}"
// , 'Success! New Student added'
);

// toastr.warnig("{{ Session::get('message') }}"
// , 'Success! New Student added'
// );

       @endif
   </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>




             {{-- toastr info here --}}
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



	<!-- start: CSS -->
{{--
	<link href="{{asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet"> --}}
	{{-- <link id="base-style" href="{{asset('admin/css/style.css')}}" rel="stylesheet"> --}}
	{{-- <link id="base-style-responsive" href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet"> --}}

	<!-- end: CSS -->


    </head>
	<body>
		<!-- HEADER -->
	@include('frontend.header');
		<!-- /HEADER -->

		<!-- NAVIGATION -->
{{-- @include('frontend.navber') --}}
		<!-- /NAVIGATION -->


@yield('content')

		<!-- NEWSLETTER -->
	{{-- @include('frontend.newsletter') --}}
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
	@include('frontend.footer')
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



  <script>
    @if (Session::has('message'))

toastr.options={
     'clossButton':true,
     'progressBar':true,
     'backgroundColor:rek':true,

}
toastr.success("{{ Session::get('message') }}"
// , 'Success! New Student added'
);

// toastr.warnig("{{ Session::get('message') }}"
// , 'Success! New Student added'
// );

       @endif
   </script>


   {{-- <script>
    $(document).ready(function(){
        toastr.options= {
            "progressBar":true,
            "positionClass":"toast-top-right"
        }
    });
    window.addEventListener('success', event =>{

        toastr.success(event.detail.message);
    })
    window.addEventListener('warning', event =>{

        toastr.warning(event.detail.message);
    })
    window.addEventListener('error', event =>{

        toastr.error(event.detail.message);
    })

    </script>


@stack('scripts') --}}

	</body>
</html>

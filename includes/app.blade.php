<!DOCTYPE html>
<html lang="en">
<head>

	<title>{{env('APP_NAME')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fonts/icomoon')}}">
<!--===============================================================================================-->	

<!--===============================================================================================-->
	{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}

	{{-- <style>
		.ometlogo{
			background-image: url({{asset('assets-2/images/bg.jpg')}})
		}
	</style> --}}
<style>
	body{
	  padding-top: 0rem;
	}
</style>
<style>
	.marqueefy{
		background-color: #d81b53;
		border-radius: 10%;
		height: 5%;
		padding-top: -0.5%;

	}
	.hidden{
		visibility: hidden;
	}
</style>
{{-- Footer --}}
<style>
	/* img {
	  margin: 0 auto;
	  display: block;
	  margin-top: 20%;
	} */
	</style>
<style>
	.image-size{
		height: 250px;
		padding: 2px;
	}
</style>
<style>
	nav {
	   background-color: #333;
	   overflow: hidden;
	   justify-content: space-between;
   }

	   nav a {
	   float: left;
	   display: block;
	   color: white;
	   text-align: center;
	   padding: 8px 10px;
	   text-decoration: none;
   }

   /* nav a:hover {
	   background-color: #ddd;
	   color: black;
   } */

   nav .sign-in {
	   float: right;
   }
</style>
<style>
	header {
		display: flex;
		flex-wrap: wrap;
		align-items: center;
		padding: 20px;
		background-color: #340aec;
		color: #fff;
		font-size: 10px;
		margin-block-start: -0.7%;
		padding-top: -0.3%;
		padding-bottom: -0.3%;
		top: 250%;
			}

	.left-column {
		flex: 1;
	}

	.right-column {
		flex: 1;
		text-align: right;
	}

	h1 {
		margin: 0;
	}
	nav ul {
list-style: none;
margin: 0;
}

nav li {
display: inline-block;
margin-left: 10px;
padding-top: 5%;
margin-bottom: -0.1%;
}

nav a {
color: #fff;
text-decoration: none;
}
.size{
float: left;
margin-right: 20px;
padding-bottom: -0.5%;
height: 20%;
width: 10%;
} 
.words{
font-size: 150%;
font-family: sans-serif;
}
</style>
<style>
	* {box-sizing: border-box;}
	body {font-family: Verdana, sans-serif;}
	.mySlides {display: none;}
	img {vertical-align: middle;}
	
	/* Slideshow container */
	.slideshow-container {
	  max-width: 1500px;
	  /* max-height: 2000%; */
	  position: relative;
	  margin: auto;
	}
	
	/* Caption text */
	/* .text {
	  color: #800ddf;
	  font-size: 15px;
	  padding: 8px 12px;
	  position: absolute;
	  bottom: 8px;
	  width: 100%;
	  text-align: center;
	} */
	
	/* Number text (1/3 etc) */
	/* .numbertext {
	  color: #f2f2f2;
	  font-size: 12px;
	  padding: 8px 12px;
	  position: absolute;
	  top: 0;
	} */
	
	/* The dots/bullets/indicators */
	.dot {
	  height: 15px;
	  width: 15px;
	  margin: 0 2px;
	  /* background-color: #c90f6c; */
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 0.8s ease;
	}
	
	.active {
	  /* background-color: #ec1313; */
	}
	
	/* Fading animation */
	.fade {
	  animation-name: fade;
	  animation-duration: 5.5s;
	}
	
	@keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}
	
	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
	  .text {font-size: 11px}
	}
	</style>
	<style>
	 
	</style>
<!--===============================================================================================-->
</head>
<body>
	<div class="wrapper d-flex align-items-stretch" >
		@include('includes.sidebar')
		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5" >
			<button type="button" id="sidebarCollapse" class="btn btn-primary">
				<i class="fa fa-bars"></i>
				<span class="sr-only">Toggle Menu</span>
			</button>
			<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <i class="fa fa-bars"></i>
			</button>
			{{-- navbar  --}}
			{{-- @include('includes.navbar') --}}
			@yield('content')
		</div>
		
	</div>

    @yield('script')
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-3.3.1.min')}}"></script>
    <script src="{{asset('assets/js/popper.js')}}"></script>
    <script src="{{asset('assets/js/popper.min')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>


	  
	
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> --}}


</body>
</html>
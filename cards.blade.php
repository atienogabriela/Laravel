<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-4">
  
          <div class="card" style="border-radius: 15px;">
            <div class="card-body text-center">
              <div class="mt-3 mb-4">
                <img src="img.jpg" alt="" style="width:100%">
                 <h1>TWITTER</h1>"
              </div>
              <h4 class="mb-2">Julie L. Arsenault</h4>
              <p class="text-muted mb-4">@Programmer <span class="mx-2">|</span> <a
                  href="#!">mdbootstrap.com</a></p>
              <div class="mb-4 pb-2">
                <button type="button" class="btn btn-outline-primary btn-floating">
                  <i class="fab fa-facebook-f fa-lg"></i>
                </button>
                <button type="button" class="btn btn-outline-primary btn-floating">
                  <i class="fab fa-twitter fa-lg"></i>
                </button>
                <button type="button" class="btn btn-outline-primary btn-floating">
                  <i class="fab fa-skype fa-lg"></i>
                </button>
              </div>
              <button type="button" class="btn btn-primary btn-rounded btn-lg">
                FOLLOW
              </button>

            <div class="d-flex justify-content-between text-center mt-5 mb-2">
                {{-- <div class="d-flex flex-row"> --}}
                <div>
                  <p class="mb-2 h5">8471</p>
                  <p class="text-muted mb-0">FOLLOWERS</p>
                </div>
                <div class="px-3">
                  <p class="mb-2 h5">8512</p>
                  <p class="text-muted mb-0">FOLLOWING</p>
                </div>
                <div>
                  <p class="mb-2 h5">4751</p>
                  <p class="text-muted mb-0">LIKES</p>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section><section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-4">
  
          <div class="card" style="border-radius: 15px;">
            <div class="card-body text-center">
              <div class="mt-3 mb-4">
                <img src="img.jpg" alt="" style="width:100%">
  <h1>TWITTER</h1>"
              </div>
              <h4 class="mb-2">Julie L. Arsenault</h4>
              <p class="text-muted mb-4">@Programmer <span class="mx-2">|</span> <a
                  href="#!">mdbootstrap.com</a></p>
              <div class="mb-4 pb-2">
                <button type="button" class="btn btn-outline-primary btn-floating">
                  <i class="fab fa-facebook-f fa-lg"></i>
                </button>
                <button type="button" class="btn btn-outline-primary btn-floating">
                  <i class="fab fa-twitter fa-lg"></i>
                </button>
                <button type="button" class="btn btn-outline-primary btn-floating">
                  <i class="fab fa-skype fa-lg"></i>
                </button>
              </div>
              <button type="button" class="btn btn-primary btn-rounded btn-lg">
                FOLLOW
              </button>

              <div class="d-flex justify-content-between text-center mt-5 mb-2">
                {{-- <div class="d-flex flex-row"> --}}
                <div>
                  <p class="mb-2 h5">8471</p>
                  <p class="text-muted mb-0">FOLLOWERS</p>
                </div>
                <div class="px-3">
                  <p class="mb-2 h5">8512</p>
                  <p class="text-muted mb-0">FOLLOWING</p>
                </div>
                <div>
                  <p class="mb-2 h5">4751</p>
                  <p class="text-muted mb-0">LIKES</p>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section>
  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Thumbnail Carousel with Content</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
body {
	background: #ebebeb;
	font-family: "Open Sans", sans-serif;
}
.carousel {
	margin: 30px auto 60px;
	padding: 0 80px;
}
.carousel .carousel-item {
	text-align: center;
	overflow: hidden;
}
.carousel .carousel-item h4 {
	font-family: 'Varela Round', sans-serif;
}
.carousel .carousel-item img {
	max-width: 100%;
	display: inline-block;
}
.carousel .carousel-item .btn {
	border-radius: 0;
	font-size: 12px;
	text-transform: uppercase;
	font-weight: bold;
	border: none;
	background: #a177ff;
	padding: 6px 15px;
	margin-top: 5px;
}
.carousel .carousel-item .btn:hover {
	background: #8c5bff;
}
.carousel .carousel-item .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .thumb-wrapper {
	margin: 5px;
  width: 150%;
  padding: 5%;
	text-align: left;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0,0,0,0.1);   
}
.carousel .thumb-content {
	padding: 15px;
	font-size: 13px;
}
.carousel-control-prev, .carousel-control-next {
	height: 44px;
	width: 44px;
	background: none;	
	margin: auto 0;
	border-radius: 50%;
	border: 3px solid rgba(0, 0, 0, 0.8);
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 36px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -19px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: rgba(0, 0, 0, 0.8);
	text-shadow: none;
	font-weight: bold;
}
.carousel-control-prev i {
	margin-left: -3px;
}
.carousel-control-next i {
	margin-right: -3px;
}
.carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	border-radius: 50%;
	margin: 4px;
	border: none;
}
.carousel-indicators li {	
	background: #ababab;
}
.carousel-indicators li.active {	
	background: #555;
}
</style>
</head>
<body>
<div class="container-xl">
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper" style="width: 18rem;">
								<div class="img-box">
									<img src="/examples/images/cities/london.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
                  {{-- <img src="img.jpg" alt="" style="width:10%"> --}}
                  <h4>London</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam.</p>
									{{-- <i class="fa fa-angle-right"></i> --}}
                  <button type="button" class="btn btn-primary btn-rounded btn-lg">
                    FOLLOW
                  </button>
    
                  <div class="d-flex justify-content-between text-center mt-5 mb-2">
                    {{-- <div class="d-flex flex-row"> --}}
                    <div>
                      <p class="mb-2 h5">8471</p>
                      <p class="text-muted mb-0">FOLLOWERS</p>
                    </div>
                    <div class="px-3">
                      <p class="mb-2 h5">8512</p>
                      <p class="text-muted mb-0">FOLLOWING</p>
                    </div>
                    <div>
                      <p class="mb-2 h5">4751</p>
                      <p class="text-muted mb-0">LIKES</p>
                    </div>
                  </div>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper" style="width: 18rem;">
								<div class="img-box">
									<img src="/examples/images/cities/new-york.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>New York</h4>
									<p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in fringilla vivamus.</p>
                  <button type="button" class="btn btn-primary btn-rounded btn-lg">
                    FOLLOW
                  </button>
    
                  <div class="d-flex justify-content-between text-center mt-5 mb-2">
                    {{-- <div class="d-flex flex-row"> --}}
                    <div>
                      <p class="mb-2 h5">8471</p>
                      <p class="text-muted mb-0">FOLLOWERS</p>
                    </div>
                    <div class="px-3">
                      <p class="mb-2 h5">8512</p>
                      <p class="text-muted mb-0">FOLLOWING</p>
                    </div>
                    <div>
                      <p class="mb-2 h5">4751</p>
                      <p class="text-muted mb-0">LIKES</p>
                    </div>
                  </div>
 								</div>						
							</div>
						</div>				
						<div class="col-sm-4">
							<div class="thumb-wrapper" style="width: 18rem;">
								<div class="img-box">
									<img src="/examples/images/cities/paris.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Paris</h4>
									<p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus adipiscing dolor.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>					
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper" style="width: 18rem;">
								<div class="img-box">
									<img src="/examples/images/cities/kuala-lumpur.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Kuala Lumpur</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper" style="width: 18rem;">
								<div class="img-box">
									<img src="/examples/images/cities/agra.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Agra</h4>
									<p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in fringilla vivamus.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper" style="width: 18rem;">
								<div class="img-box">
									<img src="/examples/images/cities/dubai.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Dubai</h4>
									<p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus adipiscing dolor.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>					
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper" style="width: 18rem;">
								<div class="img-box">
									<img src="/examples/images/cities/rio-de-janeiro.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Rio De Janeiro</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper" style="width: 18rem;">
								<div class="img-box">
									<img src="/examples/images/cities/giza.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Giza</h4>
									<p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in fringilla vivamus.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper" style="width: 18rem;">
								<div class="img-box">
									<img src="/examples/images/cities/sydney.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Sydney</h4>
									<p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus adipiscing dolor.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #800ddf;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #c90f6c;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #ec1313;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
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
</head>
<body>

<h2>Automatic Slideshow</h2>
<p>Change image every 2 seconds:</p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img_nature_wide.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img_snow_wide.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img_mountains_wide.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 
 

{{-- <!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
	<style>
	header {
	background-color: #333;
	color: #fff;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

nav li {
	display: inline-block;
	margin-right: 10px;
}

nav a {
	color: #fff;
	text-decoration: none;
}
</style>

</head>
<body>
	<header>
		<header>
	<nav>
		<header>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>
</header>

	</nav>
</header>

</header>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Navbar Example</title>
	<style>
		nav {
			background-color: #333;
			overflow: hidden;
		}

		nav a {
			float: left;
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		nav a:hover {
			background-color: #ddd;
			color: black;
		}

		nav .sign-in {
			float: right;
		}
	</style>
</head>
<body>
	<nav>
		<a href="#">Home</a>
		<a href="#">About</a>
		<a href="#">Contact</a>
		<a href="#" class="sign-in">Sign In</a>
		<a href="#" class="sign-in">Sign Out</a>
	</nav>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Logo and Paragraph Example</title>
	<style>
		.logo {
			float: left;
			margin-right: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<img src="logo.png" alt="Logo" class="logo">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy sagittis. Fusce wisi nibh euismod tincidunt laoreet dolore magna. Aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
	</div>
</body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
  <title>Double Navbar</title>
  <style>
    /* Navbar styles */
    .navbar {
      background-color: #333;
      color: #fff;
      padding: 10px;
      display: flex;
      justify-content: space-between;
    }

    .navbar ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    .navbar ul li {
      margin-right: 10px;
    }

    .navbar ul li a {
      color: #fff;
      text-decoration: none;
      padding: 5px;
    }

    /* Second navbar styles */
    .second-navbar {
      background-color: #7208a3;
      color: #fff;
      padding: 10px;
      display: flex;
      justify-content: space-between;
    }

    .second-navbar ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    .second-navbar ul li {
      margin-right: 10px;
    }

    .second-navbar ul li a {
      color: #fff;
      text-decoration: none;
      padding: 5px;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
    </ul>
  </div>
  <div class="second-navbar">
    <ul>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Portfolio</a></li>
    </ul>
  </div>
</body>
</html>

 







   
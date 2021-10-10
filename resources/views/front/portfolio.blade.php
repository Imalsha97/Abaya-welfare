<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Abhaya-Welfare_gallery</title>
<!--
Neaty HTML Template
http://www.templatemo.com/tm-501-neaty
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">                                <!-- Magnific pop up style, http://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-style.css') }}">
    <link rel='stylesheet' href="{{ asset('assets/css/font-awesome.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
                                      <!-- Templatemo style -->
                                      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
                                      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>
    <body>
    <div id="parallax" style="background-image: url({{ asset('assets/img/nelum6.webp') }});">


</div>
<!-- End Hero Bg
	================================================== -->



<!-- Start Header
	================================================== -->
<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
<div class="container">
	<div class="navbar-header">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<!-- Your Logo -->

		<div style="float: left; width: 50px; height: 70px; margin-top: 15px; margin-right: 20px;">
			<img src="{{ asset('assets/img/logo.webp') }}" alt="" width="100%">
		</div>

		<a href="#hero" class="navbar-brand"style="color:#cc2c6b">ABHAYA WELFARE FOUNDATION</span></a>
	</div>
	<!-- Start Navigation -->
	<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	<ul class="nav navbar-nav">
		<li><a href="{{ route('homepage') }}">Home</a></li>
		<li><a href="{{ route('homepage') }}/#about">About</a></li>
		<li><a href="{{ route('homepage') }}/#features">Services</a></li>
        <li><a href="{{ route('homepage') }}/#gallery">Gallery</a></li>

		<li><a href="{{ route('homepage') }}/#donate">Donate</a></li>
		<li><a href="{{ route('homepage') }}/#contactarea">Contact Us</a></li>
	</ul>
	</nav>
</div>
</header>



<!-- Intro / Home
	================================================================================================ -->




    <div class="container">
            <div class="row">
                <div class="tm-content-div" style="padding-top:40;padding-bottom:0;margin:0">
                    <!-- Welcome section -->
                        <section id="all" class="tm-section">
                            <header>
                                <div class="row">
                                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12"style="padding-bottom:0">
                                 <h2 class="tm-blue-text tm-section-title tm-margin-b-100" style="padding-top:50px;margin-bottom:0;color:#cc2c6b;text-align:center">{{ $slug->name }}</h2>
                                </div>
                                </div>

                                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 text-center"style="padding:10px;padding-bottom:0;margin-bottom:0">
                                <a href="https://drive.google.com/drive/folders/1OBKQ6DLRWZYco1Hze5CceagGTJhcIihi?usp=sharing" target="_blank"><button type="button" class="btn btn-outline-danger" style="color:#cc2c6b;align-items:center;">SEE ALL PHOTOS</button></a>
                                </div>
                                </div>

                            </header>
                                <div class="tm-gallery-container tm-gallery-1"style="padding-top:0;margin:0">

                                @foreach($portfolio as $port)

                                    <div class="col-md-3 col-sm-4" style="padding-bottom: 20px">
                                        <div class="cnt">
                                            <a href="{{ asset('public/storage/'.$port->cover) }}"><img src="{{ asset('public/storage/'.$port->cover) }}" alt="Image" class="image-responsive" style="width:300px;height:200px"></a>
                                        </div>
                                    </div>

                            @endforeach
                                </div>
                            </section>


    </div></div></div>
                            <!-- footer<img src="{{ asset('assets/img\logo.webp') }}" alt="">
	=======================================================================================================  -->
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                    <img src="{{ asset('assets/img\logo.webp') }}" alt="">
                    </div>
                    <div class="col-sm-6 col-md-3 item"style="padding-top:40px">
                        <h3>Contact us</h3>
                        <ul>
                        <li><i class="fa fa-phone-square icon2" aria-hidden="true"></i> &nbsp;(+94) 714049053 (WhatsApp, IMO, Viber)</li><br>
                            <li><i class="fa fa-envelope icon2" aria-hidden="true"></i> &nbsp;sipnara@gmail.com </li><br>
                            <li>&nbsp;<i class="fa fa-map-marker icon2" aria-hidden="true"></i> &nbsp;
                            No: 722/130/1, Abhayapura, Aturugiriya, Sri Lanka.

                        </ul>
                    </div>
                    <div class="col-md-6 item text"style="padding-top:40px">
                    <h3>Abhaya Welfare Foundation</h3>
                        <p>“ The way you get meaning into your life is to devote yourself to loving others, devote yourself to your community around you, and devote yourself to creating something that gives you purpose and meaning.”  <br>- Mitch Albom -</p>
                    </div>
                    <section id="credits" class="text-center">
						<span class="social wow zoomIn">
						<a href="https://www.facebook.com/Abhaya-Welfare-Foundation-107204148403119"><i class="fa fa-facebook"></i></a>

                        <a href="https://twitter.com/AbhayaWelfare"><i class="fa fa-twitter"></i></a>
						<a href="https://www.instagram.com/welabhaya/"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/feed/?trk=onboarding-landing"><i class="fa fa-linkedin"></i></a>
						<!-- <a href="#"><i class="fa fa-skype"></i></a> -->
						<!-- <a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a> -->
						</span>
					</section>
                </div>
                <p class="copyright">&copy; <script>document.write(new Date().getFullYear())</script> | Abhaya Welfare Foundation</p>
                <p class="copyright" style="padding:0">Developed By | 10<sup>th</sup> Batch, Department of Computer Science, University Of Ruhuna </p>
            </div>
        </footer>
    </div>




        <!-- load JS files -->
        <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="{{ asset('assets/js/jquery.singlePageNav.min.js') }}"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script>

            $(document).ready(function(){

                // Single page nav
                $('.tm-main-nav').singlePageNav({
                    'currentClass' : "active",
                    offset : 20
                });

                // Magnific pop up
                $('.tm-gallery-1').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                });

                $('.tm-gallery-2').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                });

                $('.tm-gallery-3').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                });

                $('.tm-current-year').text(new Date().getFullYear());
            });
        </script>
</body>
</html>

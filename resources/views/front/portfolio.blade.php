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
    <link rel='stylesheet' href="{{ asset('assets/css/font-awesome.min.css') }}">                                    <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="tm-left-right-container">
                    <!-- Left column: logo and menu -->
                    <div class="tm-blue-bg tm-left-column">                        
                        <div class="tm-logo-div text-xs-center">
                            <h1 class="tm-site-name">Abhaya Welfare</h1>
                        </div>
                        <nav class="tm-main-nav">
                            <ul class="tm-main-nav-ul">
                                
                                <li class="tm-nav-item">
                                    <a href="{{ route('portfolio','Food Donation') }}" class="tm-nav-item-link">Food Donation</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="{{ route('portfolio','Medicine Donation') }}" class="tm-nav-item-link">Medicine Donations</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="{{ route('portfolio','Equipments Donation') }}" class="tm-nav-item-link">Equipments Donation</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="{{ route('portfolio','Counseling') }}" class="tm-nav-item-link">Counseling</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="{{ route('portfolio','Scholarships') }}" class="tm-nav-item-link">Scholarships</a>
                                </li>
                            </ul>
                        </nav>                                         
                    </div> <!-- Left column: logo and menu -->
                    
                    <!-- Right column: content -->
                    <div class="tm-right-column">
                        <figure>
                            <img src="{{ asset('assets/img1/b2.jpg')}}" alt="Header image" class="img-fluid" style="height: 100%; width: 100%;">    
                        </figure>

                        <div class="tm-content-div">
                            <!-- Welcome section -->
                            <section id="all" class="tm-section">
                                <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">{{ $slug->name }}</h2></header>
                                <div class="tm-gallery-container tm-gallery-1">

                                    @foreach($portfolio as $port)
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="{{ asset('storage/'.$port->cover) }}"><img src="{{ asset('storage/'.$port->cover) }}" alt="Image" class="img-fluid tm-img-tn"></a>    
                                    </div>
                                    @endforeach                                 
                                </div>
                            </section>

                            
                            
                            <!-- footer
	=======================================================================================================  -->
	<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <img src="{{ asset('assets/img1\logo.jpg') }}" alt="" style="width: 120px; height: 120px; margin-left: 30px;">
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Contact us</h3>
                        <ul>
                            <li>+94715670110 (Main Office)</li><br>
                            <li>Abhaya Welfare</li><br>
                            <li>No 67/25, Hanwella Road, Melwatta, Padukka, Sri Lanka</li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Abhaya Welfare</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <section id="credits" class="text-center">
						<span class="social wow zoomIn">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-skype"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						</span>
					</section>
                </div>
                <p class="copyright">Abhaya Welfare © 2018</p>
            </div>
        </footer>
    </div>

                        </div>  
                        
                    </div> <!-- Right column: content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->            
        


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
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Clark - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('codeblaze_asset/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('codeblaze_asset/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('codeblaze_asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('codeblaze_asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('codeblaze_asset/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('codeblaze_asset/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('codeblaze_asset/css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('codeblaze_asset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('codeblaze_asset/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('codeblaze_asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/codeblaze.css')}}">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	 
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Clark</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
	          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
	          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

      @yield('body')

<footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">About</h2>
            @php
                $footers = App\Models\Footer::all(); 
            @endphp
            <p>{{$footers->where('footer_name','about_addres')->first()->footer_value}}</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="{{$footers->where('footer_name','twiter_link')->first()->footer_value}}"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="{{$footers->where('footer_name','faceboock_link')->first()->footer_value}}"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="{{$footers->where('footer_name','instagram_link')->first()->footer_value}}"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">{{$footers->where('footer_name','footer_location')->first()->footer_value}}</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{$footers->where('footer_name','footer_phone')->first()->footer_value}}</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{$footers->where('footer_name','footer_email')->first()->footer_value}}</span></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>
  


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="{{asset('codeblaze_asset/js/jquery.min.js')}}"></script>
<script src="{{asset('codeblaze_asset/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('codeblaze_asset/js/popper.min.js')}}"></script>
<script src="{{asset('codeblaze_asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('codeblaze_asset/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('codeblaze_asset/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('codeblaze_asset/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('codeblaze_asset/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('codeblaze_asset/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('codeblaze_asset/js/aos.js')}}"></script>
<script src="{{asset('codeblaze_asset/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('codeblaze_asset/js/scrollax.min.js')}}"></script>

<script src="{{asset('codeblaze_asset/js/main.js')}}"></script>
  
</body>
</html>
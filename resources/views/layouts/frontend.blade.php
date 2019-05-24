
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Clean &mdash; A free HTML5 Template by FREEHTML5.CO</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,500' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="{{ asset('frontend/css/simple-line-icons.css') }}">
	<!-- Theme Style -->
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
	<!-- Modernizr JS -->
	<script src="{{ asset('frontend/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<header id="fh5co-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="navbar-header">
						<!-- Mobile Toggle Menu Button -->
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle visible-xs-block" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
						<a class="navbar-brand" href="index.html">Clean</a>
						</div>
						<div id="fh5co-navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="{{ url('/') }}"><span>Home <span class="border"></span></span></a></li>
								<li><a href="{{  route('blog') }}"><span>Blog <span class="border"></span></span></a></li>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- END .header -->

	<div id="fh5co-main">
		<div class="fh5co-intro text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">

							@if(Request::is('/')=='/')
							       <h1 class="intro-lead">Arrow Empire</h1>
										 <p class="">100% Free HTML5 Template by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a></p>
						  @endif

							@if(Request::segment(1)=='blog')
							       <h1 class="intro-lead"><?php  echo ucfirst(Request::segment(1));   ?></h1>
										 <p class="">100% Free HTML5 Template by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a></p>
						  @endif




					</div>
				</div>
			</div>
		</div>


	<div id="fh5co-content">
			@if(Request::is('/'))
						@yield('content')
			@else
			<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="row">
								<div class="col-md-3 col-md-push-9 animate-box">
									@include('inc.sidebar')
								</div>
								<div class="col-md-9 col-md-pull-3">
									@yield('content')
								</div>
							</div>
						</div>
					</div>
			</div>
			@endif


	</div>



    <div id="fh5co-services">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <h2 class="section-lead text-center">Features</h2>
              <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
                <div class="fh5co-icon to-animate"><i class="icon-present"></i></div>
                <div class="fh5co-desc">
                  <h3>100% Free</h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
                <div class="fh5co-icon to-animate"><i class="icon-eye"></i></div>
                <div class="fh5co-desc">
                  <h3>Retina Ready</h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                </div>
              </div>
              <div class="clearfix visible-sm-block visible-xs-block"></div>
              <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
                <div class="fh5co-icon to-animate"><i class="icon-crop"></i></div>
                <div class="fh5co-desc">
                  <h3>Fully Responsive</h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
                <div class="fh5co-icon to-animate"><i class="icon-speedometer"></i></div>
                <div class="fh5co-desc">
                  <h3>Lightweight</h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                </div>
              </div>
              <div class="clearfix visible-sm-block visible-xs-block"></div>
              <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
                <div class="fh5co-icon to-animate"><i class="icon-heart"></i></div>
                <div class="fh5co-desc">
                  <h3>Made with Love</h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
                <div class="fh5co-icon to-animate"><i class="icon-umbrella"></i></div>
                <div class="fh5co-desc">
                  <h3>Eco Friendly</h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                </div>
              </div>
              <div class="clearfix visible-sm-block visible-xs-block"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  	<footer id="fh5co-footer">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-10 col-md-offset-1 text-center">
  					<p>&copy; Clean Free HTML5. All Rights Reserved. <br>Created by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Images: <a href="http://pexels.com/" target="_blank">Pexels</a></p>
  				</div>
  			</div>
  		</div>
  	</footer>
  	<!-- jQuery -->
  	<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
  	<!-- jQuery Easing -->
  	<script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
  	<!-- Bootstrap -->
  	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  	<!-- Waypoints -->
  	<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
  	<!-- Main JS -->
  	<script src="{{ asset('frontend/js/main.js') }}"></script>


  	</body>
  </html>

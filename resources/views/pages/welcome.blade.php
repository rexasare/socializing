<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Fit Point a Sports Category Flat Bootstrap Responsive Web Template| Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Fit Point Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

</head>
<body>
<div data-vide-bg="video/nupsg">
    <div class="center-container">
		<div class="container">
			<div class="navigation">
				<div class="logo">
					<h1>
						<a class="navbar-brand link link--yaku" href="/"><span>S</span><span>O</span><span>C</span><span>I</span><span>A</span><span>L</span><span>I</span><span>Z</span><span>I</span><span>N</span><span>G</span></a>
					</h1>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=" " /></span>
          <ul class="nav1 nav nav-wil cl-effect-11" id="cl-effect-11">
						@if (Auth::check())
						<li><a class="{{ Request::is('/') ? 'active' : ''}}" data-hover="HOME" href="/">HOME <span class="sr-only">(current)</span></a></li>
						<li><a class="{{ Request::is('chats') ? 'active' : ''}}" data-hover="CHAT" href="chats">CHAT</a></li>
						<li><a class="{{ Request::is('gallery') ? 'active' : ''}}"data-hover="GALLERY" href="gallery">GALLERY</a></li>
						<li><a data-hover="Logout" href="{{ route('logout') }}">Logout</a></li>
					@else
						<li><a class="{{ Request::is('/') ? 'active' : ''}}" data-hover="HOME" href="/">HOME <span class="sr-only">(current)</span></a></li>
							<li><a class="{{ Request::is('chats') ? 'active' : ''}}" data-hover="CHAT" href="chats">CHAT</a></li>
						<li><a class="{{ Request::is('gallery') ? 'active' : ''}}" data-hover="GALLERY" href="/gallery">GALLERY</a></li>
						<li><a data-hover="Login" href="{{ route('login') }}">Login</a></li>
					@endif
					</ul>
						<!-- script-for-menu -->
							<script>
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
						<!-- /script-for-menu -->
				</div>
				<div class="clearfix"></div>
			</div>
            <div class="socials">
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4dd797b06396480a"></script>
            </div>
            <div class="box_1-top">
        				<div class="banner-info">
        						<h2>SOCIALIZING 2016</h2>
        						<h3>MENO OLYMPICO!</h3>
        						<a class="hvr-rectangle-out button" href="program/../games">Check out our Programs.</a>
        				</div>
        				<div class="arrow text-center"><a class="scroll" href="#banner-bottom"><img src="images/arrow.png" alt="" /></a></div>
        	</div>
		</div>
    </div>
</div>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

<!--banner bottom-->
<div id="banner-bottom" class="banner-bottom">
	<div class="container">
		<div class="bottom-grids">
			<div class="col-md-3 col-xs-6 bottom-grid text-center">
				<h3>League Table</h3>
				<a href="">
          <img src="images/cup.png" alt="" /></a>
				<p>View all your games here</p>
			</div>
      <div class="col-md-3 col-xs-6 bottom-grid text-center">
				<h3>Fixtures</h3>
				<a href="">
          <img src="images/list (1).png" alt="" /></a>
				<p>View all your games fixtures here</p>
			</div>
			<div class="col-md-3 col-xs-6 bottom-grid text-center">
				<h3>Gallery</h3>
        <a href="gallery/">
				<img src="images/icon (6).png" alt="" />
        </a>
				<p>View Pictures of wings games.</p>
			</div>
			<div class="col-md-3 col-xs-6 bottom-grid text-center">
				<h3>Chat Room</h3>
        <a href="{{ route('chats.index') }}">
				<img src="images/chat (1).png" alt="" />
        </a>
				<p>Comment on games happening here.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//banner bottom-->

<!--//footer-top-->
<!--copy right-->
<div class="copyright">
	<div class="container">
		<div class="copy-left">
			<p> &copy; 2016 Socializing. All Rights Reserved | Design by  <a href="https://w3layouts.com"> w3layouts</a></p>
		</div>
		<div class="copy-right">
			<ul>
				<li><a class="fb1" href="#"></a></li>
				<li><a class="fb2" href="#"></a></li>
				<li><a class="fb3" href="#"></a></li>
				<li><a class="fb4" href="#"></a></li>
				<li><a class="fb5" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--//copy right-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

</body>
</html>

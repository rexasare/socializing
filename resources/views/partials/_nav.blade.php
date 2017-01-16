<div class="page-head">
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
						<li><a class="{{ Request::is('gallery') ? 'active' : ''}}" data-hover="GALLERY" href="gallery">GALLERY</a></li>
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
	</div>
</div>

<!DOCTYPE html>
<html>
<head>
@include('partials._head')
</head>
<body>

@include('partials._nav')

<!--gallery-starts-->
<div class="@yield('main-title')">
	<div class="container">

      @yield('content')

	</div>
</div>


@include('partials._footer')

@include('partials._javascript')
</body>
</html>

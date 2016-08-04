<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<base href="{{ config('app.url') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
	@yield('css')
</head>
<body>
	@include('includes.nav')

	<div class="main">
		@yield('content')
	</div>	

	@yield('scripts')
</body>
</html>


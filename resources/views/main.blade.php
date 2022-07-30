<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="
	{{URL::asset('http://localhost/to-do-list/public')}}/css/mainStyle.css">
	<title>To Do List</title>
</head>
<body>

	<main>
		@yield('content')
	</main>

	<script 
		type="text/javascript"
		src="{{URL::asset('http://localhost/sistema-votacao/public/')}}js/jquery-3.6.0.min.js"></script>
		
	@stack('scripts')
	
</body>
</html>
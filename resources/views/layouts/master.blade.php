
<html>
<head>
	<title>Blog - @yield('titulo')</title>
</head>
<body>
	@section('sidebar')
		Esto es un sidebar del master
	@show
	@yield('content')
</body>
</html>
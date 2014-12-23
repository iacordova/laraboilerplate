<html>
<head>
	<title>Root Capital SlideShow - @yield('title')</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSS Twitter Bootstrap -->
    {{ HTML::style('packages/bootstrap/css/bootstrap.css') }}
    {{ HTML::style('packages/bootstrap/css/bootstrap-theme.css') }}

</head>
<body>

    <div class="container-fluid">

        @yield('content')

    </div>

    <!-- Basic JS -->
    {{ HTML::script('packages/js/jquery-1.11.2.min.js') }}

    <!-- Scripts Twitter Bootstrap -->
    {{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}

</body>
</html>
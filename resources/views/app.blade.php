<!DOCTYPE html>
<html ng-app="tutasim">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TutaSIMPEG</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.ui.timepicker.addon/1.4.5/jquery-ui-timepicker-addon.min.css">
	<link href="{{ asset('/css/tutasimpeg.css') }}" rel="stylesheet">
		<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="http://tutahosting.net/wp-content/uploads/2015/01/tutaico.png" type="image/x-icon" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	@include('menu')
	@yield('content')

	<footer class="footer hidden-print">
      <div class="container">
        <p class="text-muted">You are using <a href="http://mytuta.com">TutaSIMPEG</a> v0.1-alpha by <a href="https://twitter.com/tutacare">Irfan Mahfudz Guntur</a>.
        </p>
      </div>
    </footer>
	<!-- Scripts -->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script src="//cdn.jsdelivr.net/jquery.ui.timepicker.addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
	<script src="/js/kartu-induk-pegawai.js"></script>


</body>
</html>

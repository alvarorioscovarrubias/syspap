<head>
	<meta charset="UTF-8">
	<title>
    </title>
  <meta name="description" content="">
	<title>PAP | {{Auth::user()->name}}</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="author" content="okler.net">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,800,900|Shadows+Into+Light" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('porto_admin/vendor/bootstrap/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ asset('porto_admin/vendor/animate/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('porto_admin/vendor/font-awesome/css/all.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('porto_admin/vendor/magnific-popup/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('porto_admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
	<link rel="stylesheet" href="{{ asset('porto_admin/vendor/jquery-ui/jquery-ui.css') }}" />
	<link rel="stylesheet" href="{{ asset('porto_admin/vendor/jquery-ui/jquery-ui.theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('porto_admin/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
	<link rel="stylesheet" href="{{ asset('porto_admin/vendor/morris/morris.css') }}" />
	<link rel="stylesheet" href="{{ asset('porto_admin/css/theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('porto_admin/css/skins/default.css') }}" />
	<link rel="stylesheet" href="{{ asset('porto_admin/css/custom.css') }}">
	<script src="{{ asset('porto_admin/vendor/modernizr/modernizr.js')}}"></script>

	<style type="text/css">
		.p-r-10px{
			padding-right: 10px;
		}
	</style>
	<link rel="shortcut icon" href="" />
	<meta name="csrf_token" content="{{ csrf_token() }}"/>
</head>

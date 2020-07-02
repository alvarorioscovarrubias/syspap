<head>
	<base href="">
	<meta charset="utf-8" />
	<title>
    @if(array_key_exists('title', $private))
			{{$private['title']}}
		@endif
    {{Auth::user()->name}}
  </title>
	<meta name="description" content="@if(array_key_exists('descripcion', $private)){{$private['descripcion']}} @endif">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="{{ asset('metronic_7/demo1/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('metronic_7/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('metronic_7/demo1/dist/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('metronic_7/demo1/dist/assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('metronic_7/demo1/dist/assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('metronic_7/demo1/dist/assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('metronic_7/demo1/dist/assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="@if(array_key_exists('logo(title)', $private)){{$private['logo(title)']}} @endif" />
	<link href="{{ asset('metronic_7/demo1/dist/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('metronic_7/demo1/dist/assets/plugins/custom/fullcalendar/packages/core/main.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('metronic_7/demo1/dist/assets/plugins/custom/fullcalendar/packages/daygrid/main.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('metronic_7/demo1/dist/assets/plugins/custom/fullcalendar/packages/interaction/main.css') }}" rel="stylesheet" type="text/css"/>
	<style type="text/css">
  	@if(array_key_exists('custom_css', $private))
      	{!!$private['custom_css']!!}
  	@endif
	</style>
	@yield('head')
</head>

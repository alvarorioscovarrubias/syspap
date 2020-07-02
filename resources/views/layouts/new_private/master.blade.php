<!doctype html>
<html class="sidebar-light sidebar-left-big-icons">
	@include('layouts.new_private.head')
	<body>
		<section class="body">
			@include('layouts.new_private.header')
			<div class="inner-wrapper">
				@include('layouts.new_private.nav')
				<section role="main" class="content-body">
					@yield('content')
				</section>
			</div>
		</section>
	@include('layouts.new_private.js')
	</body>
</html>
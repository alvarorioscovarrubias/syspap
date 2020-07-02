<!DOCTYPE html>
<html lang="en">
	@include('layouts.metronic_7.head')
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">


		@include('layouts.metronic_7.mobile')

		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-row flex-column-fluid page">
				@include('layouts.metronic_7.aside')
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					@include('layouts.metronic_7.header')
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						@yield('content')
					</div>
					@include('layouts.metronic_7.footer')
				</div>
			</div>
		</div>
		@include('layouts.metronic_7.user')
		@include('layouts.metronic_7.js')
	</body>
</html>

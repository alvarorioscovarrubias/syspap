<div id="kt_header" class="header header-fixed">
	<div class="container-fluid d-flex align-items-stretch justify-content-between">
		<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
			<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
				<ul class="menu-nav">
					@if (Auth::user()->roles_id == 15)
	                    <li class="menu-item">
							<a href="{{ asset('') }}" class="menu-link ">
								<span class="menu-text">Portal</span>
								<i class="menu-arrow"></i>
							</a>
						</li>
	                @endif

	                @if (Auth::user()->roles_id == 14)
	                    @foreach ($modulos as $modulo)
	                        @if (Session::get('modulo')->id == $modulo->id)
	                            <li class="menu-item menu-item-active">
									<a href="{{ asset('private/usar-modulo/'.$modulo->id) }}" class="menu-link ">
										<span class="menu-text">{{$modulo->nombre}}</span>
										<i class="menu-arrow"></i>
									</a>
								</li>
	                        @else
	                            <li class="menu-item">
									<a href="{{ asset('private/usar-modulo/'.$modulo->id) }}" class="menu-link ">
										<span class="menu-text">{{$modulo->nombre}}</span>
										<i class="menu-arrow"></i>
									</a>
								</li>
	                        @endif
	                    @endforeach
	                @endif
				</ul>
			</div>
		</div>
		<div class="topbar">
			<div class="topbar-item">
				<div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
					<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hola,</span>
					<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{Auth::user()->name}}</span>
					<span class="symbol symbol-35 symbol-light-success">
						<span class="symbol-label font-size-h5 font-weight-bold">
							{{strtoupper(substr(Auth::user()->name, 0, 1))}}
						</span>
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
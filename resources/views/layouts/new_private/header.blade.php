<header class="header">
	<div class="logo-container">
		<a href="/home" class="logo ml-5">
			<img src="{{asset('porto_admin/img/logopap.png')}}"  height="40" alt="SYSPAP" />
		</a>
		<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
			<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>

	<!-- start: search & user box -->
	<div class="header-right">


		<span class="separator"></span>

		<ul class="notifications">
			<li>
				<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
					<i class="fas fa-tasks"></i>
					{{-- <span class="badge">3</span> --}}
				</a>

				<div class="dropdown-menu notification-menu large">
					<div class="notification-title">
						{{-- <span class="float-right badge badge-default">3</span> --}}
						Tasks
					</div>

					<div class="content">
						<ul>
							<li>
								<p class="clearfix mb-1">
									<span class="message float-left">Generating Sales Report</span>
									<span class="message float-right text-dark">100%</span>
								</p>
								<div class="progress progress-xs light">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li>
				<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
					<i class="fas fa-envelope"></i>
					{{-- <span class="badge">4</span> --}}
				</a>

				<div class="dropdown-menu notification-menu">
					<div class="notification-title">
						{{-- <span class="float-right badge badge-default">230</span> --}}
						Messages
					</div>

					<div class="content">
						<ul>
							<li>
								<a href="#" class="clearfix">
									<figure class="image">
										<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
									</figure>
									<span class="title">Joseph Junior</span>
									<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
								</a>
							</li>
						</ul>

						<hr />

						<div class="text-right">
							<a href="#" class="view-more">View All</a>
						</div>
					</div>
				</div>
			</li>
			<li>
				<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
					<i class="fas fa-bell"></i>
					{{-- <span class="badge">3</span> --}}
				</a>

				<div class="dropdown-menu notification-menu">
					<div class="notification-title">
						{{-- <span class="float-right badge badge-default">3</span> --}}
						Alerts
					</div>

					<div class="content">
						<ul>
							{{-- <li>
								<a href="#" class="clearfix">
									<div class="image">
										<i class="fas fa-thumbs-down bg-danger text-light"></i>
									</div>
									<span class="title">Server is Down!</span>
									<span class="message">Just now</span>
								</a>
							</li>
							<li>
								<a href="#" class="clearfix">
									<div class="image">
										<i class="fas fa-lock bg-warning text-light"></i>
									</div>
									<span class="title">User Locked</span>
									<span class="message">15 minutes ago</span>
								</a>
							</li> --}}
							<li>
								<a href="#" class="clearfix">
									<div class="image">
										<i class="fas fa-signal bg-success text-light"></i>
									</div>
									<span class="title">Connection Restaured</span>
									<span class="message">10/10/2017</span>
								</a>
							</li>
						</ul>

						<hr />

						<div class="text-right">
							<a href="#" class="view-more">View All</a>
						</div>
					</div>
				</div>
			</li>
		</ul>

		<span class="separator"></span>

		<div id="userbox" class="userbox">
			<a href="#" data-toggle="dropdown">
				<figure class="profile-picture">
					<img src="
					@if(Auth::user()->foto==null)
	                {{ asset('user-default.jpeg') }}
	                @else
	                {{ asset('storage/fotos-perfil/'.Auth::user()->foto) }}
	                @endif " 
	                alt="Joseph Doe" class="rounded-circle" data-lock-picture="
		                @if(Auth::user()->foto==null)
		                {{ asset('user-default.jpeg') }}
		                @else
		                {{ asset('storage/fotos-perfil/'.Auth::user()->foto) }}
		                @endif" />
				</figure>
				<div class="profile-info" data-lock-name="John Doe" data-lock-email="{{Auth::user()->name}}">
					<span class="name">{{Auth::user()->name}}</span>
				</div>

				<i class="fa custom-caret"></i>
			</a>

			<div class="dropdown-menu">
				<ul class="list-unstyled mb-2">
					<li class="divider"></li>
					{{--<li>
						<a role="menuitem" tabindex="-1" href="{{asset('private/mi-perfil')}}"><i class="fas fa-user"></i> Mi perfil</a>
					</li>--}}
					<li>

						<a role="menuitem" tabindex="-1" href="{{ route('logout') }}"
		                   onclick="event.preventDefault();
		                                 document.getElementById('logout-form').submit();">
		                    <i class="fas fa-power-off"></i>{{ __('Cerrar Sesión') }}
		                </a>

		                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                    @csrf
		                </form>


					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end: search & user box -->
</header>
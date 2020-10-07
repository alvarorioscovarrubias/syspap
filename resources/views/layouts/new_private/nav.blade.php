<aside id="sidebar-left" class="sidebar-left">
				
    <div class="sidebar-header">
        <div class="sidebar-title">
            Navegación
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                	{{--@foreach (Auth::user()->rol->nav_role as $nav_role)
			            @if ($nav_role->nav->hijos->count() == 0)
		            		@if (Request::fullUrl() == asset($nav_role->nav->url))
						        <li class="nav-parent nav-expanded nav-active">
		            		@else
						        <li class="nav-parent nav-expanded">
		            		@endif
			                    <a class="nav-link" href="{{ asset($nav_role->nav->url) }}">
		                            <i class="{{$nav_role->nav->icono}}" aria-hidden="true"></i>
		                            <span>{{$nav_role->nav->nombre}}</span>
		                        </a>                        
		                    </li>
			            @else
			            	@if (in_array(Request::fullUrl(), $nav_role->nav->hijos_array()))
						        <li class="nav-parent nav-expanded nav-active">
			            	@else
						        <li class="nav-parent nav-expanded">
			            	@endif

		                        <a class="nav-link" href="#">
		                            <i class="{{$nav_role->nav->icono}}" aria-hidden="true"></i>
		                            <span>{{$nav_role->nav->nombre}}</span>
		                        </a>
		                        <ul class="nav nav-children">
		                        	@foreach ($nav_role->nav->hijos as $hijos)
			                            <li>
			                                <a class="nav-link " href="{{ asset($nav_role->nav->url.'/'.$hijos->url) }}">
			                                    {{$hijos->nombre}}
			                                </a>
			                            </li>
		                            @endforeach
		                        </ul>
		                    </li>
			            @endif
	       			@endforeach--}}

	       			<li class="nav-parent nav-expanded mb-1">
	       				<a class="nav-link" href="/home">
                            <i class="fas fa-home"></i>
                            <span>Home</span>
                        </a>                        
                    </li>
	       			@if(Auth::user()->rol->name == 'Administrador')
						<li class="nav-parent nav-expanded mb-1">
			            	<a class="nav-link" href="#">
		                        <i class="fas fa-cog"></i>
		                        <span>Mantenedores</span>
		                    </a>
		                    <ul class="nav nav-children">
	                            <li>
	                                <a class="nav-link " href="/admin/mantenedor/grupo-edad">Grupo Edad</a>
	                            </li>
	                            <li>
	                                <a class="nav-link " href="/admin/mantenedor/resultado-pap">Resultado PAP</a>
	                            </li>
	                            <li>
	                                <a class="nav-link " href="/admin/mantenedor/resultado-efm">Resultado EFM</a>
	                            </li>
	                            <li>
	                                <a class="nav-link " href="/admin/mantenedor/resultado-mamografia">Resultado Mamografía</a>
	                            </li>
	                            <li>
	                                <a class="nav-link " href="/admin/mantenedor/resultado-eco">Resultado Ecotomografía</a>
	                            </li>
	                            <li>
	                                <a class="nav-link " href="/admin/mantenedor/nunca-efm">Nunca EFM</a>
	                            </li>
		                    </ul>
		                </li>
                    @endif
	       			<li class="nav-parent nav-expanded mb-1">
	       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/pacientes">
                            <i class="fas fa-users"></i>
                            <span>Pacientes</span>
                        </a>                        
                    </li>
                    @if(Auth::user()->rol->name == 'Administrador')
                    	<li class="nav-parent nav-expanded mb-1">
		       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/tecnicos">
	                            <i class="fas fa-user-nurse"></i>
	                            <span>Técnicos</span>
	                        </a>                        
	                    </li>
	                    <li class="nav-parent nav-expanded mb-1">
		       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/matrones">
	                            <i class="fas fa-user-md"></i>
	                            <span>Matrones</span>
	                        </a>                        
	                    </li>
                    @endif
                    <li class="nav-parent nav-expanded mb-1">
	       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/PAP">
                            <i class="fas fa-vials"></i>
                            <span>PAP</span>
                        </a>                        
                    </li>
                    <li class="nav-parent nav-expanded mb-1">
	       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/EFM">
                            <i class="fas fa-vial"></i>
                            <span>EFM</span>
                        </a>                        
                    </li>
                    <li class="nav-parent nav-expanded mb-1">
	       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/mamografia">
                            <img src="{{asset('porto_admin/img/mamografia.png')}}" width="30" class="fas">
                            <span>Mamografía</span>
                        </a>                        
                    </li>
                    <li class="nav-parent nav-expanded mb-1">
	       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/ecotomografia">
                            <i class="nav-link" aria-hidden="true"></i>
                            <span>Ecotomografía</span>
                        </a>                        
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>
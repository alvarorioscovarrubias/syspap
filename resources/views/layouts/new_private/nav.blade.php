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

	       			<li class="nav-parent nav-expanded">
	       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/pacientes">
                            <i class="nav-link" aria-hidden="true"></i>
                            <span>Pacientes</span>
                        </a>                        
                    </li>
                    @if(Auth::user()->rol->name == 'Administrador')
                    	<li class="nav-parent nav-expanded">
		       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/tecnicos">
	                            <i class="nav-link" aria-hidden="true"></i>
	                            <span>Técnicos</span>
	                        </a>                        
	                    </li>
	                    <li class="nav-parent nav-expanded">
		       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/matrones">
	                            <i class="nav-link" aria-hidden="true"></i>
	                            <span>Matrones</span>
	                        </a>                        
	                    </li>
                    @endif
                    <li class="nav-parent nav-expanded">
	       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/PAP3">
                            <i class="nav-link" aria-hidden="true"></i>
                            <span>PAP 3 Años</span>
                        </a>                        
                    </li>
                    <li class="nav-parent nav-expanded">
	       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/PAP1">
                            <i class="nav-link" aria-hidden="true"></i>
                            <span>PAP 1 Año</span>
                        </a>                        
                    </li>
                    <li class="nav-parent nav-expanded">
	       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/EFM3">
                            <i class="nav-link" aria-hidden="true"></i>
                            <span>EFM 3 Años</span>
                        </a>                        
                    </li>
                    <li class="nav-parent nav-expanded">
	       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/EFM1">
                            <i class="nav-link" aria-hidden="true"></i>
                            <span>EFM 1 Año</span>
                        </a>                        
                    </li>
                    <li class="nav-parent nav-expanded">
	       				<a class="nav-link" href="/{{Auth::user()->rol->name}}/mamografia">
                            <i class="nav-link" aria-hidden="true"></i>
                            <span>Mamografía</span>
                        </a>                        
                    </li>
                    <li class="nav-parent nav-expanded">
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
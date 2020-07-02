@extends('dgr::layouts.master')
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Pagina</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ asset('dgr') }}">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Inicio</span></li>
                <li><span>Portal</span></li>
                <li><span>Pagina Portal</span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                    </div>
                    <h2 class="card-title">Portal Pagina</h2>
                </header>
                <div class="card-body">
                    {!!Form::open(['route' => ['pagina.update',$portal_pagina->id], 'method' => 'PUT'])!!}
                    <div class="form-group">
                        <label for="">Ttulo</label>
                        {!! Form::text('titulo',$portal_pagina->titulo,['class'=>"form-control", 'placeholder'=>"Ingrese texto..."])!!}
                    </div>
                    <div class="form-group">
                        <label for="">Sub-Titulo</label>
                         {!! Form::text('sub_titulo',$portal_pagina->sub_titulo,['class'=>"form-control", 'placeholder'=>"Ingrese Sub-Titulo..."])!!}
                    </div>
                     <div class="form-group">
                        <label for="">Mostrar Titulos</label>
                        <p>
                            @if($portal_pagina->titulos==1)
                            {!!Form::checkbox('titulos', '1', true);!!}
                            @else
                            {!!Form::checkbox('titulos', '1', false);!!}
                            @endif
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="">Mostrar Menu</label>
                        <p>
                            @if($portal_pagina->menu==1)
                            {!!Form::checkbox('menu', '1', true);!!}
                            @else
                            {!!Form::checkbox('menu', '1', false);!!}
                            @endif
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="">Mostrar Footer</label>
                        <p>
                            @if($portal_pagina->footer==1)
                            {!!Form::checkbox('footer', '1', true);!!}
                            @else
                            {!!Form::checkbox('footer', '1', false);!!}
                            @endif
                        </p>
                    </div>
          

                    <div class="tabs tabs-dark">
                        <ul class="nav nav-tabs">
                            <li class="nav-item active">
                                <a class="nav-link" href="#html" data-toggle="tab"><i class="fas fa-star"></i> HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#css" data-toggle="tab">CSS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#js" data-toggle="tab">JS</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="html" class="tab-pane active">
                                <textarea rows="2" class="form-control" id="codemirror_html_code" name="body" data-plugin-codemirror data-plugin-options='{ "mode": "text/html" }'>{{$portal_pagina->body}}</textarea>
                            </div>
                            <div id="css" class="tab-pane">
                                <textarea rows="2" class="form-control" id="codemirror_css_code" name="css" data-plugin-codemirror data-plugin-options='{ "mode": "text/css" }'>{{$portal_pagina->css}}</textarea>
                            </div>
                            <div id="js" class="tab-pane">
                                <textarea class="form-control" rows="2" id="codemirror_js_code" name="js" data-plugin-codemirror data-plugin-options='{ "mode": "text/javascript" }'>{{$portal_pagina->js}}</textarea>
                            </div>
                        </div>
                    </div>
                <div class="form-group">
                   <button class="btn btn-primary">Actualizar</button>
                </div>

                {!!Form::close()!!}

                </div>
            </section>
        </div>
    </div>
</section>
@stop
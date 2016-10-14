@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Recursos Humanos</a>
                </li>
                <li>@yield('seccion')</li>
            </ul>

        </div>
        <div class="col-md-3">
            <div class="panel panel-default sidebar-menu">

                <div class="panel-heading">
                    <h3 class="panel-title">Menu</h3>
                </div>

                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="{{ url('/recursoshumanos/recibos') }}">Recibos</a>
                        </li>
                        <li>
                            <a href="{{ url('/recursoshumanos/documentos') }}">Documentos de Interés</a>
                        </li>
                    <!--<li>
                            <a href="{{ url('/recursoshumanos/vacaciones') }}">Vacaciones</a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9" data-animate="fadeInDown">
            <div class="box" id="contact">
                <h1>Documentos de Interés</h1>
                <p class="text-muted">Descripción de Puestos <a href="{{ asset('archivos/empresa/DESCRIPCION DE PUESTOS.doc') }}" download>Descargar</a>.</p>
                <p class="text-muted">Formato de Aceptación SGMM <a href="{{ asset('archivos/empresa/FORMATO ACEPTACION SGMM.doc') }}" download>Descargar</a>.</p>
                <p class="text-muted">Formatos RRHH <a href="{{ asset('archivos/empresa/FORMATOS RRHH.xlsm') }}" download>Descargar</a>.</p>
                <p class="text-muted">Política de Autos Utilitarios <a href="{{ asset('archivos/empresa/POLITICA DE AUTOS UTILITARIOS.pdf') }}" download>Descargar</a>.</p>
                <p class="text-muted">Política de Código de Conducta Ética <a href="{{ asset('archivos/empresa/PoliticadeCodigodeConductaEtica.pdf') }}" download>Descargar</a>.</p>
                <p class="text-muted">Seguro de Vida <a href="{{ asset('archivos/empresa/SEGURO DE VIDA.pdf') }}" download>Descargar</a>.</p>
            </div>
        </div>
@endsection
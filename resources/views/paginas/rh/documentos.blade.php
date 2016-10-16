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
        <section class="videobg clearfix text-center" style="position: relative;">
            <a id="volume" onclick="$('#bgndVideo').toggleVolume()"><i class="fa fa-volume-down"></i></a>
            <a id="bgndVideo" class="player mb_YTVPlayer" data-property="{videoURL:'http://www.youtube.com/watch?v=W7Las-MJnJo',containment:'body',autoPlay:true, mute:true, startAt:33, opacity:1}" style="display: none; background: none;">youtube</a>
            <div class="videobg-wrap">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <ul class="nav nav-tabs nav-stacked">
                        <li>
                            <a href="{{ url('/recursoshumanos/recibos') }}">Recibos</a>
                        </li>
                        <li class="active">
                            <a href="{{ url('/recursoshumanos/documentos') }}">Documentos de Interés</a>
                        </li>
                        <!--<li>
                            <a href="{{ url('/recursoshumanos/vacaciones') }}">Vacaciones</a>
                        </li>-->
                    </ul>
                </div>
                <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1>Documentos de Interés</h1>
                    <hr>
                    <p class="text-muted text-left">Descripción de Puestos <a href="{{ asset('archivos/empresa/DESCRIPCION DE PUESTOS.doc') }}" download>Descargar</a>.</p>
                    <p class="text-muted text-left">Formato de Aceptación SGMM <a href="{{ asset('archivos/empresa/FORMATO ACEPTACION SGMM.doc') }}" download>Descargar</a>.</p>
                    <p class="text-muted text-left">Formatos RRHH <a href="{{ asset('archivos/empresa/FORMATOS RRHH.xlsm') }}" download>Descargar</a>.</p>
                    <p class="text-muted text-left">Política de Autos Utilitarios <a href="{{ asset('archivos/empresa/POLITICA DE AUTOS UTILITARIOS.pdf') }}" download>Descargar</a>.</p>
                    <p class="text-muted text-left">Política de Código de Conducta Ética <a href="{{ asset('archivos/empresa/PoliticadeCodigodeConductaEtica.pdf') }}" download>Descargar</a>.</p>
                    <p class="text-muted text-left">Seguro de Vida <a href="{{ asset('archivos/empresa/SEGURO DE VIDA.pdf') }}" download>Descargar</a>.</p>
                </div>
            </div>
        </section>
    </div>
@endsection
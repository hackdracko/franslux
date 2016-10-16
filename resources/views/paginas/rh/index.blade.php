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
                        <li>
                            <a href="{{ url('/recursoshumanos/documentos') }}">Documentos de Interés</a>
                        </li>
                        <!--<li>
                            <a href="{{ url('/recursoshumanos/vacaciones') }}">Vacaciones</a>
                        </li>-->
                    </ul>
                </div>
                <div class="container">
                    <h1>Recursos Humanos</h1>
                    <p>En esta sección podras consultar tus recibos de nómina asi como consultar y solicitar vacaciones</p>
                </div>
            </div>
        </section>
    </div>
@endsection
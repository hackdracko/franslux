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
                            <a href="{{ url('/recursoshumanos/vacaciones') }}">Vacaciones</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="box" id="contact">
                <h1>Recursos Humanos</h1>
                <p>En esta sección podras consultar tus recibos de nómina asi como consultar y solicitar vacaciones</p>
            </div>
        </div>
@endsection
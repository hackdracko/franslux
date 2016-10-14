@extends('layouts.master')
@section('content')
    <style type="text/css">
        iframe{overflow-x: scroll; overflow-y: scroll }
    </style>
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Recursos Humanos</a>
                </li>
                <li>Recibos</li>
            </ul>

        </div>
        <div class="col-md-12">
            <div class="panel panel-default sidebar-menu">

                <div class="panel-heading">
                    <h3 class="panel-title">Menu</h3>
                </div>

                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="{{ url('/recursoshumanos/recibos') }}">Recibos</a>
                        </li>
                        <!--<li>
                            <a href="{{ url('/recursoshumanos/vacaciones') }}">Vacaciones</a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12" data-animate="fadeInDown">
            <div class="box" id="contact">
                <h1>Recibos</h1>
                <iframe src="http://apps.rfacil.com/CONSULTANOMINA_FRANSLUX/Public/IniciaAutoFacturacion.aspx?ReturnUrl=%2fCONSULTANOMINA_FRANSLUX" width="100%" height="600" id="frameDemo"></iframe>
                <!-- <table class="table table-responsive table-hover">
                    <thead>
                        <th class="table-text text-center">ID</th>
                        <th class="table-text text-center">Fecha del Recibo</th>
                        <th class="table-text text-center">Observaciones</th>
                        <th class="table-text text-center">Archivo(s)</th>
                        <th class="table-text text-center">Fecha de Carga</th>
                    </thead>
                    <tbody>
                    @foreach ($recibos as $recibo)
                        <tr>
                            <td class="table-text text-center">{{ $recibo->id }}</td>
                            <td class="table-text text-center">{{ $recibo->fechaRecibo }}</td>
                            <td class="table-text text-center">{{ $recibo->observacion }}</td>
                            <td class="table-text text-center">
                                @foreach($recibo->documentos as $documento)
                                    <a href="{{ asset('archivos/recibos/'.$documento->ruta) }}" target="_blank" download>{{ $documento->ruta }}</a>
                                    </br>
                                @endforeach
                            </td>
                            <td class="table-text text-center">{{ $recibo->created_at }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>-->
            </div>
        </div>
@endsection
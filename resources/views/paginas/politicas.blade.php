@extends('layouts.master')
@section('content')
    <div class="col-md-12">

        <ul class="breadcrumb">
            <li><a href="#">Políticas y Procedimientos</a>
            </li>
            <li>Nuestras Políticas/Código de Ética</li>
        </ul>

    </div>

    <section class="section2">
        <div class="message text-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="big-title">Nuestras Políticas</h2>
                <p class="small-title">Nuestro Código de Conducta Ética, busca dar lineamiento a los miembros del Consejo de Administración, los
                    directivos, colaboradores y personal que desempeña algún cargo dentro de FRANSLUX, para que cumplan de
                    manera obligatoria con todas las leyes aplicables, reglas y reglamentos así como con las políticas y estándares de
                    calidad de FRANSLUX. La observancia de éste Código de Conducta Ética es también obligatoria para las empresas
                    que prestan servicios a FRANSLUX, así como a proveedores.
                    <p class="text-muted text-center">Política de Autos Utilitarios <a href="{{ asset('archivos/empresa/POLITICA DE AUTOS UTILITARIOS.pdf') }}" download>Descargar</a>.</p>
                    <p class="text-muted text-center">Política de Código de Conducta Ética <a href="{{ asset('archivos/empresa/PoliticadeCodigodeConductaEtica.pdf') }}" download>Descargar</a>.</p>
                    <hr>
                    <embed src="{{ asset('archivos/empresa/PoliticadeCodigodeConductaEtica.pdf') }}" width="800px" height="800px" />
                </p>
            </div>
        </div><!-- end message -->
    </section><!-- end section2 -->
@endsection
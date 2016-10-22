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
                    <p class="text-muted text-center">Política de Autos Utilitarios <a href="{{ asset('archivos/empresa/POLITICA DE AUTOS UTILITARIOS.pdf') }}" download>Descargar</a>.</p>
                    <p class="text-muted text-center">Política de Código de Conducta Ética <a href="{{ asset('archivos/empresa/PoliticadeCodigodeConductaEtica.pdf') }}" download>Descargar</a>.</p>
                    <!-- <embed src="{{ asset('archivos/empresa/PoliticadeCodigodeConductaEtica.pdf') }}" width="800px" height="800px" /> -->
                </p>
            </div>
        </div><!-- end message -->
    </section><!-- end section2 -->
@endsection
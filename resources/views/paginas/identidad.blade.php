@extends('layouts.master')
    @section('content')
        <div class="container">

            <div class="col-md-12">

                <ul class="breadcrumb">
                    <li><a href="#">Identidad Coorporativa</a>
                    </li>
                    <li>Misión/Visión</li>
                </ul>

            </div>

            <div class="col-md-6" data-animate="fadeInDown">
                <div class="box">
                    <h1>Nuestra Misión</h1>
                    <p>Proveer marcas que generen valor para la vida de los consumidores. Ellos nos recompensan con liderazgo en ventas y utilidades, llevando con esto a que nuestra gente, y comunidades prosperen.</p>

                    <hr>

                </div>
            </div>

            <div class="col-md-6" data-animate="fadeInDown">
                <div class="box">
                    <h1>Nuestra Visión</h1>
                    <p>Ser creadores de marcas innovadoras, y un sinónimo en la industria de elegancia y responsabilidad ética</p>
                    <hr>
                </div>
            </div>

            <div class="col-md-12" data-animate="fadeInDown">
                <div class="box">
                    <h1>Logo</h1>

                    <p class="lead">Not our registered customer yet?</p>
                    <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                    <p class="text-muted">Descarga el archivo <a href="{{ asset('archivos/empresa/test.txt') }}" download>Franslux</a>.</p>

                    <hr>
                </div>
            </div>


        </div>
        <!-- /.container -->
    @endsection
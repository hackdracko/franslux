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
                    <hr>
                    <embed src="{{ asset('archivos/empresa/PoliticadeCodigodeConductaEtica.pdf') }}" width="800px" height="800px" />
                </p>
            </div>
        </div><!-- end message -->
    </section><!-- end section2 -->
    <section class="transparent clearfix">
        <div class="transparent-wrap">
            <div class="container">
                <h1>Denuncias al código de ética</h1>

                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">Nombre del empleado</label>
                                <input type="text" class="form-control" id="firstname">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Email</label>
                                <input type="text" class="form-control" id="lastname">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="subject">Asunto</label>
                                <input type="text" class="form-control" id="subject">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">Mensaje</label>
                                <textarea id="message" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar Mensaje</button>

                        </div>
                    </div>
                    <!-- /.row -->
                </form>

            </div> <!-- end clients wrap -->
        </div><!-- end container -->
    </section><!-- end of clients -->
@endsection
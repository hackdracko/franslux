@extends('layouts.master')
@section('content')
    <div class="col-md-12">

        <ul class="breadcrumb">
            <li><a href="#">Comunicación a la fuerza de ventas</a>
            </li>
            <li>Nuestras Políticas/Código de Ética</li>
        </ul>

    </div>

    <section class="transparent2 clearfix">
        <div class="transparent-wrap">
            <div class="container">
                <h1>Comunicación a la fuerza de ventas</h1>

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
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">Adjuntar Archivo</label>
                                <input type="file" cla multiple>
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
@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Políticas y Procedimientos</a>
                </li>
                <li>Nuestras Políticas/Código de Ética</li>
            </ul>

        </div>

        <div class="col-md-12" data-animate="fadeInDown">
            <div class="box">
                <h1>Nuestras Políticas</h1>

                <p class="lead">Not our registered customer yet?</p>
                <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                <hr>

            </div>
        </div>

        <div class="col-md-12" data-animate="fadeInDown">
            <div class="box">
                <h1>Procedimientos</h1>

                <p class="lead">Not our registered customer yet?</p>
                <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                <hr>

            </div>

        </div>


        <div class="col-md-8 col-lg-offset-2" data-animate="fadeInDown">
            <div class="box" id="contact">
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


                </div>
        </div>
            <!-- /.col-md-9 -->
    <!-- /.container -->
@endsection
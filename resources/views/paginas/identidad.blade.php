@extends('layouts.master')
    @section('content')
        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Identidad Coorporativa</a>
                </li>
                <li>Misión/Visión</li>
            </ul>

        </div>
        <section class="slideshow-wrapper">
            <div id="slider-wrapper">
                <div id="layerslider" style="width:100%;height:550px;">
                    <div class="ls-slide" data-ls="slidedelay:8000;transition2d:75,79;">
                        <img src="demos/mbg1.jpg" class="ls-bg" alt="Slide background"/>

                    </div><!-- end first slide -->
                </div><!-- layer slider -->
            </div><!-- slider wrapper -->
        </section><!-- end slideshow-wrapper -->

        <section class="section2">
            <div class="message text-center">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <img src="{{ asset('images/ventas1.jpg') }}" alt="" class="img-responsive">
                </div><!-- large-3 -->
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <h2 class="big-title">Nuestra Misión</h2>
                    <p class="small-title">Proveer marcas que generen valor para la vida de los consumidores. Ellos nos recompensan con liderazgo en ventas y utilidades, llevando con esto a que nuestra gente, y comunidades prosperen.</p>
                </div>
            </div><!-- end message -->
        </section><!-- end section2 -->
        <section class="transparent clearfix">
            <div class="transparent-wrap">
                <div class="container">
                    <div class="general-title text-center">
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <h2>NUESTRA VISIÓN</h2>
                            <p>SER CREADORES DE MARCAS INNOVADORAS, Y UN SINÓNIMO EN LA INDUSTRIA DE ELEGANCIA Y RESPONSABILIDAD ÉTICA</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="servicebox text-center">
                                <img src="{{ asset('images/ventas2.jpg') }}" alt="">
                            </div><!-- large-3 -->
                        </div>
                    </div><!-- end message -->
                </div> <!-- end clients wrap -->
            </div><!-- end container -->
        </section><!-- end of clients -->
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
@extends('welcome')
@section('css')
<link rel="stylesheet" href="\assets\css\bootstrap.min.css">
<link rel="stylesheet" href="\assets\css\flaticon.css">
<link rel="stylesheet" href="\assets\css\animate.min.css">
<link rel="stylesheet" href="\assets\css\owl.carousel.min.css">
<link rel="stylesheet" href="\assets\css\boxicons.min.css">
<link rel="stylesheet" href="\assets\css\meanmenu.min.css">
<link rel="stylesheet" href="\assets\css\nice-select.min.css">
<link rel="stylesheet" href="\assets\css\fancybox.min.css">
<link rel="stylesheet" href="\assets\css\odometer.min.css">
<link rel="stylesheet" href="\assets\css\magnific-popup.min.css">
<link rel="stylesheet" href="\assets\css\style.css">
<link rel="stylesheet" href="\assets\css\responsive.css">
@stop
@section('contenido')

<section class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="back-icon">
                        <i class='bx bx-map'></i>
                    </div>
                    <div class="icon">
                        <i class='bx bx-map'></i>
                    </div>
                    <h3>Direccion de los locales</h3>
                    <p>Paseo de los volcanes# 127 col. Las reynas</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="back-icon">
                        <i class='bx bx-phone-call'></i>
                    </div>
                    <div class="icon">
                        <i class='bx bx-phone-call'></i>
                    </div>
                    <h3>Información de contacto</h3>
                    <p>Teléfono: <a href="tel:+44457895789">464-112-4092</a></p>
                    <p>Teléfono: <a href="tel:+44457895789">443-111-1547</a></p>
                    <p>Teléfono: <a href="tel:+44457895789">415-144-1241</a></p>
                    <p>Teléfono: <a href="tel:+44457895789">464-169-8106</a></p>
                    <p>Correo: <a href="mailto:hello@dibiz.com">info@jdevs.com.mx</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="contact-info-box">
                    <div class="back-icon">
                        <i class='bx bx-time-five'></i>
                    </div>
                    <div class="icon">
                        <i class='bx bx-time-five'></i>
                    </div>
                    <h3>Horario</h3>
                    <p>Lunes - Sábado: 09:00 am - 3:00 pm</p>
                    <p>Lunes - Sábado: 16:00 pm - 19:00 pm</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Area -->

<!-- Start Contact Area -->
<section class="contact-area pb-100">
    <div class="container">
        <div class="section-title">
            <!--<span class="sub-title">¿TIENES ALGUNA DUDA?</span>-->
            <h2>Realiza tu cotización<span class="overlay"></span></h2>
            <p>QUEREMOS CONOCER TU PROYECTO, NO DUDES EN LLAMARNOS.</p>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact-image" data-tilt="">
                    <img src="assets\img\contact.png" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nombre" class="form-control" id="nombre" required="" data-error="Porfavor ingrese su nombre completo" placeholder="Nombre completo">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="correo" class="form-control" id="correo" required="" data-error="Porfavor ingrese un correo" placeholder="E-mail">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="empresa" class="form-control" id="empresa" required="" data-error="Porfavor ingrese nombre de la empresa" placeholder="Nombre completo de la empresa">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="telefono" class="form-control" id="telefono" required="" data-error="Porfavor ingrese numero telefonico" placeholder="Número telefonico">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <!--<input type="text" name="telefono" class="form-control" id="telefono" required="" data-error="Porfavor ingrese numero telefonico" placeholder="Número telefonico">-->

                                    <select class="form-control" required="" name="servicio" id="servicio">
                                        <option>Seleccione algún Servicio</option>
                                        <option value="Desarrollo web">Desarrollo web</option>
                                        <option value="Desarrollo móvil">Desarrollo móvil</option>
                                        <option value="Desarrollo de escritorio">Desarrollo de escritorio</option>
                                        <option value="Ensamblado">Ensamblado</option>
                                        <option value="Análisis y reparación de equipo de cómputo">Análisis y reparación de equipo de cómputo</option>
                                        <option value="Asistencia remota">Asistencia remota</option>
                                        <option value="Videovigilancia CCTV">Videovigilancia CCTV</option>
                                        <option value="Instalación de alarmas">Instalación de alarmas</option>
                                        <option value="Instalación de red de computadoras">Instalación de red de computadoras</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="6" required="" data-error="Porfavor ingrese la descripcion" placeholder="Descripcion del proyecto"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Consultar</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Start Map Area -->
<div id="map">
    <iframe frameborder="0" style="border:0; height:350px; width:100%; " src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDEdsq6YzeLi6-XTHgI5c5hTkN9C68ZCrc&q=place_id:ChIJV6DSkdmELIQRIL2TDZmP5I4" allowfullscreen=""></iframe>
</div>
@section('scripts')
<script src="\assets\js\jquery.min.js"></script>
<script src="\assets\js\popper.min.js"></script>
<script src="\assets\js\bootstrap.min.js"></script>
<script src="\assets\js\appear.min.js"></script>
<script src="\assets\js\odometer.min.js"></script>
<script src="\assets\js\magnific-popup.min.js"></script>
<script src="\assets\js\fancybox.min.js"></script>
<script src="\assets\js\owl.carousel.min.js"></script>
<script src="\assets\js\meanmenu.min.js"></script>
<script src="\assets\js\nice-select.min.js"></script>
<script src="\assets\js\sticky-sidebar.min.js"></script>
<script src="\assets\js\wow.min.js"></script>
<script src="\assets\js\form-validator.min.js"></script>
<script src="\assets\js\contact-form-script.js"></script>
<script src="\assets\js\ajaxchimp.min.js"></script>
<script src="\assets\js\main.js"></script>
@stop
@stop

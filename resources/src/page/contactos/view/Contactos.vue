<template>
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(assets/img/banner/10.jpg);">
        <div class="breadcrum-shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Contáctenos</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Inicio</a></li>
                        <li>Contacto</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Us
    ============================================= -->
    <div class="contact-style-one-area overflow-hidden default-padding">

        <div class="contact-shape">
        </div>

      <div class="container">
    <div class="row align-center">

        <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-20">

            <div class="contact-style-one-info">
                <h2>Información de Contacto</h2>
                <p>
                    Cualquier pregunta, comentario o sugerencia estamos listos para ayudarles inmediatamente.
                </p>
                <ul>
                    <li class="wow fadeInUp">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Línea Directa</h5>
                            <a href=""></a>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="300ms">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info">
                            <h5 class="title">Nuestra Ubicación</h5>
                            <p>
                               Peru <br>
                            </p>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div class="info">
                            <h5 class="title">Correo Electrónico Oficial</h5>
                            <a href="mailto:"></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
            <div class="contact-form-style-one">
                <h5 class="sub-title">¿Tienes Preguntas?</h5>
                <h2 class="heading">Envíanos un Mensaje</h2>
                <form action="assets/mail/contact.php" method="POST" class="contact-form contact-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" placeholder="Nombre" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" placeholder="Correo Electrónico*" type="email">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" id="phone" name="phone" placeholder="Teléfono" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group comments">
                                <textarea class="form-control" id="comments" name="comments" placeholder="Cuéntanos Sobre el Proyecto *"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" name="submit" id="submit" class="btn btn-info">
                                <i class="fa fa-paper-plane"></i> Ponerse en Contacto
                            </button>
                        </div>
                    </div>
                    <!-- Mensaje de Alerta -->
                    <div class="col-lg-12 alert-notification">
                        <div id="message" class="alert-msg"></div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

    </div>
    <!-- End Contact -->

    <!-- Iniciar Mapa
    ============================================= -->
<div class="maps-area bg-gray overflow-hidden">
    <div class="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1592.1103222069632!2d-78.47670137137489!3d-0.1805252373866056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91c90e60d095cde7%3A0x6d78393336b4f4bf!2sQuito%2C%20Ecuador!5e0!3m2!1sen!2sus!4v1653598669477!5m2!1sen!2sus"></iframe>
    </div>
</div>

  </template>
  <script src="./Contactos.ts"></script>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Landing SofGem</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/fonts/icomoon/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/aos.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/style.css">
        <link rel="icon" href="<?php echo base_url(); ?>framework/imagenes/icon_sofgem.png" sizes="32x32" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>framework/toast/toastr.min.css"/>
        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '243397033678264');
            fbq('track', 'PageView');
        </script>
        <noscript>
    <img height="1" width="1" 
         src="https://www.facebook.com/tr?id=243397033678264&ev=PageView
         &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <style>
        .zoom {
            transition: transform .2s; /* Animation */
        }

        .zoom:hover {
            transform: scale(1.25); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }

        .borde_card_panel{
            border:2px solid white;  
        }

        .opa-hover {
            -webkit-transition: opacity 1s ease-in-out;
            -moz-transition: opacity 1s ease-in-out;
            -ms-transition: opacity 1s ease-in-out;
            -o-transition: opacity 1s ease-in-out;
            transition: opacity 1s ease-in-out;
            opacity: 1;
        }

        .opa-hover:hover {
            opacity: 0.80;
        }
    </style>
</head>
<body>
    <!-- Modal -->
    <div id="modal_contacto" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body borde_card_panel" style="background-image: url(<?php echo base_url(); ?>framework/imagenes/confianza.jpg);" data-aos="fade">
                    <form  class="p-5">
                        <h4 class="text-white mb-5" style="text-align: justify">¡Complete los siguientes datos y nos contactaremos contigo!</h4> 
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-white" for="nombre_invitado_2">Nombre completo u empresa:</label>
                                <input type="text" id="nombre_invitado_2" class="form-control" style="border-color: #8bc34a" maxlength="50">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-white" for="correo_invitado_2">Correo:</label> 
                                <input type="text" id="correo_invitado_2" class="form-control" style="border-color: #8bc34a" maxlength="50">
                            </div>
                        </div>
                        <br>
                        <div class="row form-group" style="text-align: center">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success btn-md text-white" id="boton_invitado_2">Enviar</button>
                                <br><br>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-light btn-md text-black" data-dismiss="modal" id="salir">Salir</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <div class="border-bottom top-bar py-2 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12" style="color: #616161">
                        <p class="mb-0" style="text-align: center">
                            <strong> + 56 7 1268 4183 + 56 9 5258 5632</strong>
                            <br>
                            <strong> soporte@sofgem.cl  contacto@sofgem.cl  mrodriguez@sofgem.cl</strong>
                        </p>
                    </div>
                </div>
            </div> 
        </div>
        <header class="py-4" style="background: #333333">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <img src="<?php echo base_url(); ?>framework/imagenes/sofgem.png" alt="Image" width="165" height="42.5" class="rounded mx-auto d-block">
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="site-blocks-cover overlay" style="background-image: url(<?php echo base_url(); ?>framework/imagenes/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

                    <div class="row justify-content-center mb-4">
                        <div class="col-md-8 text-center">
                            <h1>Ofrecemos <span class="typed-words"></span></h1>
                            <p class="lead mb-5" style="color: white"><b>¡Toma el control de tu empresa!</b></p>
                            <div><a href="#" class="btn btn-success btn-md" data-toggle="modal" data-target="#modal_contacto"  style="color: white"><b>Solícita tú descuento</b></a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>  
    <section class="section ft-feature-1">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-12 w-100 ft-feature-1-content" style="background: #333333">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="h-100">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YgJ955zj7wM" allowfullscreen></iframe>
                                </div>
                                <br>
                                <h3 style="text-align: center"><span>¡Descubre nuestros servicios que tenemos para ti!</span></h3>
                                <br>
                            </div>
                        </div>

                        <div class="col-lg-3 ml-auto">
                            <div class="">
                                <h3 class="d-flex align-items-center"><span class="icon icon-question_answer mr-2"></span><span>Ventas Ticket</span></h3>
                                <p>Realiza ventas de forma rapida y con todas las opciones que exige el mercado.</p>
                            </div>
                            <div>
                                <h3 class="d-flex align-items-center"><span class="icon icon-heart mr-2"></span><span>Documentos</span></h3>
                                <p>Factura tus guías en el momento que desees de manera eficaz.</p>
                            </div>
                            <div>
                                <h3 class="d-flex align-items-center"><span class="icon icon-extension mr-2"></span><span>Inventario</span></h3>
                                <p>Genera inventarios y correcciones de stock de forma ordenada.</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="">
                                <h3 class="d-flex align-items-center"><span class="icon icon-shopping_cart mr-2"></span><span>Compras</span></h3>
                                <p>Ingresa, distribuye y valoriza tu mercaderia ingresando tus facturas.</p>
                            </div>
                            <div>
                                <h3 class="d-flex align-items-center"><span class="icon icon-phone mr-2"></span><span>Importaciones</span></h3>
                                <p>¿Importas productos?. Ingresa todas tus importaciones.</p>
                            </div>
                            <div>
                                <h3 class="d-flex align-items-center"><span class="icon icon-phonelink mr-2"></span><span>Caja</span></h3>
                                <p>Rápida forma de pago con distintos medios asociados sin importar las condiciones.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="site-section">
        <div class="container">
            <div class="row" style="text-align: justify">
                <div class="col-md-6 col-lg-4">
                    <div class="p-3 box-with-humber">
                        <div class="number-behind">01.</div>
                        <h2 style="text-align: center">Soporte Telefónico</h2>
                        <p>Nos cercioramos que sepa utilizar correctamente nuestro software para que pueda realizar sus actividades sin problemas.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-3 box-with-humber">
                        <div class="number-behind">02.</div>
                        <h2 style="text-align: center">Capacitación</h2>
                        <p>Contamos con personal capacitado y atento para aclarar sus dudas y resolver sus problemas técnicos de manera eficaz.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-3 box-with-humber">
                        <div class="number-behind">03.</div>
                        <h2 style="text-align: center">Soporte en Terreno</h2>
                        <p>Si desea contratar o necesita ayuda, programamos una visita a terreno para atenderlo como usted merece para atender sus necesidades.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="https://www.sofgem.cl/" class="py-5 d-block opa-hover" style="background: #8bc34a">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md10"><h2 class="text-white" style="text-align: center">¡Visita nuestra página!</h2></div>
            </div>
        </div>  
    </a>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4" style="text-align: center">
                            <h2 class="footer-heading mb-4">Nosotros</h2>
                            <p style="text-align: justify">Queremos contribuir con soluciones innovadoras a las pequeñas, medianas y grandes empresas de nuestro país, para que puedan gestionar eficientemente sus negocios.</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <h2 class="footer-heading mb-4">Síguenos</h2>
                            <p>
                                <a href="https://www.facebook.com/Sofgem/?modal=admin_todo_tour" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                                <a href="https://www.instagram.com/sofgem_chile/?hl=es-la" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="https://twitter.com/sofgem?lang=es" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h2 class="footer-heading mb-4" style="text-align: center">Suscríbete</h2>
                            <form action="#" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="E-mail:" aria-label="Enter Email" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-success text-white" type="button" id="button-addon2">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p>
                            © Todos los derechos reservados por SofGem
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo base_url(); ?>framework/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>framework/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?php echo base_url(); ?>framework/js/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>framework/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>framework/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>framework/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>framework/js/jquery.stellar.min.js"></script>
    <script src="<?php echo base_url(); ?>framework/js/jquery.countdown.min.js"></script>
    <script src="<?php echo base_url(); ?>framework/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>framework/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>framework/js/aos.js"></script>
    <script src="<?php echo base_url(); ?>framework/js/typed.js"></script>
    <script src="<?php echo base_url(); ?>framework/toast/toastr.min.js"></script>
    <script src="<?php echo base_url(); ?>framework/js/custom.js"></script>

    <script>
            var typed = new Typed('.typed-words', {
                strings: [" Boletas Electrónicas sin límites de emisión.", " 2 puntos de ventas.", " 1 licencia gratuita.", " informes en tiempo real.", " y mucho más."],
                typeSpeed: 65,
                backSpeed: 65,
                backDelay: 4000,
                startDelay: 1000,
                loop: true,
                showCursor: true
            });

            $("#salir").click(function (excepcion) {
                excepcion.preventDefault();
                $('#nombre_invitado_2').val("");
                $('#correo_invitado_2').val("");
            });
    </script>
    <script src="<?php echo base_url(); ?>framework/js/main.js"></script>
</body>
</html>
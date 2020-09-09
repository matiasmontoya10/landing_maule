<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>framework/css/modaltop.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>framework/css/personalizado.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>framework/css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="icon" href="<?php echo base_url(); ?>framework/imagenes/iconos/maule.png" sizes="32x32" />
        <title>Maule Seguro</title>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>framework/js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>framework/js/custom.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.0/animate.min.css" rel="stylesheet">
        <link href="https://hooks.slack.com/services/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">

        <!-- EFECTO CSS IMAGEN -->
        <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>efecto/css/default.css" />-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>efecto/css/component.css" />
        <script src="<?php echo base_url(); ?>efecto/js/modernizr.custom.js"></script>
        <script type="text/javascript">
            (function () {
                var options = {
                    whatsapp: "+56(9)44354672",
                    call_to_action: "¡Escríbenos!",
                    position: "right"
                };
                var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () {
                    WhWidgetSendButton.init(host, proto, options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            })();
        </script>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>framework/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>framework/slick/slick-theme.css"/>

<!--        <script type="text/javascript">
            window._chatlio = window._chatlio || [];
            !function () {
                var t = document.getElementById("chatlio-widget-embed");
                if (t && window.ChatlioReact && _chatlio.init)
                    return void _chatlio.init(t, ChatlioReact);
                for (var e = function (t) {
                    return function () {
                        _chatlio.push([t].concat(arguments))
                    }
                }, i = ["configure", "identify", "track", "show", "hide", "isShown", "isOnline", "page", "open", "showOrHide"], a = 0; a < i.length; a++)
                    _chatlio[i[a]] || (_chatlio[i[a]] = e(i[a]));
                var n = document.createElement("script"), c = document.getElementsByTagName("script")[0];
                n.id = "chatlio-widget-embed", n.src = "https://w.chatlio.com/w.chatlio-widget.js", n.async = !0, n.setAttribute("data-embed-version", "2.3");
                n.setAttribute('data-widget-id', '7b52cfa9-a659-4c72-443c-f7c31b4124cc');
                c.parentNode.insertBefore(n, c);
            }();
        </script>-->
        
    </head>
    <!--    <div class="preloader-wrapper big active" id="circulo">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>-->
    <body class="">
        <header class="" id="contenido_header">
            <div id="modal_iniciar_sesion" class="modal z-depth-0 grey lighten-4 borde_card_panel_naranjo">
                <div class="modal-content">
                    <div class="row">
                        <div class="input-field">
                            <select id="perfil_usuario" class="black-text">
                                <option value="1">Cliente</option>
                                <option value="2">Equipo</option>
                            </select>
                            <label>¿Usuario?</label>
                        </div>
                        <div class="input-field center-align">
                            <button id="boton_perfil_usuario" type="submit" class="waves-effect waves-light btn teal darken-2">
                                Entrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-fixed">
                <nav class="nav">
                    <div class="nav-wrapper red darken-4">
<!--                        <a class="brand-logo center"><img src="<?php echo base_url(); ?>/framework/imagenes/sofgem.png" width="125"></a>-->
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="<?php echo base_url(); ?>welcome/index"><i class="material-icons">home</i></a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/inicio_sesion_general"><i class="material-icons">account_circle</i></a></li>
<!--                            <li><a href="#modal_iniciar_sesion" class="modal-trigger"><i class="material-icons">account_circle</i></a></li>-->
                        </ul>
                    </div>
                </nav>
            </div>
            <ul class="side-nav grey lighten-4 center" id="mobile-demo">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="<?php echo base_url(); ?>framework/imagenes/fondo.jpg" alt="Nature" class="responsive-img">
                        </div>
                        <br>
                        <img class="responsive-img center-block" src="<?php echo base_url(); ?>framework/imagenes/iconos/maule.png" width="125">
                    </div>
                </li>
                <li><a href="<?php echo base_url(); ?>welcome/index">Inicio</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/inicio_sesion_general">Iniciar Sesión</a></li>
                <!--                <li><a href="#modal_iniciar_sesion" class="modal-trigger responsive-img">Iniciar Sesión</a></li>-->
            </ul>
        </header>
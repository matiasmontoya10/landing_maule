<!--ACCESO A LOS ATRIBUTOS DE USUARIO-->
<?php
$usuario = $this->session->userdata("cliente");
$persona_sesion = $this->session->userdata("cliente");
$rut_entidad = $usuario[0]->rut_entidad;
$clave_entidad = $usuario[0]->clave_entidad;
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>framework/css/personalizado.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>framework/css/materialize.min.css"  media="screen,projection"/>
        <!--        <link type="text/css" rel="stylesheet" href="framework/css/modaltop.css"  media="screen,projection"/>-->

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="icon" href="<?php echo base_url(); ?>framework/imagenes/icon_sofgem.png" sizes="32x32" />
        <title>SofGem Talca</title>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>framework/js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>framework/js/custom.js"></script>

        <!--Data Table-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
        <script type="text/javascript"  src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript"  src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript"  src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
        <!--ALERT-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

        <!--RADAR-->
        <script type="text/javascript"  src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
        <script type="text/javascript"  src="https://www.chartjs.org/samples/latest/utils.js"></script>

        <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
        <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
        <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
        <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.0/animate.min.css" rel="stylesheet">

        <style>
            canvas {
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
            }
        </style>

        <script>
            var base_url = "http://localhost/mauleseguro/";
            var rut_entidad_php = '<?php echo $rut_entidad ?>';
            var clave_entidad_php = '<?php echo $clave_entidad ?>';
        </script>
<!--        <script type="text/javascript">
            (function () {
                var options = {
                    whatsapp: "+56(9)83006194",
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
        </script>-->
        <script type="text/javascript">
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
        </script>
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper green darken-2">
                    <a class="brand-logo center"><img src="<?php echo base_url(); ?>/framework/imagenes/sofgem.png" width="100"></a>
                    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="<?php echo base_url(); ?>welcome/cambiar_contrasena">Cambiar Contraseña</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/cerrar_sesion">Cerrar Sesión</a></li>
                    </ul>

                    <ul id="slide-out" class="side-nav fondo_main">
                        <li>
                            <div class="user-view">
                                <div class="background">
                                    <img src="<?php echo base_url(); ?>framework/imagenes/tic_05.jpg" class="responsive-img">
                                </div>
                                <br>
                                <img class="responsive-img center-block" src="<?php echo base_url(); ?>framework/imagenes/sofgem.png" width="120">
                                <br>
                            </div>
                        </li>
                        <li><a href="<?php echo base_url(); ?>welcome/editar_perfil_cliente" class="center black-text">Editar Perfil</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/cambiar_contrasena" class="center black-text">Cambiar Contraseña</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/cerrar_sesion" class="center black-text">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </nav>
        </header>

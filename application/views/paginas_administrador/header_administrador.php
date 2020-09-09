<!--ACCESO A LOS ATRIBUTOS DE USUARIO-->
<?php
$usuario = $this->session->userdata("administrador");
$persona_sesion = $this->session->userdata("administrador");
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
        <!--<link type="text/css" rel="stylesheet" href="framework/css/modaltop.css"  media="screen,projection"/>-->

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
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper red darken-4">
<!--                    <a class="brand-logo center"><img src="<?php echo base_url(); ?>/framework/imagenes/sofgem.png" width="100"></a>-->
                    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="<?php echo base_url(); ?>welcome/cambiar_contrasena">Cambiar Contraseña</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/cerrar_sesion">Cerrar Sesión</a></li>
                    </ul>

                    <ul id="slide-out" class="side-nav grey lighten-4 center">
                        <li>
                            <div class="user-view">
                                <div class="background">
                                    <img src="<?php echo base_url(); ?>framework/imagenes/fondo.jpg" class="responsive-img">
                                </div>
                                <br>
                                <img class="responsive-img center-block" src="<?php echo base_url(); ?>framework/imagenes/iconos/maule.png" width="125">
                            </div>
                        </li>
                        <li><a href="<?php echo base_url(); ?>welcome/administrador" class="center black-text">Listado de Mensajes</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/listado_encuesta" class="center black-text">Listado de Encuestas</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/editar_perfil_administrador" class="center black-text">Editar Perfil</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/cambiar_contrasena" class="center black-text">Cambiar Contraseña</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/cerrar_sesion" class="center black-text">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </nav>
        </header>
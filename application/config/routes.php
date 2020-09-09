<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = 'welcome/error_404';
$route['translate_uri_dashes'] = FALSE;

$route['mensaje_invitado'] = 'welcome/controlador_mensaje_invitado';

//INICIO SESION EQUIPO / CLIENTE

$route['iniciar_sesion_equipo_cliente'] = 'welcome/controlador_iniciar_sesion_equipo_cliente';
$route['tabla_listado_mensaje_contacto'] = 'welcome/controlador_tabla_listado_mensaje_contacto';
$route['boton_comentario_mensaje'] = 'welcome/controlador_boton_comentario_mensaje';
$route['cambiar_clave'] = 'welcome/controlador_cambiar_clave';
$route['editar_usuario'] = 'welcome/controlador_editar_usuario';
$route['encuesta_cliente'] = 'welcome/controlador_encuesta_cliente';
$route['tabla_listado_encuesta'] = 'welcome/controlador_tabla_listado_encuesta';
$route['mensaje_invitado_modal'] = 'welcome/controlador_mensaje_invitado_modal';


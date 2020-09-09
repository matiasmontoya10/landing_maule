<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("modelo");
    }

    public function prueba() {
        $this->load->view('paginas_generales/testing');
    }

    public function index() {
        $this->load->view('paginas_landing/index');
    }

    public function nosotros() {
        $this->load->view('paginas_generales/header_general');
        $this->load->view('paginas_generales/nosotros');
        $this->load->view('paginas_generales/footer_general');
    }

    public function contacto() {
        $this->load->view('paginas_generales/header_general');
        $this->load->view('paginas_generales/contacto');
        $this->load->view('paginas_generales/footer_general');
    }

    public function preguntas_frecuentes() {
        $this->load->view('paginas_generales/header_general');
        $this->load->view('paginas_generales/preguntas_frecuentes');
        $this->load->view('paginas_generales/footer_general');
    }

    public function inicio_sesion_cliente() {
        $this->load->view('paginas_generales/header_general');
        $this->load->view('paginas_generales/iniciar_sesion_cliente');
        $this->load->view('paginas_generales/footer_general');
    }

    public function inicio_sesion_equipo() {
        $this->load->view('paginas_generales/header_general');
        $this->load->view('paginas_generales/iniciar_sesion_equipo');
        $this->load->view('paginas_generales/footer_general');
    }

    public function inicio_sesion_general() {
        $this->load->view('paginas_generales/header_general');
        $this->load->view('paginas_generales/iniciar_sesion_general');
        $this->load->view('paginas_generales/footer_general');
    }

    public function planes() {
        $this->load->view('paginas_generales/header_general');
        $this->load->view('paginas_generales/planes');
        $this->load->view('paginas_generales/footer_general');
    }

    public function error_404() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('paginas_administrador/header_administrador');
            $this->load->view('paginas_administrador/inicio_administrador');
            $this->load->view('paginas_generales/footer_general');
        } else if ($this->session->userdata("cliente")) {
            $this->load->view('paginas_cliente/header_cliente');
            $this->load->view('paginas_cliente/editar_perfil_cliente');
            $this->load->view('paginas_generales/footer_general');
        } else {
            $this->load->view('paginas_generales/header_general');
            $this->load->view('paginas_generales/error_404');
            $this->load->view('paginas_generales/footer_general');
        }
    }

    public function controlador_mensaje_invitado() {
        $nombre_invitado = $this->input->post("nombre_invitado");
        $correo_invitado = $this->input->post("correo_invitado");
        $telefono_invitado = $this->input->post("telefono_invitado");
        $mensaje_invitado = $this->input->post("mensaje_invitado");
        $fecha_hora_invitado_mensaje = date("Y-m-d H:i:s");

        $this->controlador_email($nombre_invitado, $correo_invitado, $telefono_invitado, $mensaje_invitado);

        if ($this->modelo->modelo_mensaje_invitado($nombre_invitado, $correo_invitado, $telefono_invitado, $mensaje_invitado, $fecha_hora_invitado_mensaje)) {
            echo json_encode(array("resultado" => "¡Datos enviados!"));
        } else {
            echo json_encode(array("resultado" => "¡Error 500!"));
        }
    }

    public function cerrar_sesion() {
        $this->session->sess_destroy();
        redirect("welcome/index");
    }

    public function controlador_iniciar_sesion_equipo_cliente() {
        $nombre_usuario = $this->input->post('nombre_usuario');
        $clave_usuario = $this->input->post('clave_usuario');
//        $perfil_usuario = $this->input->post('perfil_usuario');

        $usuario_equipo = $this->modelo->modelo_iniciar_sesion_equipo($nombre_usuario, md5($clave_usuario));
        $sesion_equipo = $this->modelo->modelo_entidad_sesion_equipo($nombre_usuario);

        if (count($usuario_equipo) > 0 && $usuario_equipo[0]->estado_usuario == 1) {
            if ($usuario_equipo[0]->id_perfil == 1) {
                $this->session->set_userdata("administrador", $usuario_equipo);
                $this->session->set_userdata("administrador", $sesion_equipo);
                echo json_encode(array("mensaje" => "welcome/administrador"));
            }
            if ($usuario_equipo[0]->id_perfil == 2) {
                $this->session->set_userdata("cliente", $usuario_equipo);
                $this->session->set_userdata("cliente", $sesion_equipo);
                echo json_encode(array("mensaje" => "welcome/editar_perfil_cliente"));
            }
        } else {
            echo json_encode(array("mensaje" => "0"));
        }
    }

    // USUARIO EQUIPO (ADMINISTRADOR)

    public function administrador() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('paginas_administrador/header_administrador');
            $this->load->view('paginas_administrador/inicio_administrador');
            $this->load->view('paginas_generales/footer_general');
        } else {
            redirect("welcome/index");
        }
    }

    public function editar_perfil_cliente() {
        if ($this->session->userdata("cliente")) {
            $this->load->view('paginas_cliente/header_cliente');
            $this->load->view('paginas_cliente/editar_perfil_cliente');
            $this->load->view('paginas_generales/footer_general');
        } else {
            redirect("welcome/index");
        }
    }

    public function editar_perfil_administrador() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('paginas_administrador/header_administrador');
            $this->load->view('paginas_administrador/editar_perfil_administrador');
            $this->load->view('paginas_generales/footer_general');
        } else {
            redirect("welcome/index");
        }
    }

    public function controlador_tabla_listado_mensaje_contacto() {
        if ($this->session->userdata("administrador") || $this->session->userdata("cliente")) {
            $draw = intval($this->input->get("draw"));
            $listado_mensaje_contacto = $this->modelo->modelo_listado_mensaje_contacto();
            $data = array();

            foreach ($listado_mensaje_contacto->result() as $lista) {

                $data[] = array(
                    $lista->id_mensaje,
                    $lista->nombre_invitado_mensaje,
                    $lista->email_invitado_mensaje,
                    $lista->telefono_invitado_mensaje,
                    $lista->comentario_invitado_mensaje,
                    $lista->fecha_hora_invitado_mensaje,
                );
            }
            $output = array(
                "draw" => $draw,
                "recordsTotal" => $listado_mensaje_contacto->num_rows(),
                "recordsFiltered" => $listado_mensaje_contacto->num_rows(),
                "data" => $data
            );
            echo json_encode($output);
            exit();
        } else {
            redirect('welcome/index');
        }
    }

    public function controlador_boton_comentario_mensaje() {
        if ($this->session->userdata("administrador") || $this->session->userdata("cliente")) {
            $id_mensaje = $this->input->post("id_mensaje");
            echo json_encode($this->modelo->modelo_comentario_mensaje($id_mensaje));
        } else {
            redirect("welcome/index");
        }
    }

    public function cambiar_contrasena() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('paginas_administrador/header_administrador');
            $this->load->view('paginas_generales/cambiar_contrasena');
            $this->load->view('paginas_generales/footer_general');
        } else {
            if ($this->session->userdata("cliente")) {
                $this->load->view('paginas_cliente/header_cliente');
                $this->load->view('paginas_generales/cambiar_contrasena');
                $this->load->view('paginas_generales/footer_general');
            } else {
                redirect("welcome/index");
            }
        }
    }

    public function controlador_cambiar_clave() {
        if ($this->session->userdata("administrador") || $this->session->userdata("cliente")) {
            $rut_entidad = $this->input->post("rut_entidad");
            $clave_entidad = $this->input->post("clave_entidad");

            $this->modelo->modelo_cambiar_clave($rut_entidad, $clave_entidad);

            echo json_encode(array("mensaje" => "¡Clave cambiada con éxito!"));
        } else {
            redirect("welcome/index");
        }
    }

    public function controlador_editar_usuario() {
        if ($this->session->userdata("administrador") || $this->session->userdata("cliente")) {
            $rut_entidad = $this->input->post("rut_entidad");
            $telefono_entidad = $this->input->post("telefono_entidad");
            $email_entidad = $this->input->post("email_entidad");

            $this->modelo->modelo_editar_perfil($rut_entidad, $telefono_entidad, $email_entidad);

            echo json_encode(array("mensaje" => "¡Datos actualizados!"));
        } else {
            redirect("welcome/index");
        }
    }

    //  ENVIO DE CORREO (TEST)

    public function controlador_email($nombre_invitado, $correo_invitado, $telefono_invitado, $mensaje_invitado) {

        $nombre_invitado = $this->input->post("nombre_invitado");
        $correo_invitado = $this->input->post("correo_invitado");
        $telefono_invitado = $this->input->post("telefono_invitado");
        $mensaje_invitado = $this->input->post("mensaje_invitado");

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.ipage.com',
            'smtp_port' => 25,
            'smtp_user' => 'mmontoya@sofgem.cl',
            'smtp_pass' => '123qweasdd',
            'charset' => 'utf-8',
            'wordwrap' => true,
            'priority' => 1
        );

        $CI = & get_instance();
        $CI->load->helper('url');
        $CI->load->library('session');
        $CI->config->item('base_url');

        $this->load->library('email');

        $subject = 'Mensaje de Contacto SofGem';

        $msg = 'Nombre Contacto: ' . $nombre_invitado . "\n \n" . 'Correo Contacto: ' . $correo_invitado . "\n \n" . 'Fono Contacto: ' . $telefono_invitado . "\n \n" . 'Comentario Contacto: ' . $mensaje_invitado;

        $CI->email
                ->from('mmontoya@sofgem.cl', 'SofGem Talca')
                ->to('matias.montoya.poblete@gmail.com')
                ->cc('xiomarialite@gmail.com')
                ->subject($subject)
                ->message($msg)
                ->send();
    }

    public function formulario() {
        $this->load->view('paginas_generales/header_general');
        $this->load->view('paginas_generales/formulario');
        $this->load->view('paginas_generales/footer_general');
    }

    public function controlador_encuesta_cliente() {
        $select_1 = $this->input->post("select_1");
        $select_2 = $this->input->post("select_2");
        $select_3 = $this->input->post("select_3");
        $select_4 = $this->input->post("select_4");
        $select_5 = $this->input->post("select_5");
        $select_6 = $this->input->post("select_6");
        $select_7 = $this->input->post("select_7");
        $grupo_1 = $this->input->post("grupo_1");
        $pregunta_1 = $this->input->post("pregunta_1");

        $this->modelo->modelo_encuesta_cliente($select_1, $select_2, $select_3, $select_4, $select_5, $select_6, $select_7, $grupo_1, $pregunta_1);
        $this->controlador_encuesta_email($select_1, $select_2, $select_3, $select_4, $select_5, $select_6, $select_7, $grupo_1, $pregunta_1);
        echo json_encode(array("mensaje" => "welcome/index"));
    }

    public function controlador_encuesta_email($select_1, $select_2, $select_3, $grupo_1, $select_4, $select_5, $select_6, $select_7, $pregunta_1) {

        $select_1 = $this->input->post("select_1");
        $select_2 = $this->input->post("select_2");
        $select_3 = $this->input->post("select_3");
        $grupo_1 = $this->input->post("grupo_1");
        $select_4 = $this->input->post("select_4");
        $select_5 = $this->input->post("select_5");
        $select_6 = $this->input->post("select_6");
        $select_7 = $this->input->post("select_7");
        $pregunta_1 = $this->input->post("pregunta_1");

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.ipage.com',
            'smtp_port' => 25,
            'smtp_user' => 'mmontoya@sofgem.cl',
            'smtp_pass' => '123qweasdd',
            'charset' => 'utf-8',
            'wordwrap' => true,
            'priority' => 1
        );

        $CI = & get_instance();
        $CI->load->helper('url');
        $CI->load->library('session');
        $CI->config->item('base_url');

        $this->load->library('email');

        $subject = 'Encuesta SofGem';

        $msg = '¿Qué tan seguido se comunica con soporte técnico?: ' . "\n" . $select_1 . "\n \n" . '¿Desde hace cuánto tiempo utiliza nuestros productos o servicios?: ' . "\n" . $select_2 . "\n \n" . '¿Cómo fue la atención para resolver sus dudas?: ' . "\n" . $select_3 . "\n \n" . '¿La persona que le atendío resolvío su problemática?: ' . "\n" . $grupo_1 . "\n \n" . '¿Cómo calificaría su nivel de satisfacción que le ofrecemos?: ' . "\n" . $select_4 . "\n \n" . '¿Cuál es la probabilidad de qué recomiende nuestros productos y servicios?: ' . "\n" . $select_5 . "\n \n" . '¿Comprará o utilizará usted Denarium de nuevo?: ' . "\n" . $select_6 . "\n \n" . '¿Considera que SofGem satisface las necesidades de la empresa?: ' . "\n" . $select_7 . "\n \n" . '¿Cuáles son los tipos de fallas más comunes que tienen nuestros productos que han provocado una mala experiencia para la empresa?: ' . "\n" . $pregunta_1;

        $CI->email
                ->from('mmontoya@sofgem.cl', 'SofGem Talca')
                ->to('matias.montoya.poblete@gmail.com')
                ->cc('xiomarialite@gmail.com')
                ->subject($subject)
                ->message($msg)
                ->send();
    }

    public function listado_encuesta() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('paginas_administrador/header_administrador');
            $this->load->view('paginas_administrador/listado_encuesta');
            $this->load->view('paginas_generales/footer_general');
        } else {
            redirect("welcome/index");
        }
    }

    public function controlador_tabla_listado_encuesta() {
        if ($this->session->userdata("administrador")) {
            $draw = intval($this->input->get("draw"));
            $listado_mensaje_encuesta = $this->modelo->modelo_listado_encuesta();
            $data = array();

            foreach ($listado_mensaje_encuesta->result() as $lista) {

                $data[] = array(
                    $lista->id_encuesta_cliente,
                    $lista->select_1,
                    $lista->select_2,
                    $lista->select_3,
                    $lista->grupo_1,
                    $lista->select_4,
                    $lista->select_5,
                    $lista->select_6,
                    $lista->select_7,
                    $lista->pregunta_1,
                );
            }
            $output = array(
                "draw" => $draw,
                "recordsTotal" => $listado_mensaje_encuesta->num_rows(),
                "recordsFiltered" => $listado_mensaje_encuesta->num_rows(),
                "data" => $data
            );
            echo json_encode($output);
            exit();
        } else {
            redirect('welcome/index');
        }
    }

    public function controlador_emails() {

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'mmontoya@sofgem.cl',
            'smtp_pass' => '123qweasdd',
            'charset' => 'iso-8859-1',
            'wordwrap' => true,
            'priority' => 1
        );

        $CI = & get_instance();
        $CI->load->helper('url');
        $CI->load->library('session');
        $CI->config->item('base_url');

        $this->load->library('email');

        $subject = 'Mensaje de Contactos Prueba 2020 SofGem';

        $msg = 'Prueba test matias montoya';

        $CI->email
                ->from('mmontoya@sofgem.cl', 'SofGem Talca')
                ->to('xiomarialite@gmail.com')
                ->cc('matias.montoya.poblete@gmail.com')
                ->subject($subject)
                ->message($msg)
                ->send();

        echo $CI->email->print_debugger();
    }

    public function controlador_mensaje_invitado_modal_reemplazo($nombre_invitado_2, $correo_invitado_2) {

        $nombre_invitado_2 = $this->input->post("nombre_invitado_2");
        $correo_invitado_2 = $this->input->post("correo_invitado_2");

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.ipage.com',
            'smtp_port' => 25,
            'smtp_user' => 'mmontoya@sofgem.cl',
            'smtp_pass' => '123qweasdd',
            'charset' => 'utf-8',
            'wordwrap' => true,
            'priority' => 1
        );

        $CI = & get_instance();
        $CI->load->helper('url');
        $CI->load->library('session');
        $CI->config->item('base_url');

        $this->load->library('email');

        $subject = 'Landing SofGem ' . $nombre_invitado_2;

        $msg = 'Nombre Contacto: ' . $nombre_invitado_2 . "\n \n" . 'Correo Contacto: ' . $correo_invitado_2;

        $CI->email
                ->from('mmontoya@sofgem.cl', 'SofGem Talca')
                ->to('matias.montoya.poblete@gmail.com')
                ->cc('kaikaivilurodriguez@gmail.com')
                ->subject($subject)
                ->message($msg)
                ->send();
    }

    public function controlador_mensaje_invitado_modal($nombre_invitado_2, $correo_invitado_2) {

        $nombre_invitado_2 = $this->input->post("nombre_invitado_2");
        $correo_invitado_2 = $this->input->post("correo_invitado_2");

        $this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mmontoya@sofgem.cl';
        $mail->Password = '123qweasdd';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('mmontoya@sofgem.cl', 'Landing Maule Seguro');
        $mail->addAddress('mmontoya@sofgem.cl');
        // $mail->addCC('mrodriguez@sofgem.cl');

        $mail->Subject = 'Landing Maule Seguro - Datos de interesado';
        $mail->isHTML(false);

        $mailContent = 'Nombre Contacto: ' . $nombre_invitado_2 . "\n \n" . 'Correo Contacto: ' . $correo_invitado_2;
        $mail->Body = $mailContent;

        if (!$mail->send()) {
            echo 'Mensaje no enviado';
            echo 'Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Mensaje enviado';
        }
    }

    function send() {
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');

        // PHPMailer object
        $mail = $this->phpmailer_lib->load();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.ipage.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mmontoya@sofgem.cl';
        $mail->Password = '123qweasdd';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 25;

        $mail->setFrom('mmontoya@sofgem.cl', 'Php Mailer');

        // Add a recipient
        $mail->addAddress('matias.montoya.poblete@gmail.com');

        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // Email subject
        $mail->Subject = 'Verificando envio con PhpMailer';

        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
        $mailContent = "<h1>Envio html php mailer</h1>
            <p>prueba de envio</p>";
        $mail->Body = $mailContent;

        // Send email
        if (!$mail->send()) {
            echo 'mensaje no enviado.';
            echo 'error: ' . $mail->ErrorInfo;
        } else {
            echo 'mensaje enviado';
        }
    }

}

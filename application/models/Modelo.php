<?php

class Modelo extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db->query("SET lc_time_names = 'es_CL'");
    }

    public function modelo_mensaje_invitado($nombre_invitado, $correo_invitado, $telefono_invitado, $mensaje_invitado, $fecha_hora_invitado_mensaje) {
        $data = array("nombre_invitado_mensaje" => $nombre_invitado,
            "email_invitado_mensaje" => $correo_invitado,
            "telefono_invitado_mensaje" => $telefono_invitado,
            "comentario_invitado_mensaje" => $mensaje_invitado,
            "fecha_hora_invitado_mensaje" => $fecha_hora_invitado_mensaje,
            "rut_entidad" => "19390359-2",
        );
        return $this->db->insert("mensaje_contacto", $data);
    }

    public function modelo_iniciar_sesion_equipo($nombre_usuario, $clave_usuario) {
        $this->db->where("rut_entidad", $nombre_usuario);
        $this->db->where("clave_entidad", $clave_usuario);
        return $this->db->get("usuario")->result();
    }

    public function modelo_entidad_sesion_equipo($nombre_usuario) {
        $this->db->select("*");
        $this->db->from("entidad");
        $this->db->join("usuario", "usuario.rut_entidad = entidad.rut_entidad");
        $this->db->where("entidad.rut_entidad", $nombre_usuario);
        return $this->db->get()->result();
    }

    public function modelo_listado_mensaje_contacto() {
        $this->db->select("*");
        $this->db->from("mensaje_contacto");
        $this->db->where("mensaje_contacto.rut_entidad", "19390359-2");
        return $this->db->get();
    }

    public function modelo_comentario_mensaje($id_mensaje) {
        $this->db->select("mensaje_contacto.id_mensaje, mensaje_contacto.comentario_invitado_mensaje");
        $this->db->from("mensaje_contacto");
        $this->db->where("mensaje_contacto.id_mensaje =", $id_mensaje);
        return $this->db->get()->result();
    }

    public function modelo_cambiar_clave($rut_entidad, $clave_entidad) {
        $this->db->where("rut_entidad", $rut_entidad);
        $data = array("clave_entidad" => $clave_entidad);
        return $this->db->update("usuario", $data);
    }

    public function modelo_editar_perfil($rut_entidad, $telefono_entidad, $email_entidad) {
        $this->db->where("rut_entidad", $rut_entidad);
        $data = array("telefono_entidad" => $telefono_entidad,
            "email_entidad" => $email_entidad);
        return $this->db->update("entidad", $data);
    }

    public function modelo_encuesta_cliente($select_1, $select_2, $select_3, $select_4, $select_5, $select_6, $select_7, $grupo_1, $pregunta_1) {
        $data = array("select_1" => $select_1,
            "select_2" => $select_2,
            "select_3" => $select_3,
            "select_4" => $select_4,
            "select_5" => $select_5,
            "select_6" => $select_6,
            "select_7" => $select_7,
            "grupo_1" => $grupo_1,
            "pregunta_1" => $pregunta_1,
            "rut_entidad" => "19390359-2",
        );
        return $this->db->insert("encuesta_cliente", $data);
    }

    public function modelo_listado_encuesta() {
        $this->db->select("*");
        $this->db->from("encuesta_cliente");
        $this->db->where("encuesta_cliente.rut_entidad", "19390359-2");
        return $this->db->get();
    }

}

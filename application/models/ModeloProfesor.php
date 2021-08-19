<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloProfesor extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function clasesProfesor($idUsuario) {
        $this->db->select("c.idClase,c.nombre as nombreC,c.asistentes,d.dia,c.hora,s.nombre");
        $this->db->from("clase c");
        $this->db->join("usuario u", "u.idUsuario = c.profesor");
        $this->db->join("salon s", "c.salon = s.idSalon");
        $this->db->join("dia d", "d.idDia = c.dia");
        $this->db->where("c.profesor", $idUsuario);
        return $this->db->get()->result();
    }

    public function detalleClases($idClase) {
        $this->db->select("a.usuario,u.nombre, u.apellido, c.idAsistencia,c.descripcion");
        $this->db->from("asistenciaclase a");
        $this->db->join("usuario u ", "u.idUsuario = a.usuario");
        $this->db->join("asistencia c ", "a.asistencia = c.idAsistencia");
        $this->db->where("a.clase", $idClase);
        return $this->db->get()->result();
    }

    public function getAsistencia() {
        return $this->db->get("asistencia")->result();
    }

}

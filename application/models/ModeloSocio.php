<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloSocio extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('Socio/index.php');
    }

    public function editUser($id, $rut, $nombre, $apellido, $correo, $fecha, $clave) {
        $data = array("rut" => $rut,
            "nombre" => $nombre,
            "apellido" => $apellido,
            "fechaDeNacimiento" => $fecha,
            "email" => $correo,
            "clave" => $clave);
        $this->db->where('idUsuario', $id);
        return $this->db->update("usuario", $data);
    }

    public function verClases() {
        $this->db->select("c.idClase,c.nombre as nombreC,c.asistentes,d.dia,c.hora,s.nombre,concat(u.nombre, ' ',u.apellido) as nombreProfesor");
        $this->db->from("clase c");
        $this->db->join("usuario u", "u.idUsuario = c.profesor");
        $this->db->join("salon s", "c.salon = s.idSalon");
        $this->db->join("dia d", "d.idDia = c.dia");
        return $this->db->get();
    }

    public function verificarAsistencia($idClase, $idUsuario) {
        $this->db->select('count(*)');
        $this->db->from('asistenciaclase');
        $this->db->where('usuario', $idUsuario);
        $this->db->where('clase', $idClase);
        return $this->db->get()->result();
    }

    public function addAsistencia($idClase, $idUsuario) {

        $this->db->trans_begin();
        $data2 = array("usuario" => $idUsuario,
            "clase" => $idClase,
            "asistencia" => 1);
        $this->db->insert("asistenciaclase", $data2);

        $this->db->select('MAX(asistentes) AS "asis"');
        $this->db->where('idClase', $idClase);
        $var = $this->db->get("clase")->result();
        $data = array("asistentes" => ($var[0]->asis) + 1);
        $this->db->where("idClase", $idClase);
        $this->db->update("clase", $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
    }

    public function verClasesTomadas($idUsuario) {
        $this->db->select("c.idClase,c.nombre as nombreC,c.asistentes,d.dia,c.hora,s.nombre,concat(u.nombre, ' ',u.apellido) as nombreProfesor");
        $this->db->from("clase c");
        $this->db->join("usuario u", "u.idUsuario = c.profesor");
        $this->db->join("salon s", "c.salon = s.idSalon");
        $this->db->join("dia d", "d.idDia = c.dia");
        $this->db->join("asistenciaclase a", "a.clase = c.idClase");
        $this->db->where("a.usuario", $idUsuario);
        return $this->db->get()->result();
    }

    public function getControlSocio($idUsuario) {
        $this->db->select("c.idControl,c.fecha,c.peso,c.porcentajeGrasa,c.pecho,c.cintura,c.cadera,c.muslo,c.brazo,c.eBiolog,c.mMusc,c.gVicer,c.calorias,c.imc,u.entrenador,concat(o.nombre,' ',o.apellido) as nombreUsuario,c.estado");
        $this->db->from("control c");
        $this->db->join("usuariocontrol u", "u.control = c.idControl");
        $this->db->join("usuario o", "o.idUsuario = u.entrenador");
        $this->db->where("u.usuario", $idUsuario);
        $this->db->where("c.estado", 1);

        return $this->db->get()->result();
    }

    public function getConsejosSocio($idUsuario) {
        $this->db->select("c.idConsejo,c.titulo,c.descripcion,c.imagen,u.entrenador,concat(o.nombre,' ',o.apellido) as nombreUsuario,c.estado");
        $this->db->from("consejo c");
        $this->db->join("usuarioconsejo u", "u.consejo = c.idConsejo");
        $this->db->join("usuario o", "o.idUsuario = u.entrenador");
        $this->db->where("u.usuario", $idUsuario);
        $this->db->where("c.estado", 1);
        return $this->db->get()->result();
    }

    public function getRutinaSocio($idUsuario) {
        $this->db->select("r.idRutina,r.fechaEvaluacion, r.observacion, r.fechaSiguienteEvaluacion,concat(u.nombre,' ',u.apellido) as nombreUsuario");
        $this->db->from("rutina r");
        $this->db->join("rutinaejerciciousuario k", "k.rutinaEjercicio = r.idRutina");
        $this->db->join("usuario u", "k.entrenador = u.idUsuario");
        $this->db->where("k.usuario", $idUsuario);
        return $this->db->get()->result();
    }

    public function rutinaSocio($idRutina) {
        $this->db->select("r.idRutinaEjercicio, e.descripcion, e.imagen,r.series, r.repeticiones");
        $this->db->from("rutinaejercicio r");
        $this->db->join("ejercicio e", "e.idEjercicio = r.ejercicio");
        $this->db->where("r.rutina", $idRutina);
        return $this->db->get()->result();
    }
    
    public function getPublicidad(){
        return $this->db->get("oferta")->result();
    }

}

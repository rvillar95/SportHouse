<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class IndexModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function Iniciar($rut, $clave) {
        $this->db->where("rutUsuario", $rut);
        $this->db->where("claveUsuario", md5($clave));
        return $this->db->get("usuario")->result();
    }

    function inicioSesion($rut, $clave) {
        $this->db->select("t.tipo, t.usuario, u.idUsuario, u.nombre,u.apellido ,u.rut, u.clave,u.fechaDeNacimiento,u.fichaMedica,u.email,.u.ocupacion,u.estado ,c.descripcion");
        $this->db->from("tipousuario t");
        $this->db->join("usuario u", "u.idUsuario = t.usuario");
        $this->db->join("tipo c", "c.idTipo = t.tipo");
        $this->db->where("u.rut", $rut);
        $this->db->where("u.clave", $clave);
        $query = $this->db->query("select t.tipo, t.usuario, u.idUsuario, u.nombre,u.apellido, u.rut, u.clave, c.descripcion,u.email from tipousuario t join usuario u on u.idUsuario = t.usuario join tipo c on c.idTipo = t.tipo where u.rut =  '$rut' and u.clave = '$clave'");
        $totalFilas = $query->num_rows();
        $filas = $this->db->get()->result();
        $resultado  = array($totalFilas,$filas);
        return $resultado;
    }
    
    function inicioMultiple($rut, $clave,$tipo){
        $this->db->select("t.tipo, t.usuario, u.idUsuario, u.nombre, u.apellido , u.rut, u.clave,u.fechaDeNacimiento,u.fichaMedica,u.email,.u.ocupacion,u.estado ,c.descripcion");
        $this->db->from("tipousuario t");
        $this->db->join("usuario u", "u.idUsuario = t.usuario");
        $this->db->join("tipo c", "c.idTipo = t.tipo");
        $this->db->where("u.rut", $rut);
        $this->db->where("u.clave", $clave);
        $this->db->where("t.tipo", $tipo);
        return $this->db->get()->result();
    }


    function buscarTipoUsuario($rut) {
        $this->db->select("COUNT(*)");
        $this->db->from("tipousuario");
        $this->db->where("usuario", "");
        return $this->db->get()->result();
    }

}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function IniciarSesion($correo, $clave) {
        $this->db->where("correoAdmin", $correo);
        $this->db->where("claveAdmin", $clave);
        return $this->db->get("administrador")->result();
    }

   
    

    function verTipo() {
        return $this->db->get("tipo")->result();
    }

    

    


    

    function verClases(){
        // $this->db->select("idClase, nombre, asistentes, dia , hora, salon, profesor");
        // $this->db->from("clase");
        // return $this->db->get()->result();
        return $this->db->get("clase");
    }

    function verOfertas(){
       $this->db->select("o.descripcion as nombre, o.imagen, e.descripcion,o.estadoOferta");
       $this->db->from("oferta o");
       $this->db->join("estado e","e.idEstado = o.estadoOferta");
       return $this->db->get()->result();  
   }

   

   

function agregarOferta($nombre,$nombre_imagen,$estado){
    $data = array("descripcion" => $nombre,
        "imagen" => $nombre_imagen,
        "estadoOferta" => $estado);
    $this->db->insert("oferta", $data);
}

function getUsuario($rut) {
    $this->db->select("idUsuario,rut,nombre, apellido,fechaDeNacimiento, email,fichaMedica,estado,ocupacion");
    $this->db->from("usuario u");
    $this->db->like("rut", $rut);
    return $this->db->get()->result();
}



}

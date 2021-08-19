<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloAdministrador extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function verTipo() {
        return $this->db->get("tipo")->result();
    }

    function verUsuarios() {
        $this->db->select("u.idUsuario,u.rut,u.nombre, u.apellido,u.fechaDeNacimiento, u.email,u.clave,e.descripcion,o.descripcion as ocupacion");
        $this->db->from("usuario u");
        $this->db->join("ocupacion o", "u.ocupacion = o.idOcupacion");
        $this->db->join("estado e", "u.estado = e.idEstado");
        return $this->db->get();
    }

    function addUser($rut, $nombre, $apellido, $correo, $fecha, $ocupacion, $estado, $rol1, $rol2, $rol3, $rol4, $clave) {
        $this->db->trans_begin();
        $data = array("rut" => $rut,
            "nombre" => $nombre,
            "apellido" => $apellido,
            "fechaDeNacimiento" => $fecha,
            "email" => $correo,
            "clave" => $clave,
            "estado" => $estado,
            "ocupacion" => $ocupacion);
        $this->db->insert("usuario", $data);
        $idCliente = $this->getUltimoCliente();
        if ($rol1 == 1) {
            $data1 = array("usuario" => $idCliente,
                "tipo" => "1");
            $this->db->insert("tipousuario", $data1);
        }
        if ($rol2 == 2) {
            $data2 = array("usuario" => $idCliente,
                "tipo" => "2");
            $this->db->insert("tipousuario", $data2);
        }
        if ($rol3 == 3) {
            $data3 = array("usuario" => $idCliente,
                "tipo" => "3");
            $this->db->insert("tipousuario", $data3);
        }
        if ($rol4 == 4) {
            $data4 = array("usuario" => $idCliente,
                "tipo" => "4");
            $this->db->insert("tipousuario", $data4);
        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
    }

    function getUltimoCliente() {
        $this->db->select('MAX(idUsuario) AS "id"');
        $var = $this->db->get("usuario")->result();
        return ($var[0]->id) - 1;
    }

    function verProfesor() {
        $this->db->select("u.idUsuario,u.nombre,u.apellido");
        $this->db->from("usuario u");
        $this->db->join("tipousuario t", "u.idUsuario = t.usuario");
        $this->db->where("t.tipo", "4");
        return $this->db->get()->result();
    }

    function verDia() {
        return $this->db->get("dia")->result();
    }

    function verSalon() {
        return $this->db->get("salon")->result();
    }

    function verOcupacion() {
        return $this->db->get("ocupacion")->result();
    }

    function verEstado() {
        return $this->db->get("estado")->result();
    }

    function editUser($id, $rut, $nombre, $apellido, $correo, $fecha, $ocupacion, $estado, $clave) {
        $data = array("rut" => $rut,
            "nombre" => $nombre,
            "apellido" => $apellido,
            "fechaDeNacimiento" => $fecha,
            "email" => $correo,
            "clave" => $clave,
            "estado" => $estado,
            "ocupacion" => $ocupacion);
        $this->db->where('idUsuario', $id);
        return $this->db->update("usuario", $data);
    }

    function getRutUsuarios($rut) {
        $this->db->select('count(*)');
        $this->db->from('usuario');
        $this->db->where('rut', $rut);
        return $this->db->get()->result();
    }

    function addClase($nombre, $asistentes, $dia, $hora, $salon, $profesor) {
        $data = array("nombre" => $nombre,
            "asistentes" => $asistentes,
            "dia" => $dia,
            "hora" => $hora,
            "salon" => $salon,
            "profesor" => $profesor);
        $this->db->insert("clase", $data);
    }

    function verClases() {
        $this->db->select("c.idClase,c.nombre as nombreC,c.asistentes,d.dia,c.hora,s.nombre,concat(u.nombre, ' ',u.apellido) as nombreProfesor");
        $this->db->from("clase c");
        $this->db->join("usuario u", "u.idUsuario = c.profesor");
        $this->db->join("salon s", "c.salon = s.idSalon");
        $this->db->join("dia d", "d.idDia = c.dia");
        return $this->db->get();
    }

    function editClase($id, $nombre, $asistentes, $dia, $hora, $salon, $profesor) {
        $data = array("nombre" => $nombre,
            "asistentes" => $asistentes,
            "dia" => $dia,
            "hora" => $hora,
            "salon" => $salon,
            "profesor" => $profesor);
        $this->db->where('idClase', $id);
        return $this->db->update("clase", $data);
    }

    function eliminarClase($id) {
        $this->db->where("idClase", $id);
        $this->db->delete("clase");
    }

    function addOferta($descripcion, $nombre_imagen) {
        $data = array("descripcion" => $descripcion,
            "imagen" => $nombre_imagen,
            "estadoOferta" => 1,
        );
        $this->db->insert("oferta", $data);
    }

    function verOfertas() {
        $this->db->select("o.idOferta,o.descripcion as nombre,o.imagen,o.estadoOferta,e.descripcion");
        $this->db->from("oferta o");
        $this->db->join("estado e", "o.estadoOferta = e.idEstado");
        return $this->db->get()->result();
    }

    function eliminarOferta($id) {
        $this->db->where("idOferta", $id);
        $this->db->delete("oferta");
    }

    function editOferta($id, $nombre, $estado) {
        $data = array("descripcion" => $nombre,
            "estadoOferta" => $estado);
        $this->db->where('idOferta', $id);
        return $this->db->update("oferta", $data);
    }

}

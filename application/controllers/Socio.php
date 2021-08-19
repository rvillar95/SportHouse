<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Socio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("modeloSocio");
    }

    public function index() {
        if (count($this->session->userdata("socio")) > 0) {
            $this->load->view('Socio/index.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function Perfil() {
        if (count($this->session->userdata("socio")) > 0) {
            $this->load->view('Socio/Perfil.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function Clases() {
        if (count($this->session->userdata("socio")) > 0) {
            $this->load->view('Socio/Clases.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function Controles() {
        if (count($this->session->userdata("socio")) > 0) {
            $this->load->view('Socio/Controles.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function Rutinas() {
        if (count($this->session->userdata("socio")) > 0) {
            $this->load->view('Socio/Rutinas.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function Consejos() {
        if (count($this->session->userdata("socio")) > 0) {
            $this->load->view('Socio/Consejos.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function editarPerfil() {
        if (count($this->session->userdata("socio")) > 0) {
            $id = $this->input->post("id");
            $rut = $this->input->post("rutUsuario");
            $nombre = $this->input->post("nombreUsuario");
            $apellido = $this->input->post("apellidoUsuario");
            $correo = $this->input->post("correoUsuario");
            $fecha = $this->input->post("fechaNacimiento");
            $clave = $this->input->post("clave");
            $this->modeloSocio->editUser($id, $rut, $nombre, $apellido, $correo, $fecha, $clave);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getClaseSocio() {
        if (count($this->session->userdata("socio")) > 0) {
            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));


            $books = $this->modeloSocio->verClases();

            $data = array();

            foreach ($books->result() as $r) {

                $data[] = array(
                    $r->idClase,
                    $r->nombreC,
                    $r->asistentes,
                    $r->dia,
                    $r->hora,
                    $r->nombre,
                    $r->nombreProfesor
                );
            }

            $output = array(
                "draw" => $draw,
                "recordsTotal" => $books->num_rows(),
                "recordsFiltered" => $books->num_rows(),
                "data" => $data
            );
            echo json_encode($output);
            exit();
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getClaseSocioTomadas() {
        if (count($this->session->userdata("socio")) > 0) {
            $idUsuario = $this->input->post("id");
            echo json_encode($this->modeloSocio->verClasesTomadas($idUsuario));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function verificarAsistencia() {
        if (count($this->session->userdata("socio")) > 0) {
            $idClase = $this->input->post("idClase");
            $idUsuario = $this->input->post("idUsuario");
            $data = $this->modeloSocio->verificarAsistencia($idClase, $idUsuario);
            echo json_encode(array("msg" => $data));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function agregarAsistencia() {
        if (count($this->session->userdata("socio")) > 0) {
            $idClase = $this->input->post("idClase");
            $idUsuario = $this->input->post("idUsuario");
            $this->modeloSocio->addAsistencia($idClase, $idUsuario);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getControlXSocio() {
        if (count($this->session->userdata("socio")) > 0) {
            $idUsuario = $this->input->post("id");
            echo json_encode($this->modeloSocio->getControlSocio($idUsuario));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getConsejosXSocio() {
        if (count($this->session->userdata("socio")) > 0) {
            $idUsuario = $this->input->post("id");
            echo json_encode($this->modeloSocio->getConsejosSocio($idUsuario));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getRutinaSocio() {
        if (count($this->session->userdata("socio")) > 0) {
            $idUsuario = $this->input->post("id");
            echo json_encode($this->modeloSocio->getRutinaSocio($idUsuario));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getDetalleRutinaSocio() {
        if (count($this->session->userdata("socio")) > 0) {
            $idRutina = $this->input->post("id");
            echo json_encode($this->modeloSocio->rutinaSocio($idRutina));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function verPublicidad() {
        if (count($this->session->userdata("socio")) > 0) {
            echo json_encode($this->modeloSocio->getPublicidad());
        } else {
            $this->load->view('Errormsg');
        }
    }

}

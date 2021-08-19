<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profesor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("modeloProfesor");
    }

    public function index() {
        if (count($this->session->userdata("profesor")) > 0) {
            $this->load->view('Profesor/index.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function asistencia() {
        if (count($this->session->userdata("profesor")) > 0) {
            $this->load->view('Profesor/gestionAsistencia.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function consejos() {
        if (count($this->session->userdata("profesor")) > 0) {
            $this->load->view('Profesor/gestionConsejosProfesor.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getClaseProfesor() {
        if (count($this->session->userdata("profesor")) > 0) {
            $idUsuario = $this->input->post("id");
            echo json_encode($this->modeloProfesor->clasesProfesor($idUsuario));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getDetalleClases() {
        if (count($this->session->userdata("profesor")) > 0) {
            $idClase = $this->input->post("id");
            echo json_encode($this->modeloProfesor->detalleClases($idClase));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getAsistencia() {
        if (count($this->session->userdata("profesor")) > 0) {
            echo json_encode($this->modeloProfesor->getAsistencia());
        } else {
            $this->load->view('Errormsg');
        }
    }

}

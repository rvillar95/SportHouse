<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->view('index.php');
    }

    public function login() {
        $this->load->view('login.php');
    }

    public function admin() {
        $this->load->view('menuAdmin.php');
    }

    public function __construct() {
        parent::__construct();
        $this->load->model("indexModel");
    }

    public function iniciarSesion() {
        $rut = $this->input->post("rut");
        $clave = $this->input->post("clave");
        $total = $this->indexModel->inicioSesion($rut, $clave);
        $longitud = count($total);
        for ($i = 0; $i < $longitud; $i++) {
            //saco el valor de cada elemento
            if ($i == 0) {
                $r1 = $total[$i];
            }
            if ($i == 1) {
                $r2 = $total[$i];
            }
        }
        if ($r1 > 0) {
            if ($r2[0]->estado == 1) {
                if ($r1 == 1) {
                    if ($r2[0]->tipo == 1) {
                        $this->session->set_userdata("administrador", $r2);
                        echo json_encode(array("msg" => "administrador"));
                    } else if ($r2[0]->tipo == 2) {
                        $this->session->set_userdata("entrenador", $r2);
                        echo json_encode(array("msg" => "entrenador"));
                    } else if ($r2[0]->tipo == 3) {
                        $this->session->set_userdata("socio", $r2);
                        echo json_encode(array("msg" => "socio"));
                    } else if ($r2[0]->tipo == 4) {
                        $this->session->set_userdata("profesor", $r2);
                        echo json_encode(array("msg" => "profesor"));
                    }
                } else if ($r1 == 2) {
                    $user = array(array("idTipo" => $r2[0]->tipo, "descripcion" => $r2[0]->descripcion), array("idTipo" => $r2[1]->tipo, "descripcion" => $r2[1]->descripcion));
                    echo json_encode(array("msg" => "2", "user" => $user));
                } else if ($r1 == 3) {
                    $user = array(array("idTipo" => $r2[0]->tipo, "descripcion" => $r2[0]->descripcion), array("idTipo" => $r2[1]->tipo, "descripcion" => $r2[1]->descripcion), array("idTipo" => $r2[2]->tipo, "descripcion" => $r2[2]->descripcion));
                    echo json_encode(array("msg" => "3", "user" => $user));
                } else if ($r1 == 4) {
                    $user = array(array("idTipo" => $r2[0]->tipo, "descripcion" => $r2[0]->descripcion), array("idTipo" => $r2[1]->tipo, "descripcion" => $r2[1]->descripcion), array("idTipo" => $r2[2]->tipo, "descripcion" => $r2[2]->descripcion), array("idTipo" => $r2[3]->tipo, "descripcion" => $r2[3]->descripcion));
                    echo json_encode(array("msg" => "3", "user" => $user));
                } else if ($r1 == 0) {
                    echo json_encode(array("msg" => "error"));
                }
            } else {
                echo json_encode(array("msg" => "inactivo"));
            }
        } else {
            echo json_encode(array("msg" => "error"));
        }
    }

    public function sesionMultiple() {
        $rut = $this->input->post("rut");
        $clave = $this->input->post("clave");
        $tipo = $this->input->post("tipo");
        $user = $this->indexModel->inicioMultiple($rut, $clave, $tipo);
        if (count($user)) {
            if ($user[0]->tipo == 1) {
                $this->session->set_userdata("administrador", $user);
                echo json_encode(array("msg" => "administrador"));
            } else if ($user[0]->tipo == 2) {
                $this->session->set_userdata("entrenador", $user);
                echo json_encode(array("msg" => "entrenador"));
            } else if ($user[0]->tipo == 3) {
                $this->session->set_userdata("socio", $user);
                echo json_encode(array("msg" => "socio"));
            } else if ($user[0]->tipo == 4) {
                $this->session->set_userdata("profesor", $user);
                echo json_encode(array("msg" => "profesor"));
            }
        }
    }

    public function cerrarSesion() {
        $this->session->sess_destroy();
        $this->index();
    }

}

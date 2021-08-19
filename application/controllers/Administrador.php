<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("modeloAdministrador");
    }

    public function index() {
        if (count($this->session->userdata("administrador")) > 0) {
            $this->load->view('Administrador/index.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function ModuloUsuarios() {
        if (count($this->session->userdata("administrador")) > 0) {
            $this->load->view('Administrador/gestionUsuarios.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function ModuloClases() {
        if (count($this->session->userdata("administrador")) > 0) {
            $this->load->view('Administrador/gestionClases.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function ModuloOfertas() {
        if (count($this->session->userdata("administrador")) > 0) {
            $this->load->view('Administrador/gestionOfertas.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getTipo() {
        if (count($this->session->userdata("administrador")) > 0) {
            echo json_encode($this->modeloAdministrador->verTipo());
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function addUser() {
        $rol1 = $this->input->post("rol1");
        $rol2 = $this->input->post("rol2");
        $rol3 = $this->input->post("rol3");
        $rol4 = $this->input->post("rol4");
        if (count($this->session->userdata("administrador")) > 0) {
            if (isset($rol1) || isset($rol2) || isset($rol3) || isset($rol4)) {
                 $rut = $this->input->post("rutUsuario");
            $nombre = $this->input->post("nombreUsuario");
            $apellido = $this->input->post("apellidoUsuario");
            $correo = $this->input->post("correoUsuario");
            $fecha = $this->input->post("fechaNacimiento");
            $ocupacion = $this->input->post("ocupacion");
            $estado = $this->input->post("estado");
            $clave = $this->input->post("claveUsuario");

            $this->modeloAdministrador->addUser($rut, $nombre, $apellido, $correo, $fecha, $ocupacion, $estado, $rol1, $rol2, $rol3, $rol4, $clave);
            echo json_encode(array("msg" => "ok"));
            }else{
                echo json_encode(array("msg" => "no"));
            }
           
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getUser() {
        if (count($this->session->userdata("administrador")) > 0) {
            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));
            $books = $this->modeloAdministrador->verUsuarios();
            $data = array();
            foreach ($books->result() as $r) {
                $data[] = array(
                    $r->idUsuario,
                    $r->rut,
                    $r->nombre,
                    $r->apellido,
                    $r->fechaDeNacimiento,
                    $r->email,
                    $r->clave,
                    $r->descripcion,
                    $r->ocupacion,
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

    public function getDia() {
        if (count($this->session->userdata("administrador")) > 0) {
            echo json_encode($this->modeloAdministrador->verDia());
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getSalon() {
        if (count($this->session->userdata("administrador")) > 0) {
            echo json_encode($this->modeloAdministrador->verSalon());
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getProfesor() {
        if (count($this->session->userdata("administrador")) > 0) {
            echo json_encode($this->modeloAdministrador->verProfesor());
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getEstado() {
        echo json_encode($this->modeloAdministrador->verEstado());
    }

    public function getOcupacion() {
        if (count($this->session->userdata("administrador")) > 0) {
            echo json_encode($this->modeloAdministrador->verOcupacion());
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function editUser() {
        if (count($this->session->userdata("administrador")) > 0) {
            $id = $this->input->post("id");
            $rut = $this->input->post("rutUsuario");
            $nombre = $this->input->post("nombreUsuario");
            $apellido = $this->input->post("apellidoUsuario");
            $correo = $this->input->post("correoUsuario");
            $fecha = $this->input->post("fechaNacimiento");
            $clave = $this->input->post("clave");
            $ocupacion = $this->input->post("ocupacion");
            $estado = $this->input->post("estado");
            $this->modeloAdministrador->editUser($id, $rut, $nombre, $apellido, $correo, $fecha, $ocupacion, $estado, $clave);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function validarRut() {
        $rut = $this->input->post("rut");
        $data = $this->modeloAdministrador->getRutUsuarios($rut);
        echo json_encode(array("msg" => $data));
    }

    public function addClase() {
        if (count($this->session->userdata("administrador")) > 0) {
            $nombre = $this->input->post("nombreClase");
            $asistentes = $this->input->post("asistentes");
            $dia = $this->input->post("dia");
            $hora = $this->input->post("hora");
            $salon = $this->input->post("salon");
            $profesor = $this->input->post("profesor");
            $this->modeloAdministrador->addClase($nombre, $asistentes, $dia, $hora, $salon, $profesor);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getClases() {
        if (count($this->session->userdata("administrador")) > 0) {
            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));


            $books = $this->modeloAdministrador->verClases();

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

    public function editClase() {
        if (count($this->session->userdata("administrador")) > 0) {
            $id = $this->input->post("id");
            $nombre = $this->input->post("nombre");
            $asistentes = $this->input->post("asistentes");
            $dia = $this->input->post("dia");
            $hora = $this->input->post("hora");
            $salon = $this->input->post("salon");
            $profesor = $this->input->post("profesor");
            $this->modeloAdministrador->editClase($id, $nombre, $asistentes, $dia, $hora, $salon, $profesor);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function eliminarEmpleado() {

        $id = $this->input->post("id");
        $this->modeloAdministrador->eliminarClase($id);
        echo json_encode(array("msg" => "ok"));
    }

    public function addOferta() {
        if (count($this->session->userdata("administrador")) > 0) {
            $nombre_imagen = $_FILES['imagenOferta']['name'];
            $tipo_imagen = $_FILES['imagenOferta']['type'];
            $tamano_imagen = $_FILES['imagenOferta']['size'];

            if ($tamano_imagen <= 10000000) {
                if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/jpj" || $tipo_imagen == "image/gif") {

                    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . 'SportHouse/lib/img/Ofertas/';

                    move_uploaded_file($_FILES['imagenOferta']['tmp_name'], $carpeta_destino . $nombre_imagen);

                    $descripcion = $this->input->post("descripcionOferta");


                    $this->modeloAdministrador->addOferta($descripcion, $nombre_imagen);
                    redirect("index.php/ModuloOfertas");
                } else {
                    echo "El formato de la imagen tiene que ser jpg, png, jpeg o gif.";
                }
            } else {
                echo "El tamaño de la imagen supera el limite";
            }
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function verOferta() {
        if (count($this->session->userdata("administrador")) > 0) {
            echo json_encode($this->modeloAdministrador->verOfertas());
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function eliminarOferta() {
        if (count($this->session->userdata("administrador")) > 0) {
            $id = $this->input->post("idOferta");
            $imagen = $this->input->post("imagen");
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . 'SportHouse/lib/img/Ofertas/';
            unlink($carpeta_destino . $imagen);
            $this->modeloAdministrador->eliminarOferta($id);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function editarOferta() {
        if (count($this->session->userdata("administrador")) > 0) {
            $id = $this->input->post("id");
            $nombre = $this->input->post("nombre");
            $estado = $this->input->post("estado");

            $this->modeloAdministrador->editOferta($id, $nombre, $estado);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

}

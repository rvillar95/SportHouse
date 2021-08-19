<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Entrenador extends CI_Controller {

    public function index() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $this->load->view('Entrenador/index.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function __construct() {
        parent::__construct();
        $this->load->model("modeloEntrenador");
    }

    public function moduloControl() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $this->load->view('Entrenador/gestionControl.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function moduloConsejo() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $this->load->view('Entrenador/gestionConsejo.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function moduloRutina() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $this->load->view('Entrenador/gestionRutina.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function moduloFicha() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $this->load->view('Entrenador/gestionFichaMedica.php');
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function crearConsejo() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $nombre_imagen = $_FILES['imagenConsejo']['name'];
            $tipo_imagen = $_FILES['imagenConsejo']['type'];
            $tamano_imagen = $_FILES['imagenConsejo']['size'];

            if ($tamano_imagen <= 10000000) {
                if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/jpj" || $tipo_imagen == "image/gif") {
                    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . 'SportHouse/lib/img/Consejos/';
                    move_uploaded_file($_FILES['imagenConsejo']['tmp_name'], $carpeta_destino . $nombre_imagen);
                    $nombre = $this->input->post("nombre");
                    $consejo = $this->input->post("consejo");
                    $usuario = $this->input->post("usuario");
                    $idusuario = $this->input->post("idusuario");
                    $this->modeloEntrenador->addConsejo($nombre, $consejo, $usuario, $idusuario, $nombre_imagen);
                    redirect("index.php/ModuloConsejo");
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

    public function getUsuarioConsejo() {
        if (count($this->session->userdata("entrenador")) > 0) {
            echo json_encode($this->modeloEntrenador->getUsuarioConsejo());
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getConsejosXadmin() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $id = $this->input->post("id");
            echo json_encode($this->modeloEntrenador->getConsejosXadmin($id));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getConsejosInactivos() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $id = $this->input->post("id");
            echo json_encode($this->modeloEntrenador->getConsejosInactivos($id));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getDetalleConsejos() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $id = $this->input->post("id");
            echo json_encode($this->modeloEntrenador->getDetalleConsejos($id));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function eliminarConsejos() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $id = $this->input->post("id");
            $imagen = $this->input->post("imagen");
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . 'SportHouse/lib/img/Consejos/';
            unlink($carpeta_destino . $imagen);
            $this->modeloEntrenador->eliminarConsejos($id);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function editarConsejo() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $id = $this->input->post("id");
            $nombre = $this->input->post("nombre");
            $consejo = $this->input->post("consejo");
            $estado = $this->input->post("estado");
            $this->modeloEntrenador->editConsejo($id, $nombre, $consejo, $estado);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function agregarControl() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $peso = $this->input->post("peso");
            $porcentajeGrasa = $this->input->post("porcentajeGrasa");
            $pecho = $this->input->post("pecho");
            $cintura = $this->input->post("cintura");
            $cadera = $this->input->post("cadera");
            $muslo = $this->input->post("muslo");
            $brazo = $this->input->post("brazo");
            $eBiolog = $this->input->post("eBiolog");
            $mMusc = $this->input->post("mMusc");
            $gVicer = $this->input->post("gVicer");
            $calorias = $this->input->post("calorias");
            $imc = $this->input->post("imc");
            $usuario = $this->input->post("usuario");
            $entrenador = $this->input->post("entrenador");

            $this->modeloEntrenador->agregarControl($peso, $porcentajeGrasa, $pecho, $cintura, $cadera, $muslo, $brazo, $eBiolog, $mMusc, $gVicer, $calorias, $imc, $usuario, $entrenador);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getControlXadmin() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $id = $this->input->post("id");
            echo json_encode($this->modeloEntrenador->getControlXadmin($id));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getDetalleControl() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $id = $this->input->post("id");
            echo json_encode($this->modeloEntrenador->getDetalleControl($id));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function editControl() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $id = $this->input->post("id");
            $peso = $this->input->post("peso");
            $porcentajeGrasa = $this->input->post("porcentajeGrasa");
            $pecho = $this->input->post("pecho");
            $cintura = $this->input->post("cintura");
            $cadera = $this->input->post("cadera");
            $muslo = $this->input->post("muslo");
            $brazo = $this->input->post("brazo");
            $eBiolog = $this->input->post("eBiolog");
            $mMusc = $this->input->post("mMusc");
            $gVicer = $this->input->post("gVicer");
            $calorias = $this->input->post("calorias");
            $imc = $this->input->post("imc");
            $estado = $this->input->post("estado");
            $this->modeloEntrenador->editarControl($id, $peso, $porcentajeGrasa, $pecho, $cintura, $cadera, $muslo, $brazo, $eBiolog, $mMusc, $gVicer, $calorias, $imc, $estado);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function crearEjercicio() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $nombre_imagen = $_FILES['imagenMaquina']['name'];
            $tipo_imagen = $_FILES['imagenMaquina']['type'];
            $tamano_imagen = $_FILES['imagenMaquina']['size'];

            if ($tamano_imagen <= 10000000) {
                if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/jpj" || $tipo_imagen == "image/gif") {
                    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . 'SportHouse/lib/img/Ejercicios/';
                    move_uploaded_file($_FILES['imagenMaquina']['tmp_name'], $carpeta_destino . $nombre_imagen);
                    $descripcionEjercicio = $this->input->post("descripcionRutina");
                    $numeroMaquina = $this->input->post("numeroMaquina");
                    $this->modeloEntrenador->addEjercicio($descripcionEjercicio, $numeroMaquina, $nombre_imagen);
                    redirect("index.php/ModuloRutina");
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

    public function verEjercicio() {
        if (count($this->session->userdata("entrenador")) > 0) {
            echo json_encode($this->modeloEntrenador->verEjercicios());
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function addRutina() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $entrenador = $this->input->post("entrenador");
            $fechaEvaluacion = $this->input->post("fechaEvaluacion");
            $observacion = $this->input->post("observacion");
            $fechaSiguiente = $this->input->post("fechaSiguiente");
            $ejercicio = $this->input->post("ejercicio");
            $usuario = $this->input->post("usuario");
            $this->modeloEntrenador->addRutina($entrenador, $fechaEvaluacion, $observacion, $fechaSiguiente, $ejercicio, $usuario);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function verRutinaCompleta() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));
            $books = $this->modeloEntrenador->getRutinaCompleta();
            $data = array();
            foreach ($books->result() as $r) {
                $data[] = array(
                    $r->idRutina,
                    $r->fechaEvaluacion,
                    $r->observacion,
                    $r->fechaSiguienteEvaluacion,
                    $r->nombreUsuario
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

    public function editRutina() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $id = $this->input->post("id");
            $repeticiones = $this->input->post("repeticiones");
            $series = $this->input->post("series");
            $this->modeloEntrenador->editRutina($id, $repeticiones, $series);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getDetalleRutina() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $id = $this->input->post("id");
            echo json_encode($this->modeloEntrenador->getDetalleRutina($id));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getFichaMedica() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));
            $books = $this->modeloEntrenador->getFichaMedica();
            $data = array();
            foreach ($books->result() as $r) {
                $data[] = array(
                    $r->idUsuario,
                    $r->rut,
                    $r->nombre,
                    $r->fechaDeNacimiento,
                    $r->email,
                    $r->fichaMedica,
                    $r->descripcion,
                    $r->ocupacion
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

    public function getDetalleFicha() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $id = $this->input->post("id");
            $lista = $this->modeloEntrenador->getDetalleFichaMedica($id);
            $longitud = count($lista);
            for ($i = 0; $i < $longitud; $i++) {
                //saco el valor de cada elemento
                if ($i == 0) {
                    $r1 = $lista[$i];
                }
                if ($i == 1) {
                    $r2 = $lista[$i];
                }
            }
            if ($r1 == 0) {
                echo json_encode(array("msg" => "vacio", "resultado" => $r1, "resultado" => $r2));
            } else if ($r1 == 1) {
                echo json_encode(array("msg" => "ok", "resultado" => $r2));
            }
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function addFichaMedica() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $id = $this->input->post("id");
            $medicamentoContraIndicado = $this->input->post("medicamentoContraIndicado");
            $lesion = $this->input->post("lesion");
            $patologia = $this->input->post("patologia");
            $intervencionQuirurgica = $this->input->post("intervencionQuirurgica");
            $fechaDeporte = $this->input->post("fechaDeporte");
            $observacion = $this->input->post("observacion");

            $this->modeloEntrenador->addFichaMedica($id, $medicamentoContraIndicado, $lesion, $patologia, $intervencionQuirurgica, $fechaDeporte, $observacion);
            echo json_encode(array("msg" => "ok"));
        } else {
            $this->load->view('Errormsg');
        }
    }

    public function getControlXadminInactivo() {
        if (count($this->session->userdata("entrenador")) > 0) {
            $id = $this->input->post("id");
            echo json_encode($this->modeloEntrenador->getControlXadminInactivo($id));
        } else {
            $this->load->view('Errormsg');
        }
    }

}

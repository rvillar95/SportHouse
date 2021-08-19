<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class adminController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("AdminModel");
    }

    public function index() {

        $this->load->view('menuAdmin.php');
    }

    public function iniciarSesion() {
        $correo = $this->input->post("correo");
        $clave = $this->input->post("clave");
        $user = $this->AdminModel->IniciarSesion($correo, $clave);
        if (count($user) > 0) {
            $this->session->set_userdata("admin", $user);
        } else {
            echo json_encode(array("msg" => "error"));
        }
    }

    

    
    
   

    public function subirFoto(){
        $nombre_imagen = $_FILES['foto']['name'];
        $tipo_imagen=$_FILES['foto']['type'];
        $tamano_imagen=$_FILES['foto']['size'];
        $estado = 1;
        if ($tamano_imagen<=10000000) {
            if ($tipo_imagen=="image/jpeg" ||$tipo_imagen=="image/png" ||$tipo_imagen=="image/jpj" ||$tipo_imagen=="image/gif" ) {

                $carpeta_destino= $_SERVER['DOCUMENT_ROOT'].'Sport/lib/img/Ofertas/';

                move_uploaded_file($_FILES['foto']['tmp_name'], $carpeta_destino.$nombre_imagen);

                $nombre = $this->input->post("nombre");

                $this->AdminModel->agregarOferta($nombre,$nombre_imagen,$estado);
                redirect("index.php/Administrador");
            }else{
                echo "El formato de la imagen tiene que ser jpg, png, jpeg o gif.";
            }
        }else{
            echo "El tamaño de la imagen supera el limite";
        }
    }

    public function download(){
        $tipo = $this->input->post("tipo");
        $ruta = $this->input->post("ruta");
        $base = file("C:/wamp/www/Freddy/lib/img/PDF/".$ruta);
        $base2 = implode("", $base);

        header("Content-type:".$tipo);
        header("Content-Disposition: attachment; filename=".$ruta);
        echo $base2;

    }

    

    public function getClases(){
        echo json_encode($this->AdminModel->verClases());
    }

   

    public function getOfertas(){
        echo json_encode($this->AdminModel->verOfertas());
    }
    
    public function buscarUser(){
        $rut = $this->input->post("rutUsuario");
        echo json_encode($this->AdminModel->getUsuario($rut));
    }

}

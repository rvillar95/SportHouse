<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ModeloEntrenador extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('Entrenador/index.php');
    }

    public function getUltimoConsejo()
    {
        $this->db->select('MAX(idConsejo) AS "id"');
        $var = $this->db->get("consejo")->result();
        return ($var[0]->id) + 1;
    }

    public function getUltimaFichaMedica()
    {
        $this->db->select('MAX(idFichaMedica) AS "id"');
        $var = $this->db->get("fichamedica")->result();
        return ($var[0]->id) + 1;
    }

    public function getUltimaRutina()
    {
        $this->db->select('MAX(idRutina) AS "id"');
        $var = $this->db->get("rutina")->result();
        return ($var[0]->id) + 1;
    }

    public function getUltimaRutinaEjercicio()
    {
        $this->db->select('MAX(idRutinaEjercicio) AS "id"');
        $var = $this->db->get("rutinaejercicio")->result();
        return ($var[0]->id) + 1;
    }

    public function getUltimoControl()
    {
        $this->db->select('MAX(idControl) AS "id"');
        $var = $this->db->get("control")->result();
        return ($var[0]->id) + 1;
    }

    public function getUsuarioConsejo()
    {
        $this->db->select("t.usuario as id,concat(o.nombre,' ',o.apellido) as nombreUsuario");
        $this->db->from("tipousuario t");
        $this->db->join("usuario o", "o.idUsuario = t.usuario");
        $this->db->where("t.tipo = 3");
        return $this->db->get()->result();
    }

    public function addConsejo($nombre, $consejo, $usuario, $idusuario, $nombre_imagen)
    {

        $ultimoconsejo = $this->getUltimoConsejo();
        $data = array(
            "titulo" => $nombre,
            "descripcion" => $consejo,
            "imagen" => $nombre_imagen,
            "estado" => 1
        );
        $this->db->insert("consejo", $data);

        $data2 = array(
            "usuario" => $usuario,
            "consejo" => $ultimoconsejo,
            "entrenador" => $idusuario
        );
        $this->db->insert("usuarioconsejo", $data2);
    }

    public function getConsejosXadmin($id)
    {
        $this->db->select("c.idConsejo,c.titulo,c.descripcion,c.imagen,u.entrenador,concat(o.nombre,' ',o.apellido) as nombreUsuario,c.estado");
        $this->db->from("consejo c");
        $this->db->join("usuarioconsejo u", "u.consejo = c.idConsejo");
        $this->db->join("usuario o", "o.idUsuario = u.usuario");
        $this->db->where("u.entrenador", $id);
        $this->db->where("c.estado", 1);
        return $this->db->get()->result();
    }

    public function getUsuariosConsejos()
    {
        $this->db->select("idConsejo,titulo,descripcion,imagen");
        $this->db->from("consejo");
        return $this->db->get()->result();
    }

    public function getDetalleConsejos($id)
    {
        $this->db->select("concat(u.nombre,' ',u.apellido) as nombreUsuario");
        $this->db->from("usuario u");
        $this->db->join("usuarioconsejo t", "t.usuario = u.idUsuario");

        $this->db->where("t.consejo ", $id);
        return $this->db->get()->result();
    }

    public function eliminarConsejos($id)
    {
        $this->db->where("consejo", $id);
        $this->db->delete("usuarioconsejo");
        $this->db->where("idConsejo", $id);
        $this->db->delete("consejo");
    }

    public function editConsejo($id, $nombre, $consejo, $estado)
    {
        $data = array(
            "titulo" => $nombre,
            "descripcion" => $consejo,
            "estado" => $estado
        );
        $this->db->where('idConsejo', $id);
        return $this->db->update("consejo", $data);
    }

    public function agregarControl($peso, $porcentajeGrasa, $pecho, $cintura, $cadera, $muslo, $brazo, $eBiolog, $mMusc, $gVicer, $calorias, $imc, $usuario, $entrenador)
    {
        $ultimocontrol = $this->getUltimoControl();
        date_default_timezone_set("America/Santiago");
        $fecha = date('Y-m-d H:i:s');
        $data = array(
            "fecha" => $fecha,
            "peso" => $peso,
            "porcentajeGrasa" => $porcentajeGrasa,
            "pecho" => $pecho,
            "cintura" => $cintura,
            "cadera" => $cadera,
            "muslo" => $muslo,
            "brazo" => $brazo,
            "eBiolog" => $eBiolog,
            "mMusc" => $mMusc,
            "gVicer" => $gVicer,
            "calorias" => $calorias,
            "imc" => $imc,
            "estado" => 1
        );
        $this->db->insert("control", $data);

        $data2 = array(
            "usuario" => $usuario,
            "control" => $ultimocontrol,
            "entrenador" => $entrenador
        );
        $this->db->insert("usuariocontrol", $data2);
    }

    public function getControlXadmin($id)
    {
        $this->db->select("c.idControl,c.fecha,c.peso,c.porcentajeGrasa,c.pecho,c.cintura,c.cadera,c.muslo,c.brazo,c.eBiolog,c.mMusc,c.gVicer,c.calorias,c.imc,u.entrenador,concat(o.nombre,' ',o.apellido) as nombreUsuario,c.estado");
        $this->db->from("control c");
        $this->db->join("usuariocontrol u", "u.control = c.idControl");
        $this->db->join("usuario o", "o.idUsuario = u.usuario");
        $this->db->where("u.entrenador", $id);
        $this->db->where("c.estado", 1);

        return $this->db->get()->result();
    }

    public function getControlXadminInactivo($id)
    {
        $this->db->select("c.idControl,c.fecha,c.peso,c.porcentajeGrasa,c.pecho,c.cintura,c.cadera,c.muslo,c.brazo,c.eBiolog,c.mMusc,c.gVicer,c.calorias,c.imc,u.entrenador,concat(o.nombre,' ',o.apellido) as nombreUsuario,c.estado");
        $this->db->from("control c");
        $this->db->join("usuariocontrol u", "u.control = c.idControl");
        $this->db->join("usuario o", "o.idUsuario = u.usuario");
        $this->db->where("u.entrenador", $id);
        $this->db->where("c.estado", 2);
        return $this->db->get()->result();
    }

    public function getDetalleControl($id)
    {
        $this->db->select("concat(u.nombre,' ',u.apellido) as nombreUsuario");
        $this->db->from("usuario u");
        $this->db->join("usuariocontrol t", "t.usuario = u.idUsuario");
        $this->db->where("t.control ", $id);
        return $this->db->get()->result();
    }

    public function editarControl($id, $peso, $porcentajeGrasa, $pecho, $cintura, $cadera, $muslo, $brazo, $eBiolog, $mMusc, $gVicer, $calorias, $imc, $estado)
    {
        $data = array(
            "peso" => $peso,
            "porcentajeGrasa" => $porcentajeGrasa,
            "pecho" => $pecho,
            "cintura" => $cintura,
            "cadera" => $cadera,
            "muslo" => $muslo,
            "brazo" => $brazo,
            "eBiolog" => $eBiolog,
            "mMusc" => $mMusc,
            "gVicer" => $gVicer,
            "calorias" => $calorias,
            "imc" => $imc,
            "estado" => $estado
        );
        $this->db->where('idControl', $id);
        $this->db->update("control", $data);
    }

    public function getConsejosInactivos($id)
    {
        $this->db->select("c.idConsejo,c.titulo,c.descripcion,c.imagen,u.entrenador,concat(o.nombre,' ',o.apellido) as nombreUsuario,c.estado");
        $this->db->from("consejo c");
        $this->db->join("usuarioconsejo u", "u.consejo = c.idConsejo");
        $this->db->join("usuario o", "o.idUsuario = u.usuario");
        $this->db->where("u.entrenador", $id);
        $this->db->where("c.estado", 2);

        return $this->db->get()->result();
    }

    public function addEjercicio($descripcionEjercicio, $numeroMaquina, $nombre_imagen)
    {
        $data = array(
            "descripcion" => $descripcionEjercicio,
            "numeroMaquina" => $numeroMaquina,
            "imagen" => $nombre_imagen
        );
        $this->db->insert('ejercicio', $data);
    }

    public function verEjercicios()
    {
        return $this->db->get("ejercicio")->result();
    }

    public function addRutina($entrenador, $fechaEvaluacion, $observacion, $fechaSiguiente, $ejercicio, $usuario)
    {
        $this->db->trans_begin();
        $idRutina = $this->getUltimaRutina();
        $idRutinaEjercicio = $this->getUltimaRutinaEjercicio();
        $data = array(
            "fechaEvaluacion" => $fechaEvaluacion,
            "observacion" => $observacion,
            "fechaSiguienteEvaluacion" => $fechaSiguiente
        );
        $this->db->insert('rutina', $data);
        foreach ($ejercicio as $value) {
            $data = array(
                "rutina" => $idRutina,
                "ejercicio" => $value,
                "usuario" => $usuario,
                "series" => 0,
                "repeticiones" => 0
            );
            $this->db->insert('rutinaejercicio', $data, FALSE);
        }
        $data = array(
            "usuario" => $usuario,
            "rutinaejercicio" => $idRutina,
            "entrenador" => $entrenador
        );
        $this->db->insert('rutinaejerciciousuario', $data, FALSE);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
    }

    function addMensajeCurso($nombre, $descripcion, $fecha, $idCurso, $alumnos, $idProfesor)
    {
        $data = array(
            "nombreMensaje" => $nombre,
            "descripcionMensaje" => $descripcion,
            "fechaCreacionMensaje" => $fecha,
            "curso_profesor_idCurso_Profesor" => $idCurso,
            "profesor_idProfesor" => $idProfesor
        );
        $this->db->insert("mensaje", $data);


        $idMensaje = $this->getUltimoMensaje();


        foreach ($alumnos as $value) {
            $data = array(
                "fechaLlegadaDetalle_Mensaje" => "Procesando",
                "fechaVistoDetalle_Mensaje" => "Procesando",
                "mensaje_idMensaje" => $idMensaje,
                "alumno_idAlumno" => $value
            );
            $this->db->insert('mensaje', $data, FALSE);
        }

        foreach ($alumnos as $value) {

            $this->db->select("apoderado_idApoderado");
            $this->db->from("alumno");
            $this->db->where("idAlumno", $value);
            $idApoderado = $this->db->get()->result();

            $data = array(
                "fechaLlegadaDetalle_Mensaje" => "Procesando",
                "fechaVistoDetalle_Mensaje" => "Procesando",
                "mensaje_idMensaje" => $idMensaje,
                "apoderado_idApoderado" => $idApoderado
            );
            $total = $this->db->insert('mensaje', $data);
        }

        return $total;
    }


    public function getRutinaCompleta()
    {
        $this->db->select("r.idRutina,r.fechaEvaluacion, r.observacion, r.fechaSiguienteEvaluacion,concat(u.nombre,' ',u.apellido) as nombreUsuario");
        $this->db->from("rutina r");
        $this->db->join("rutinaejerciciousuario k", "k.rutinaEjercicio = r.idRutina");
        $this->db->join("usuario u", "k.usuario = u.idUsuario");
        return $this->db->get();
    }

    //    public function getRutinaCompleta() {
    //        $this->db->select("k.idRutinaEjercicio, r.fechaEvaluacion, r.observacion, r.fechaSiguienteEvaluacion, e.descripcion, e.numeroMaquina,k.series,k.repeticiones , k.usuario,CONCAT( u.nombre,  ' ', u.apellido ) AS nombreUsuario");
    //        $this->db->from("rutinaejercicio k");
    //        $this->db->join("rutina r", "r.idRutina = k.rutina");
    //        $this->db->join("ejercicio e", "e.idEjercicio = k.ejercicio");
    //        $this->db->join("usuario u", "u.idUsuario = k.usuario");
    //        $this->db->order_by("k.idRutinaEjercicio", "asc");
    //        return $this->db->get();
    //    }

    public function editRutina($id, $repeticiones, $series)
    {
        $data = array(
            "series" => $series,
            "repeticiones" => $repeticiones
        );
        $this->db->where('idRutinaEjercicio', $id);
        $this->db->update("rutinaejercicio", $data);
    }

    public function getDetalleRutina($id)
    {
        $this->db->select("r.idRutinaEjercicio, e.descripcion, r.series, r.repeticiones");
        $this->db->from("rutinaejercicio r");
        $this->db->join("ejercicio e", "e.idEjercicio = r.ejercicio");
        $this->db->where("r.rutina", $id);
        return $this->db->get()->result();
    }

    public function getFichaMedica()
    {
        $this->db->select("u.idUsuario,u.rut,concat(u.nombre,' ' ,u.apellido) as nombre,u.fechaDeNacimiento, u.email,u.fichaMedica,e.descripcion,o.descripcion as ocupacion");
        $this->db->from("usuario u");
        $this->db->join("ocupacion o", "u.ocupacion = o.idOcupacion");
        $this->db->join("estado e", "u.estado = e.idEstado");
        return $this->db->get();
    }

    public function getDetalleFichaMedica($id)
    {
        $this->db->select("f.idFichaMedica,f.medicamentoContraIndicado,f.lesion,f.patologia,f.intervencionQuirurgica,f.ultimaFechaRealizaDeporte,f.observacion");
        $this->db->from("fichamedica f");
        $this->db->join("usuario u", "u.fichaMedica = f.idFichaMedica");
        $this->db->where("u.fichaMedica", $id);

        $query = $this->db->query("select f.idFichaMedica,f.medicamentoContraIndicado,f.lesion,f.patologia,f.intervencionQuirurgica,f.ultimaFechaRealizaDeporte,f.observacion from fichamedica f join usuario u on u.fichaMedica = f.idFichaMedica where u.fichaMedica = '$id'");
        $totalfilas = $query->num_rows();
        $filas = $this->db->get()->result();
        $resultado = array($totalfilas, $filas);

        return $resultado;
    }



    public function addFichaMedica($id, $medicamentoContraIndicado, $lesion, $patologia, $intervencionQuirurgica, $fechaDeporte, $observacion)
    {
        $idFicha = $this->getUltimaFichaMedica();
        $data = array(
            "medicamentoContraIndicado" => $medicamentoContraIndicado,
            "lesion" => $lesion,
            "patologia" => $patologia,
            "intervencionQuirurgica" => $intervencionQuirurgica,
            "ultimaFechaRealizaDeporte" => $fechaDeporte,
            "observacion" => $observacion
        );
        $this->db->insert('fichaMedica', $data);
        $data2 = array("fichaMedica" => $idFicha);
        $this->db->where('idUsuario', $id);
        $this->db->update("usuario", $data2);
    }
}

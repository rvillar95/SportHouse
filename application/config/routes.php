<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//Vistas
//Ingreso de Usuarios
$route['Login'] = 'welcome/login';
$route['iniciarSesion'] = 'welcome/iniciarSesion';
$route['cerrarSesion'] = 'welcome/cerrarSesion';
$route['sesionMultiple'] = 'welcome/sesionMultiple';
$route['prueba'] = 'welcome/admin';





//Menu Administrador
$route['Administrador'] = 'Administrador/index';
$route['ModuloUsuarios'] = 'Administrador/ModuloUsuarios';
$route['ModuloClases'] = 'Administrador/ModuloClases';
$route['ModuloOfertas'] = 'Administrador/ModuloOfertas';

//funciones Administrador
$route['getTipo'] = 'Administrador/getTipo';
$route['addUser'] = 'Administrador/addUser';
$route['getUsuario'] = 'Administrador/getUser';
        
$route['getDia'] ='Administrador/getDia';
$route['getSalon'] ='Administrador/getSalon';
$route['getProfesor'] ='Administrador/getProfesor';

$route['getOcupacion'] = 'Administrador/getOcupacion';
$route['getEstado'] = 'Administrador/getEstado';
$route['editUser'] = 'Administrador/editUser';

$route['validarRut'] = "Administrador/validarRut";

//modulo Clase
$route['addClase'] = 'Administrador/addClase';
$route['getClase'] = 'Administrador/getClases';
$route['editClase'] = 'Administrador/editClase';
$route['eliminarEmpleado'] = 'Administrador/eliminarEmpleado';
//modulo Oferta
$route['crearOferta'] = 'Administrador/addOferta';
$route['verOferta'] = 'Administrador/verOferta';
$route['eliminarOferta'] = 'Administrador/eliminarOferta';
$route['editOferta'] = 'Administrador/editarOferta';


//----------------------------o-----------------------------
//Menu Entrenador
$route['Entrenador'] = 'Entrenador/index';
$route['ModuloControl'] = 'Entrenador/moduloControl';
$route['ModuloConsejo'] = 'Entrenador/moduloConsejo';
$route['ModuloRutina'] = 'Entrenador/moduloRutina';
$route['ModuloFichaMedica'] = 'Entrenador/moduloFicha';

//funciones Entrenador
$route['crearConsejo'] = 'Entrenador/crearConsejo';
$route['getUsuarioConsejo'] = 'Entrenador/getUsuarioConsejo';
$route['getConsejosXadmin'] = 'Entrenador/getConsejosXadmin';
$route['getDetalleConsejos'] = 'Entrenador/getDetalleConsejos';
$route['eliminarConsejos'] = 'Entrenador/eliminarConsejos';
$route['editConsejo'] = 'Entrenador/editarConsejo';
$route['getConsejosInactivos'] = 'Entrenador/getConsejosInactivos';

$route['agregarControl'] = 'Entrenador/agregarControl';
$route['getControlXadmin'] = 'Entrenador/getControlXadmin';
$route['getDetalleControl'] = 'Entrenador/getDetalleControl';
$route['editControl'] = 'Entrenador/editControl';
$route['getControlXadminInactivo'] = 'Entrenador/getControlXadminInactivo';


$route['crearEjercicio'] = 'Entrenador/crearEjercicio';
$route['verEjercicio'] = 'Entrenador/verEjercicio';
$route['addRutina'] = 'Entrenador/addRutina';
$route['verRutinaCompleta'] = 'Entrenador/verRutinaCompleta';
$route['editRutina'] = 'Entrenador/editRutina';
$route['getDetalleRutina'] = 'Entrenador/getDetalleRutina';

$route['getFichaMedica'] = 'Entrenador/getFichaMedica';
$route['getDetalleFicha'] = 'Entrenador/getDetalleFicha';
$route['addFichaMedica'] = 'Entrenador/addFichaMedica';

//----------------------------o-----------------------------


//Menu Socio
$route['Socio'] = 'Socio/index';
$route['Perfil'] = 'Socio/Perfil';
$route['Clases'] = 'Socio/Clases';
$route['Controles'] = 'Socio/Controles';
$route['Rutinas'] = 'Socio/Rutinas';
$route['Consejos'] = 'Socio/Consejos';

//funciones Socio
$route['editarPerfil'] = 'Socio/editarPerfil';
$route['getClaseSocio'] = 'Socio/getClaseSocio';
$route['agregarAsistencia'] = 'Socio/agregarAsistencia';
$route['verificarAsistencia'] = 'Socio/verificarAsistencia';
$route['getClaseSocioTomadas'] = 'Socio/getClaseSocioTomadas';
$route['getControlXSocio'] = 'Socio/getControlXSocio';
$route['getConsejosXSocio'] = 'Socio/getConsejosXSocio';
$route['getRutinaSocio'] = 'Socio/getRutinaSocio';
$route['getDetalleRutinaSocio'] = 'Socio/getDetalleRutinaSocio';
$route['verPublicidad'] = 'Socio/verPublicidad';







//Menu Profesor
$route['Profesor'] = 'Profesor/index';
$route['RegistroAsistencia'] = 'Profesor/asistencia';
$route['ConsejosProfesor'] = 'Profesor/consejos';


//funciones Profesor
$route['getClaseProfesor'] = 'Profesor/getClaseProfesor';
$route['getDetalleClases'] = 'Profesor/getDetalleClases';
$route['getAsistencia'] = 'Profesor/getAsistencia';






//Iniciar Sesion
$route['iniciar'] = 'welcome/Sesion';


//Administrador

$route['buscarUsuario'] = 'adminController/buscarUser';








$route['UploadFoto'] = 'adminController/subirFoto1';
$route['getOfertas'] = 'adminController/getOfertas';

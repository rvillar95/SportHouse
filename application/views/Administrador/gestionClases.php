<!DOCTYPE html>
<?php $user = $this->session->userdata("administrador"); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SportsHouse | Modulo Clases</title>
        <link rel="icon" href="<?php echo base_url(); ?>lib/img/icon.png" type="image/png">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link href="<?php echo base_url(); ?>lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="<?php echo base_url(); ?>lib/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>lib/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
        <!-- DataTables -->
        <link href="<?php echo base_url(); ?>lib/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>lib/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url(); ?>lib/css/_all-skins.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>lib/css/animate.css" rel="stylesheet" type="text/css"/>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="<?php echo base_url()?>index.php/Administrador" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>SP</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Sports</b>House</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notificacion de mensaje -->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Usuario conectado, logo de user y nombre -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url() ?>lib/img/user.png" class="user-image" alt="User Image">
                                    <span class="hidden-xs"> <?php echo $user[0]->descripcion ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url() ?>lib/img/user.png" class="img-circle" alt="User Image">

                                        <p>
                                            <?php echo $user[0]->nombre. ' ' .$user[0]->apellido ?>
                                            <small><?php echo $user[0]->email ?></small>
                                        </p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">

                                        </div>
                                        <div class="pull-right">
                                            <a id="btn" class="btn btn-default btn-flat">Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url() ?>lib/img/user.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $user[0]->nombre. ' ' .$user[0]->apellido ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">Menu de Navegación</li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Administrador"><i class="fa fa-home"></i> <span>Inicio</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/ModuloUsuarios"><i class="fa fa-user-plus"></i> <span>Modulo Usuarios</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/ModuloClases"><i class="fa fa-heartbeat"></i> <span>Modulo Clases</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/ModuloOfertas"><i class="glyphicon glyphicon-bullhorn"></i> <span>Modulo Ofertas</span></a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Modulo de Clases
                        <small>Ingresa las clases que quieras.</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Modulo Clases</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">En este modulo podras agregar las clases que quieras.</h3>
                                </div>
                                <!-- /.box-header -->

                                <main>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="nombreClase">Nombre Clase</label>
                                            <input type="text" class="form-control" id="nombreClase" placeholder="Ingrese el Nombre de la Clase">
                                        </div>
                                        <div class="form-group" >
                                            <select id="selectDia" class="form-control" >

                                            </select>
                                        </div>
                                        <div class="form-group" >
                                            <select id="selectHora" class="form-control" >

                                            </select>
                                        </div>
                                        <div class="form-group" >
                                            <select id="selectSalon" class="form-control" >

                                            </select>
                                        </div>
                                        <div class="form-group" >
                                            <select id="selectProfesor" class="form-control" >

                                            </select>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" id="btnAgregarClase"  class="btn btn-primary" style="background-color: #00569e; color: #b4ef56; ">Registrar Clase</button>
                                        </div>

                                    </div>
                                </main>

                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Busca al Usuario que Desees, solo ingresando su Rut</h3>
                                </div>
                                <!-- /.box-header -->

                                <main>
                                    <div class="box-body table-responsive">
                                        <table id="tabla_clases" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center">Id</th>
                                                    <th scope="col" class="text-center">Nombre</th>
                                                    <th scope="col" class="text-center">Asistentes</th>
                                                    <th scope="col" class="text-center">día</th>
                                                    <th scope="col" class="text-center">Hora</th>
                                                    <th scope="col" class="text-center">Salon</th>
                                                    <th scope="col" class="text-center">Profesor</th>
                                                    <th scope="col" class="text-center">Editar</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <div class="box-footer">
                                        </div>
                                    </div>
                                </main>

                                <!-- /.box-body -->
                            </div>
                        </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.0
                </div>
               <strong>Copyright &copy; 2019-2020 <a href="https://solucionesvillar.cl">Soluciones Villar</a>.</strong> Todos los derechos reservados.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <ul class="control-sidebar-menu">
                        </ul>
                    </div>
                </div>
            </aside>

            <div class="control-sidebar-bg"></div>
        </div>

        <div class="modal fade" id="modal-clase">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Editar Clase</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombreC">Nombre Clase</label>
                            <input type="text" class="form-control" id="nombreC" required="">
                        </div>
                        <div class="form-group">
                            <label for="asistentesC">Asistentes</label>
                            <input type="text" class="form-control" id="asistentesC" required="">
                        </div>
                        <div class="form-group" style="display: none;">

                            <input type="text" class="form-control" id="idC" required="">
                        </div>
                        <div class="form-group" style="display: none;">

                            <input type="text" class="form-control" id="idClaseEliminar" required="">
                        </div>


                        <div class="form-group" >
                            <label>Día</label>
                            <select id="selectDia2" class="form-control" >

                            </select>
                        </div>
                        <div class="form-group" >
                            <label>Hora</label>
                            <select id="selectHora2" class="form-control" >

                            </select>
                        </div>
                        <div class="form-group" >
                            <label>Salon</label>
                            <select id="selectSalon2" class="form-control" >

                            </select>
                        </div>
                        <div class="form-group" >
                            <label>Profesor</label>
                            <select id="selectProfesor2" class="form-control" >

                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btnEditarClase">Editar Clase</button>
                    </div>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>

        <div class="modal modal-warning fade" id="modal-eliminar">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Desea Eliminar esta Clase?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
                        <button type="button" id="eliminar" class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal-dialog -->
        <!-- ./wrapper -->

        <!-- jQuery 3 -->

        <script src="<?php echo base_url(); ?>lib/js/jquery.min.js" type="text/javascript"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo base_url(); ?>lib/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url(); ?>lib/js/jquery.dataTables.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url(); ?>lib/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url(); ?>lib/js/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>lib/js/fastclick.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>lib/js/adminlte.min.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->

        <script src="<?php echo base_url(); ?>lib/js/demo.js" type="text/javascript"></script>
        <!-- page script -->
        <script src="<?php echo base_url(); ?>lib/js/myjs.js" type="text/javascript"></script>

        <script src="<?php echo base_url(); ?>lib/js/bootstrap-notify.min.js" type="text/javascript"></script>


        <script>
            function check(e) {
                tecla = (document.all) ? e.keyCode : e.which;

                //Tecla de retroceso para borrar, siempre la permite
                if (tecla == 8 || tecla == 107) {
                    return true;
                }

                // Patron de entrada, en este caso solo acepta numeros y letras
                patron = /[0-9]/;
                tecla_final = String.fromCharCode(tecla);
                return patron.test(tecla_final);
            }
            $(function () {

                $('#tabla_clases').DataTable({
                    "ajax": {
                        url: "<?php echo site_url() ?>index.php/getClase",
                        type: 'GET'
                    },
                    "columnDefs": [
                        {
                            "targets": 7,
                            "data": null,
                            "defaultContent": '<button type="button" id="btnEditarClase" class="btn btn-info" data-toggle="modal" data-target="#modal-clase"><i class="glyphicon glyphicon-pencil"></i></button>'
                        }
                        //<button type="button" id="btnEliminarClase" class="btn btn-danger" data-toggle="modal" data-target="#modal-eliminar"><i class="glyphicon glyphicon-trash"></i></button>
                    ]
                });

                $("#btn").click(function (e) {
                    e.preventDefault();
                    salir();
                });
                getSelectDia();
                getSelectSalon();
                getSelectProfesor();
                getSelectHora();




                $("#btnEditarClase").click(function (e) {
                    e.preventDefault();
                    EditarClase();

                    var table = $('#tabla_clases').DataTable();

                    table.ajax.reload(function (json) {
                        $('#btnEditarClase').val(json.lastInput);
                    });

                });

                $("#btnAgregarClase").click(function (e) {
                    e.preventDefault();
                    RegistrarClase();

                    var table = $('#tabla_clases').DataTable();

                    table.ajax.reload(function (json) {
                        $('#btnAgregarClase').val(json.lastInput);
                    });

                });

                $("body").on("click", "#btnEditarClase", function (e) {
                    e.preventDefault();
                    var id = $(this).parent().parent().children()[0];
                    var nombre = $(this).parent().parent().children()[1];
                    var asistentes = $(this).parent().parent().children()[2];
                    var hora = $(this).parent().parent().children()[4];
                    var dia = $(this).parent().parent().children()[3];

                    $("#idC").val($(id).text());
                    $("#nombreC").val($(nombre).text());
                    $("#asistentesC").val($(asistentes).text());
                });

                $("body").on("click", "#btnEliminarClase", function (e) {
                    e.preventDefault();
                    var id = $(this).parent().parent().children()[0];
                    $("#idClaseEliminar").val($(id).text());

                });

                $("body").on("click", "#eliminar", function (e) {
                    e.preventDefault();
                    var idClase = $("#idClaseEliminar").val();
                    eliminarClase(idClase);

                    var table = $('#tabla_clases').DataTable();

                    table.ajax.reload(function (json) {
                        $('#eliminar').val(json.lastInput);
                    });

                });

            });
        </script>
    </body>
</html>

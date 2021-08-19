<!DOCTYPE html>
<?php $user = $this->session->userdata("entrenador"); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SportsHouse | Modulo Rutina</title>
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
                <a href="<?php echo base_url()?>index.php/Entrenador" class="logo">
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
                            <a href="<?php echo base_url(); ?>index.php/Entrenador"><i class="fa fa-home"></i> <span>Inicio</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/ModuloConsejo"><i class="glyphicon glyphicon-check"></i> <span>Modulo Consejo</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/ModuloControl"><i class="glyphicon glyphicon-thumbs-up"></i> <span>Modulo Control</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/ModuloRutina"><i class="glyphicon glyphicon-list-alt"></i> <span>Modulo Rutina</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/ModuloFichaMedica"><i class="glyphicon glyphicon-book"></i> <span>Modulo Ficha Medica</span></a>
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
                        Modulo Rutina
                        <small>Ingresa usuarios de forma manual</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Modulo Rutina</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title" >En este modulo podras crear Ejercicios para tus socios.</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <form  action="http://127.0.0.1/SportHouse/index.php/crearEjercicio" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="descripcionRutina">Descripcion Ejercicio</label>
                                            <input type="text" class="form-control" required id="descripcionRutina" name="descripcionRutina" placeholder="Ingrese Nombre del Ejercicio">
                                        </div>
                                        <div class="form-group">
                                            <label for="numeroMaquina">Numero Maquina</label>
                                            <input type="number" class="form-control" required id="numeroMaquina" name="numeroMaquina" placeholder="Ingrese Numero de la Maquina">
                                        </div>
                                        <div class="form-group">
                                            <label for="imagenMaquina">Imagen Maquina</label>
                                            <input type="file" class="form-control" id="imagenOferta" required name="imagenMaquina" placeholder="Seleccione la Imagen">
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit"  class="btn btn-primary" style="background-color: #00569e; color: #b4ef56; ">Agregar Ejercicio</button>
                                        </div>
                                    </form>
                                </div>


                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Aca podra encontrar todos los ejercicios creados</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover" id="tabla_ejercicio">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Numero Maquina</th>
                                                <th scope="col">Imagen</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyEjercicios">


                                        </tbody>
                                    </table>
                                </div>
                                </main>

                                <!-- /.box-body -->
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title" >Crear Rutina</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="descripcionRutina">Fecha  Evaluacion</label>
                                        <input type="date" class="form-control" required id="fechaEvaluacion" name="fechaEvaluacion" placeholder="Ingrese Nombre del Ejercicio">
                                    </div>
                                    <div class="form-group">
                                        <label for="numeroMaquina">Observación</label>
                                        <select class="form-control" id="observacion">
                                            <option disabled selected>Seleccione una Opcion</option>
                                            <option value="En Proceso">En Proceso</option>
                                            <option value="No Avanza">No Avanza</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="imagenMaquina">Siguiente Evaluación</label>
                                        <input type="date" class="form-control" required id="fechaSiguienteEvaluacion" name="fechaSiguienteEvaluacion" placeholder="Ingrese Nombre del Ejercicio">
                                    </div>
                                    <div class="form-group">
                                        <label for="numeroMaquina">Ejercicio</label>
                                        <select class="form-control select2" multiple="" id="getEjercicios" >

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="numeroMaquina">Usuario</label>
                                        <select class="form-control" id="selectUsuarios" >

                                        </select>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" id="btnAgregarRutina"  class="btn btn-primary" style="background-color: #00569e; color: #b4ef56; ">Crear Rutina</button>
                                    </div>

                                </div>


                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Aca podra encontrar las Rutinas</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover" id="tabla_rutina">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Fecha Evaluación</th>
                                                <th scope="col">Observacion</th>
                                                <th scope="col">Evaluación Siguiente</th>
                                                <th scope="col">Usuario</th>
                                                <th scope="col">Editar</th>
                                            </tr>

                                        </thead>
                                        <tbody id="tbodyEjercicios">


                                        </tbody>
                                    </table>
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
        <div style="display:none;">
            <input type="text" class="form-control" id="id" name="id">
            <input type="text" class="form-control" id="idEntrenador" value="<?php echo $user[0]->idUsuario?>">
        </div>



        <div class="modal fade" id="modal-detalle">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Detalle de Rutina</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Ejercicio</th>
                                        <th scope="col">Series</th>
                                        <th scope="col">Repeticiones</th>
                                        <th scope="col">Editar</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyDetalle">


                                </tbody>
                            </table>
                        </div>
                        <div id="div_editar">
                            <div style="display: none;">
                                <input type="text" class="form-control" id="idDetalle" name="id">
                            </div>
                            <div class="row">
                                <div class=" form-group col-md-5 col-lg-5 col-sm-5">
                                    <label for="nombreC">Series</label>
                                    <input type="text" class="form-control" id="series" name="series"required="">
                                </div>


                                <div class="form-group col-md-2 col-lg-2 col-sm-2">
                                    <h1>X </h1>
                                </div>


                                <div class="form-group col-md-5 col-lg-5 col-sm-5">
                                    <label for="nombreC">Repeticiones</label>
                                    <input type="text" class="form-control" id="repeticiones" name="repeticiones"required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="editar">Editar Rutina</button>
                    </div>

                </div>
            </div>
            <!-- /.modal-content -->
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
            getEjercicios();
            getSelectEjercicio();
            getSocios();
            $("#div_editar").hide();
            $("body").on("click", "#btnEditar", function (e) {
                e.preventDefault();
                var id = $(this).parent().parent().children()[0];
                $("#id").val($(id).text());
                getDetalleRutina();
            });

            $("body").on("click", "#btnEditarDetalle", function (e) {
                e.preventDefault();
                var datos = $(this).val();
                var fila = datos.split(",");
                var id = fila[0];
                var series = fila[1];
                var repeticiones = fila[2];


                $("#idDetalle").val(id);
                $("#series").val(series);
                $("#repeticiones").val(repeticiones);
                $("#div_editar").show();
            });
            $(function () {
                $("#btn").click(function (e) {
                    e.preventDefault();
                    salir();
                });

                $("#btnAgregarRutina").click(function (e) {
                    e.preventDefault();
                    agregarRutina();
                    var table = $('#tabla_rutina').DataTable();
                    table.ajax.reload(function (json) {
                        $('#btnAgregarRutina').val(json.lastInput);
                    });
                });

                $("#editar").click(function (e) {
                    e.preventDefault();

                    editarRutina();

                });

                $('#tabla_rutina').DataTable({
                    "ajax": {
                        url: "<?php echo base_url() ?>index.php/verRutinaCompleta",
                        type: 'GET'
                    },
                    "columnDefs": [
                        {
                            "targets": 5,
                            "data": null,
                            "defaultContent": '<button type="button" id="btnEditar" class="btn btn-info" data-toggle="modal" data-target="#modal-detalle"><i class="glyphicon glyphicon-pencil"></i></button>'

                        }
                    ]
                });



            });





        </script>
    </body>
</html>

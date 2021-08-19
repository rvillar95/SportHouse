<!DOCTYPE html>
<?php $user = $this->session->userdata("entrenador"); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SportsHouse | Modulo Control</title>
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
                                            <?php echo $user[0]->nombre . ' ' . $user[0]->apellido ?>
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
                            <p><?php echo $user[0]->nombre . ' ' . $user[0]->apellido ?></p>
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
                        Modulo Control
                        <small>Ingresa Controles de forma manual</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Modulo Control</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title" >En este modulo podras crear las ofertas que quieras.</h3>
                                </div>
                                <!-- /.box-header -->

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="">Peso</label>
                                        <input type="number" class="form-control" required id="peso"  placeholder="Ingrese el Peso">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Porcentaje de Grasa</label>
                                        <input type="number" class="form-control" required id="porcentajeGrasa"  placeholder="Ingrese el % de Grasa">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pecho</label>
                                        <input type="number" class="form-control" required id="pecho"  placeholder="Ingrese Pecho ">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Cintura</label>
                                        <input type="number" class="form-control" required id="cintura"  placeholder="Ingrece Cintura">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Cadera</label>
                                        <input type="number" class="form-control" required id="cadera"  placeholder="Ingrese Cadera">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Muslo</label>
                                        <input type="number" class="form-control" required id="muslo"  placeholder="Ingrese Muslo">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Brazo</label>
                                        <input type="number" class="form-control" required id="brazo"  placeholder="Ingrese Brazo">
                                    </div>
                                    <div class="form-group">
                                        <label for="">eBiolog</label>
                                        <input type="number" class="form-control" required id="eBiolog"  placeholder="Ingrese e Biolog">
                                    </div>
                                    <div class="form-group">
                                        <label for="">mMusc</label>
                                        <input type="number" class="form-control" required id="mMusc"  placeholder="Ingrese mMusc">
                                    </div>
                                    <div class="form-group">
                                        <label for="">gVicer</label>
                                        <input type="number" class="form-control" required id="gVicer"  placeholder="Ingrese gVicer">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Calorias</label>
                                        <input type="number" class="form-control" required id="calorias"  placeholder="Ingrece Calorias">
                                    </div>
                                    <div class="form-group">
                                        <label for="">IMC</label>
                                        <input type="number" class="form-control" required id="imc"  placeholder="Ingrese IMC">
                                    </div>
                                    <div class="form-group">
                                        <label>Seleccione Usuario</label>
                                        <select class="form-control" required  id="selectUsuarios"   >
                                        </select>
                                    </div>
                                    <div class="form-group" style="display: none;">
                                        <label for="nombre">idusuario</label>
                                        <input type="text" class="form-control" required id="idusuario" value="<?php echo $user[0]->idUsuario ?>" name="idusuario" placeholder="Ingrese Descripcion de la Oferta">
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" id="btnAgregarControl" class="btn btn-primary" style="background-color: #00569e; color: #b4ef56; ">Agregar Control</button>
                                    </div>
                                </div>

                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab">Controles Activos</a></li>
                                    <li><a href="#tab_2" data-toggle="tab">Controles Inactivos</a></li>
                                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Aca podra encontrar todas los Controles Activos</h3>
                                                <!-- /.box-header -->


                                                <main>
                                                    <div class="box-body table-responsive no-padding">
                                                        <table class="table table-hover" id='tabla_control'>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Fecha</th>
                                                                    <th scope="col">Peso</th>
                                                                    <th scope="col">%Grasa</th>
                                                                    <th scope="col">Pecho</th>
                                                                    <th scope="col">Cintura</th>
                                                                    <th scope="col">Cadera</th>
                                                                    <th scope="col">Muslo</th>
                                                                    <th scope="col">Brazo</th>
                                                                    <th scope="col">eBiolog</th>
                                                                    <th scope="col">mMusc</th>
                                                                    <th scope="col">gVicer</th>
                                                                    <th scope="col">Calorias</th>
                                                                    <th scope="col">IMC</th>
                                                                    <th scope="col">Nombre Usuario</th>
                                                                    <th scope="col">Editar</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbodyControl">


                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </main>

                                                <!-- /.box-body -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Aca podra encontrar todas los Controles Inactivos </h3>
                                                <!-- /.box-header -->


                                                <main>
                                                    <div class="box-body table-responsive no-padding">
                                                        <table class="table table-hover" id='tabla_control'>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Fecha</th>
                                                                    <th scope="col">Peso</th>
                                                                    <th scope="col">%Grasa</th>
                                                                    <th scope="col">Pecho</th>
                                                                    <th scope="col">Cintura</th>
                                                                    <th scope="col">Cadera</th>
                                                                    <th scope="col">Muslo</th>
                                                                    <th scope="col">Brazo</th>
                                                                    <th scope="col">eBiolog</th>
                                                                    <th scope="col">mMusc</th>
                                                                    <th scope="col">gVicer</th>
                                                                    <th scope="col">Calorias</th>
                                                                    <th scope="col">IMC</th>
                                                                    <th scope="col">Nombre Usuario</th>
                                                                    <th scope="col">Editar</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbodyControlI">


                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </main>

                                                <!-- /.box-body -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
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

        <div class="modal fade" id="modal-control">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Editar Control</h4>
                    </div>

                    <div class="modal-body">
                        <div class="form-group" style="display: none;">
                            <input type="text" class="form-control" id="idControl" name="idControl"required="">
                        </div>
                        <div class="form-group" style="display: none;">
                            <input type="text" class="form-control" id="estado" name="estado"required="">
                        </div>

                        <div class="form-group">
                            <label for="">Peso</label>
                            <input type="number" class="form-control" required id="peso2"  placeholder="Ingrese el Peso">
                        </div>
                        <div class="form-group">
                            <label for="">Porcentaje de Grasa</label>
                            <input type="number" class="form-control" required id="porcentajeGrasa2"  placeholder="Ingrese el % de Grasa">
                        </div>
                        <div class="form-group">
                            <label for="">Pecho</label>
                            <input type="number" class="form-control" required id="pecho2"  placeholder="Ingrese Pecho ">
                        </div>
                        <div class="form-group">
                            <label for="">Cintura</label>
                            <input type="number" class="form-control" required id="cintura2"  placeholder="Ingrece Cintura">
                        </div>
                        <div class="form-group">
                            <label for="">Cadera</label>
                            <input type="number" class="form-control" required id="cadera2"  placeholder="Ingrese Cadera">
                        </div>
                        <div class="form-group">
                            <label for="">Muslo</label>
                            <input type="number" class="form-control" required id="muslo2"  placeholder="Ingrese Muslo">
                        </div>
                        <div class="form-group">
                            <label for="">Brazo</label>
                            <input type="number" class="form-control" required id="brazo2"  placeholder="Ingrese Brazo">
                        </div>
                        <div class="form-group">
                            <label for="">eBiolog</label>
                            <input type="number" class="form-control" required id="eBiolog2"  placeholder="Ingrese e Biolog">
                        </div>
                        <div class="form-group">
                            <label for="">mMusc</label>
                            <input type="number" class="form-control" required id="mMusc2"  placeholder="Ingrese mMusc">
                        </div>
                        <div class="form-group">
                            <label for="">gVicer</label>
                            <input type="number" class="form-control" required id="gVicer2"  placeholder="Ingrese gVicer">
                        </div>
                        <div class="form-group">
                            <label for="">Calorias</label>
                            <input type="number" class="form-control" required id="calorias2"  placeholder="Ingrece Calorias">
                        </div>
                        <div class="form-group">
                            <label for="">IMC</label>
                            <input type="number" class="form-control" required id="imc2"  placeholder="Ingrese IMC">
                        </div>
                        <div class="form-group">
                            <select id="getEstado" class="form-control">

                            </select>
                        </div>
                        <div class="form-group" id="listaSocios">

                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                        <!--                        <button type="button" class="btn btn-primary" id="mostrar">Mostrar Asociados</button>-->
                        <button type="button" class="btn btn-primary" id="editar">Editar Control</button>
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
            getControlXadminInactivo();
            getSelectEstadoControl();
            getUsuariosConsejos();
            $(function () {
                $("#btn").click(function (e) {
                    e.preventDefault();
                    salir();
                });
                getControlXadmin();

                $("#btnAgregarControl").click(function (e) {
                    e.preventDefault();
                    agregarControl();
                    getControlXadmin();
                });

                $("#listaSocios").hide();
                $("#mostrar").click(function (e) {
                    e.preventDefault();
                    DetalleControl();
                });
                $("body").on("click", "#btnEditarControl", function (e) {
                    e.preventDefault();
                    var datos = $(this).val();
                    var fila = datos.split(",");
                    var id = fila[0];
                    var peso = fila[2];
                    var porcentajeGrasa = fila[3];
                    var pecho = fila[4];
                    var cintura = fila[5];
                    var cadera = fila[6];
                    var muslo = fila[7];
                    var brazo = fila[8];
                    var ebiolog = fila[9];
                    var mmusc = fila[10];
                    var gvicer = fila[11];
                    var calorias = fila[12];
                    var imc = fila[13];
                    var estado = fila[14];
                    $("#idControl").val(id);
                    $("#peso2").val(peso);
                    $("#porcentajeGrasa2").val(porcentajeGrasa);
                    $("#pecho2").val(pecho);
                    $("#cintura2").val(cintura);
                    $("#cadera2").val(cadera);
                    $("#muslo2").val(muslo);
                    $("#brazo2").val(brazo);
                    $("#eBiolog2").val(ebiolog);
                    $("#mMusc2").val(mmusc);
                    $("#gVicer2").val(gvicer);
                    $("#calorias2").val(calorias);
                    $("#imc2").val(imc);
                    $("#getEstado").val(estado);

                });

                $("#editar").click(function (e) {
                    e.preventDefault();
                    EditarControl();
                });

                $("body").on("click", "#btnEliminarControl", function (e) {
                    e.preventDefault();
                    var datos = $(this).val();
                    var fila = datos.split(",");

                    $("#eliminar").click(function (e) {
                        e.preventDefault();
                        eliminarOferta(fila[0], fila[1]);
                        $(function () {

                        });
                    });


                });





            });





        </script>
    </body>
</html>

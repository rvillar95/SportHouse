<!DOCTYPE html>
<?php $user = $this->session->userdata("profesor"); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SportsHouse | Menu Profesor</title>
        <link rel="icon" href="<?php echo base_url(); ?>lib/img/icon.png" type="image/png">

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link href="<?php echo base_url(); ?>lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="<?php echo base_url(); ?>lib/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>lib/css/ion/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
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
        <main>
            <div class="wrapper">

                <header class="main-header">
                    <!-- Logo -->
                    <a href="../../index2.html" class="logo">
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
                                        <span class="hidden-xs"> </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- User image -->
                                        <li class="user-header">
                                            <img src="<?php echo base_url() ?>lib/img/user.png" class="img-circle" alt="User Image">

                                            <p>
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
                                <a href="<?php echo base_url(); ?>index.php/Profesor"><i class="fa fa-home"></i> <span>Inicio</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/RegistroAsistencia"><i class="glyphicon glyphicon-check"></i> <span>Modulo Asistencia</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/ConsejosProfesor"><i class="glyphicon glyphicon-list-alt"></i> <span>Modulo Consejo</span></a>
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
                            Dashboard
                            <small>Control panel</small>

                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard active"></i> Inicio</a></li>

                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-aqua">
                                    <div class="inner">
                                        <h3 v-for="c in menTotal" >{{c.count}}</h3>

                                        <p><b>Total</b> Mensajes Enviados </p>
                                    </div>
                                    <div class="icon">
                                        <!--                                    ion-android-bookmark-->
                                        <i class="ion ion-android-chat"></i>
                                    </div>
                                    <a href="#" class="small-box-footer"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                                        <p>Bounce Rate</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">  </a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3 v-for="a in numTotal" >{{a.count}}</h3>

                                        <p>Usuarios Registrados</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="#" class="small-box-footer"></a>
                                </div>

                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <h3>65</h3>

                                        <p>Unique Visitors</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">  </a>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                        <!-- Main row -->
                        <div class="row">
                            <!-- Left col -->
                            <section class="col-lg-7 connectedSortable">
                                <!-- Custom tabs (Charts with tabs)-->
                                <div class="nav-tabs-custom">
                                    <!-- Tabs within a box -->
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                                        <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                                        <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
                                    </ul>
                                    <div class="tab-content no-padding">
                                        <!-- Morris chart - Sales -->
                                        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                                        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                                    </div>
                                </div>
                                <!-- /.nav-tabs-custom -->

                                <!-- Chat box -->
                                <div class="box box-success">
                                    <div class="box-header">
                                        <i class="fa fa-comments-o"></i>

                                        <h3 class="box-title">Chat</h3>

                                        <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                                            <div class="btn-group" data-toggle="btn-toggle">
                                                <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                                                </button>
                                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body chat" id="chat-box">
                                        <!-- chat item -->
                                        <div class="item">
                                            <img src="dist/img/user4-128x128.jpg" alt="user image" class="online">

                                            <p class="message">
                                                <a href="#" class="name">
                                                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                                                    Mike Doe
                                                </a>
                                                I would like to meet you to discuss the latest news about
                                                the arrival of the new theme. They say it is going to be one the
                                                best themes on the market
                                            </p>
                                            <div class="attachment">
                                                <h4>Attachments:</h4>

                                                <p class="filename">
                                                    Theme-thumbnail-image.jpg
                                                </p>

                                                <div class="pull-right">
                                                    <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                                                </div>
                                            </div>
                                            <!-- /.attachment -->
                                        </div>
                                        <!-- /.item -->
                                        <!-- chat item -->
                                        <div class="item">
                                            <img src="dist/img/user3-128x128.jpg" alt="user image" class="offline">

                                            <p class="message">
                                                <a href="#" class="name">
                                                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                                    Alexander Pierce
                                                </a>
                                                I would like to meet you to discuss the latest news about
                                                the arrival of the new theme. They say it is going to be one the
                                                best themes on the market
                                            </p>
                                        </div>
                                        <!-- /.item -->
                                        <!-- chat item -->
                                        <div class="item">
                                            <img src="dist/img/user2-160x160.jpg" alt="user image" class="offline">

                                            <p class="message">
                                                <a href="#" class="name">
                                                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                                                    Susan Doe
                                                </a>
                                                I would like to meet you to discuss the latest news about
                                                the arrival of the new theme. They say it is going to be one the
                                                best themes on the market
                                            </p>
                                        </div>
                                        <!-- /.item -->
                                    </div>
                                    <!-- /.chat -->
                                    <div class="box-footer">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Type message...">

                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box (chat box) -->

                                <!-- TO DO List -->
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <i class="ion ion-clipboard"></i>

                                        <h3 class="box-title">To Do List</h3>

                                        <div class="box-tools pull-right">
                                            <ul class="pagination pagination-sm inline">
                                                <li><a href="#">&laquo;</a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">&raquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                                        <ul class="todo-list">
                                            <li>
                                                <!-- drag handle -->
                                                <span class="handle">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </span>
                                                <!-- checkbox -->
                                                <input type="checkbox" value="">
                                                <!-- todo text -->
                                                <span class="text">Design a nice theme</span>
                                                <!-- Emphasis label -->
                                                <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                                                <!-- General tools such as edit or delete-->
                                                <div class="tools">
                                                    <i class="fa fa-edit"></i>
                                                    <i class="fa fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </span>
                                                <input type="checkbox" value="">
                                                <span class="text">Make the theme responsive</span>
                                                <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                                                <div class="tools">
                                                    <i class="fa fa-edit"></i>
                                                    <i class="fa fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </span>
                                                <input type="checkbox" value="">
                                                <span class="text">Let theme shine like a star</span>
                                                <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                                                <div class="tools">
                                                    <i class="fa fa-edit"></i>
                                                    <i class="fa fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </span>
                                                <input type="checkbox" value="">
                                                <span class="text">Let theme shine like a star</span>
                                                <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                                                <div class="tools">
                                                    <i class="fa fa-edit"></i>
                                                    <i class="fa fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </span>
                                                <input type="checkbox" value="">
                                                <span class="text">Check your messages and notifications</span>
                                                <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                                                <div class="tools">
                                                    <i class="fa fa-edit"></i>
                                                    <i class="fa fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </span>
                                                <input type="checkbox" value="">
                                                <span class="text">Let theme shine like a star</span>
                                                <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                                                <div class="tools">
                                                    <i class="fa fa-edit"></i>
                                                    <i class="fa fa-trash-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer clearfix no-border">
                                        <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                                    </div>
                                </div>
                                <!-- /.box -->

                                <!-- quick email widget -->
                                <div class="box box-info">
                                    <div class="box-header">
                                        <i class="fa fa-envelope"></i>

                                        <h3 class="box-title">Quick Email</h3>
                                        <!-- tools box -->
                                        <div class="pull-right box-tools">
                                            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                                    title="Remove">
                                                <i class="fa fa-times"></i></button>
                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <div class="box-body">
                                        <form action="#" method="post">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                                            </div>
                                            <div>
                                                <textarea class="textarea" placeholder="Message"
                                                          style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="box-footer clearfix">
                                        <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                                            <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>

                            </section>
                            <!-- /.Left col -->
                            <!-- right col (We are only adding the ID to make the widgets sortable)-->
                            <section class="col-lg-5 connectedSortable">

                                <!-- Map box -->
                                <div class="box box-solid bg-light-blue-gradient">
                                    <div class="box-header">
                                        <!-- tools box -->
                                        <div class="pull-right box-tools">
                                            <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                                                    title="Date range">
                                                <i class="fa fa-calendar"></i></button>
                                            <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                                                    data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                                                <i class="fa fa-minus"></i></button>
                                        </div>
                                        <!-- /. tools -->

                                        <i class="fa fa-map-marker"></i>

                                        <h3 class="box-title">
                                            Visitors
                                        </h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="world-map" style="height: 250px; width: 100%;"></div>
                                    </div>
                                    <!-- /.box-body-->
                                    <div class="box-footer no-border">
                                        <div class="row">
                                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                                <div id="sparkline-1"></div>
                                                <div class="knob-label">Visitors</div>
                                            </div>
                                            <!-- ./col -->
                                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                                <div id="sparkline-2"></div>
                                                <div class="knob-label">Online</div>
                                            </div>
                                            <!-- ./col -->
                                            <div class="col-xs-4 text-center">
                                                <div id="sparkline-3"></div>
                                                <div class="knob-label">Exists</div>
                                            </div>
                                            <!-- ./col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                </div>
                                <!-- /.box -->

                                <!-- solid sales graph -->
                                <div class="box box-solid bg-teal-gradient">
                                    <div class="box-header">
                                        <i class="fa fa-th"></i>

                                        <h3 class="box-title">Sales Graph</h3>

                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-body border-radius-none">
                                        <div class="chart" id="line-chart" style="height: 250px;"></div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer no-border">
                                        <div class="row">
                                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                                <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                                                       data-fgColor="#39CCCC">

                                                <div class="knob-label">Mail-Orders</div>
                                            </div>
                                            <!-- ./col -->
                                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                                <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                                                       data-fgColor="#39CCCC">

                                                <div class="knob-label">Online</div>
                                            </div>
                                            <!-- ./col -->
                                            <div class="col-xs-4 text-center">
                                                <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                                                       data-fgColor="#39CCCC">

                                                <div class="knob-label">In-Store</div>
                                            </div>
                                            <!-- ./col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.box-footer -->
                                </div>
                                <!-- /.box -->

                                <!-- Calendar -->
                                <div class="box box-solid bg-green-gradient">
                                    <div class="box-header">
                                        <i class="fa fa-calendar"></i>

                                        <h3 class="box-title">Calendar</h3>
                                        <!-- tools box -->
                                        <div class="pull-right box-tools">
                                            <!-- button with a dropdown -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-bars"></i></button>
                                                <ul class="dropdown-menu pull-right" role="menu">
                                                    <li><a href="#">Add new event</a></li>
                                                    <li><a href="#">Clear events</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">View calendar</a></li>
                                                </ul>
                                            </div>
                                            <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <!--The calendar -->
                                        <div id="calendar" style="width: 100%"></div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer text-black">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- Progress bars -->
                                                <div class="clearfix">
                                                    <span class="pull-left">Task #1</span>
                                                    <small class="pull-right">90%</small>
                                                </div>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                                                </div>

                                                <div class="clearfix">
                                                    <span class="pull-left">Task #2</span>
                                                    <small class="pull-right">70%</small>
                                                </div>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-6">
                                                <div class="clearfix">
                                                    <span class="pull-left">Task #3</span>
                                                    <small class="pull-right">60%</small>
                                                </div>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                                                </div>

                                                <div class="clearfix">
                                                    <span class="pull-left">Task #4</span>
                                                    <small class="pull-right">40%</small>
                                                </div>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                </div>
                                <!-- /.box -->

                            </section>
                            <!-- right col -->
                        </div>
                        <!-- /.row (main row) -->

                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
                <footer class="main-footer">
                    <div class="pull-right hidden-xs">
                        <b>Version</b> 2.4.0
                    </div>
                    <strong>Copyright &copy; 2018-2019 <a href="https://adminlte.io">Rafael Villar</a>.</strong> Todos los derechos reservados.
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
        </main>
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

$("#btn").click(function (e) {
    e.preventDefault();
    salir();
});

        </script>
    </body>
</html>
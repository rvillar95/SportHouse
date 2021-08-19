<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SportsHouse | Inicio Sesion</title>
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
    <body class="hold-transition login-page" style="background-color: #b4ef56;" >
        <div class="login-box" style="background-color: #00569e;">
            <div class="login-logo">
                <a  style="color: #b4ef56; "><b >Sports</b>House<img src="<?php echo base_url() ?>/lib/img/icon.png" style="width: 32px; height: 32px;" alt=""/></a>

            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Ingresa tu Rut y Clave para Iniciar Sesion</p>

                <form action="../../index2.html" method="post">
                    <div class="form-group has-feedback">
                        <input type="text"  id="rutUsuario" name="rut" required onblur="checkRutLogin(rutUsuario)" onkeypress="return check(event)" class="form-control soloNumeros"  placeholder="11111111-k">
                        <span id="div_rut" class="glyphicon glyphicon-user form-control-feedback">

                        </span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" id="clave" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-xs-12">
                            <button type="submit" id="btnAgregarUsuario" class="btn btn-primary btn-block btn-flat">Ingresar Al Sistema</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- /.social-auth-links -->


            </div>
            <!-- /.login-box-body -->
        </div>


        <div class="modal modal-info fade" id="modal-session">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Seleccione con que Rol quiere ingresar al Sistema.</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group" >
                            <select id="selectSession" class="form-control" >

                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
                        <button type="button" id="btnEntrar" class="btn btn-outline">Ingresar al Sistema</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>



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

                            $("#btnAgregarUsuario").click(function (e) {
                                e.preventDefault();
                                IniciarSesion();

                            });

                            $("#btnEntrar").click(function (e) {
                                e.preventDefault();
                                ingresoMultiple();
                            });











        </script>
    </body>
</html>

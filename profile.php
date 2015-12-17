<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ระบบรายงานความคืบหน้างาน</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
        <!-- <link rel="stylesheet" href="dist/css/font-awesome.min.css"> -->
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
        <!-- <link rel="stylesheet" href="dist/css/ionicons.min.css"> -->
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!--Datpicker-->
        <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">
                <?php include_once './include-page/header.php'; ?>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <?php include_once './include-page/side-bar.php'; ?>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        โปรไฟล์
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> โปรไฟล์</li>

                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!--รูปประจำตัว-->
                        <div class="col-sm-3">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">ข้อมูลอย่างย่อ</h3>
                                </div>
                                <div class="box-body box-profile">
                                    <img class="profile-user-img img-responsive img-circle" src="dist/img/default-user.png" title="รูปประจำตัว">
                                    <h3 class="profile-username text-center">Anonymous</h3>    
                                    <p class="text-muted text-center">ผู้ดูแลระบบ</p>

                                    <!--ข้อมูลพนักงาน-->
                                    <ul class="list-group list-group-unbordered">

                                        <li class="list-group-item">
                                            <b>สถานการทำงาน</b> <a class="pull-right">คงอยู่</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>หมายเลขพนักงาน</b> <a class="pull-right">55022857</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>หมายเลขผู้ทำบัญชี</b> <a class="pull-right">A-55022857</a>
                                        </li>
                                    </ul>
                                    <!--/.ข้อมูลพนักงาน-->
                                    <!--เปลี่ยนรหัสผ่าน-->
                                    <button data-toggle="modal" data-target="#pnlChangPassWord" class="btn btn-primary btn-block">เปลี่ยนรหัสผ่าน</button>
                                    <!--/.เปลี่ยนรหัสผ่าน-->
                                </div>
                            </div>
                        </div>
                        <!--ข้อมูลพนักงาน-->
                        <div class="col-sm-9">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">ข้อมูลส่วนบุคคล</h3>
                                </div>
                                <div class="box-body">

                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                        <!-- /.col-sm-9 ข้อมูลพนักงาน -->
                    </div>        
                    <!-- /.class row -->



                    <!--ข้อมูลส่วนบุคคล-->


                    <!--Modal Chang PassWord-->
                    <form name="changPassword" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="modal fade" id="pnlChangPassWord" tabindex="-1" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">เปลี่ยนรหัสผ่าน</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                           <div class="col-sm-3">
                                                <label>หมายเลขพนักงาน:</label>
                                            </div>  
                                            <div class="col-sm-6"> <!---->
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa  fa-user"></i>
                                                    </div>
                                                    <input  type="text" class="form-control" value="55022857" readonly=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label>รหัสผ่าน:</label>
                                            </div>  
                                            <div class="col-sm-6"> <!--รหัสผ่าน-->
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </div>
                                                    <input name="txtCurentPassword" type="password" class="form-control" placeholder="รหัสผ่านปัจจุบัน" maxlength="16"/>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                              
                                            <div class="col-sm-6 col-sm-offset-3"> <!--รหัสผ่านใหม่-->
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </div>
                                                    <input name="txtPassword1" type="password" class="form-control" placeholder="รหัสผ่านใหม่" maxlength="16"/>
                                                </div>
                                            </div>
                                        </div>
                                         <br>
                                        <div class="row">
                                         
                                            <div class="col-sm-6 col-sm-offset-3"> <!--ยืนยันรหัสผ่าน-->
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </div>
                                                    <input name="txtPassword2" type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน" maxlength="16"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                                        <button type="button" class="btn btn-primary">บันทึก</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                        <!--./Modal Chang PassWord-->
                    </form>    

                    <!-- .Your Page Content Here -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            <?php include_once './include-page/footer.php'; ?>
            <!-- .Main Footer -->


            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.1.4 -->
        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>

        <!-- Optionally, you can add Slimscroll and FastClick plugins.
             Both of these plugins are recommended to enhance the
             user experience. Slimscroll is required when using the
             fixed layout. -->
        <!--Datpicker-->
        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>



    </body>
</html>

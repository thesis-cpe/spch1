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
                        เพิ่มพนักงาน
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="main-data.php"><i class="fa fa-dashboard"></i> ข้อมูลหลัก</a></li>
                        <li class="active">เพิ่มพนักงาน</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Your Page Content Here -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">ข้อมูลพนักงาน</h3>
                        </div>
                        <div class="box-body">
                            <!--ชื่อ-นามสกุล-->
                            <label>ชื่อ-นามสกุล:</label>
                            <div class="row">

                                <div class="col-sm-2">

                                    <select class="form-control" name="selTitle">
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                    </select>

                                    <!-- /input-group -->
                                </div>

                                <div class="col-sm-5">

                                    <input name="txtEmName" type="text" class="form-control" placeholder="ชื่อ">

                                    <!-- /input-group -->
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-sm-5">
                                    <input name="txtEmLastName" type="text" class="form-control " placeholder="นามสกุล">
                                    <!-- /input-group -->
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>  
                            <!--.ชื่อ-นามสกุล-->
                            <br>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>สถานการทำงาน:</label>
                                    <select name="selStatus" class="form-control">
                                        <option>คงอยู่</option>
                                        <option>ลาออก</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label>สถานะในระบบ:</label>
                                    <select name="selRole" class="form-control">
                                        <option>ผู้ดูแลระบบ</option>
                                        <option>ผู้ใช้งาน</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label>&nbsp;</label>
                                    <input class="form-control" name="txtEmId" placeholder="หมายเลขพนักงาน">
                                </div>
                                <div class="col-sm-3">
                                    <label>&nbsp;</label>
                                    <input class="form-control" name="txtAuditId" placeholder="หมายเลขผู้ทำบัญชี">
                                </div>

                            </div> 

                        </div>
                        <!-- /.box-body -->
                    </div>


                    <!--ข้อมูลส่วนบุคคล-->
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">ข้อมูลส่วนบุคคล</h3>
                        </div>
                        <div class="box-body">

                            <div class="row">
                                <div class="col-sm-3">
                                    <label>เลขประจำตัวประชาชน:</label>
                                    <input class="form-control" name="txtNationId" placeholder="หมายเลข 13 หลัก" maxlength="13">
                                </div>
                                <div class="col-sm-3">
                                    <label>สถานะสมรส :</label>
                                    <select name="selMarieStatus" class="form-control">
                                        <option>โสด</option>
                                        <option>สมรส</option>
                                        <option>หย่าร้าง</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label>&nbsp;</label>
                                    <textarea name="txtareaAddr1" rows="1" cols="40" class="form-control" placeholder="ที่อยู่ตามทะเบียนบ้าน"></textarea>
                                </div>
                                <div class="col-sm-3">
                                    <label>&nbsp;</label>
                                    <textarea name="txtareaAddr2" rows="1" cols="40" class="form-control" placeholder="ที่อยู่ปัจจุบัน"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>ข้อมูลการติดต่อ:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input name="txtTel" type="text" class="form-control" placeholder="หมายเลขโทรศัพท์">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label>&nbsp;</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <input name="txtEmail" type="email" class="form-control" placeholder="example@exam.com">
                                    </div>
                                </div>
                            </div>



                        </div>
                        <!-- /.box-body -->
                    </div>




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
    </body>
</html>

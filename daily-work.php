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
        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

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


        <!--css timepicker for timepiar-->
        <link rel="stylesheet" type="text/css" href="plugins/datepair-this/jquery.timepicker.css" /> 

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
                        งานประจำวัน
                        <small>บันทึกข้อมูลงานประจำวัน</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                        <li class="active">Here</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Your Page Content Here -->
                    <!-- TAB --->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">ข้อมูลงาน</a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <!--Conten Tab1-->
                                <section class="content">
                                    <!--  <div class="row">
                                          <div class="col-sm-offset-10 col-xs-2"> <a href="#"><i class="fa   fa-user-plus"></i> เพิ่มลูกค้า</a></div>
                                      </div>   -->
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="box">
                                                <div class="box-header">
                                                    <!-- <h3 class="box-title">รายการข้อมูลลูกค้า</h3> -->
                                                  <!--  <a  href="#" title="เพิ่มข้อมูลลูกค้า"><i class="fa fa-save"></i> บันทึกงาน</a>  -->
                                                </div>  
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="table-responsive">  
                                                        <table id="example1" class="table table-bordered table-striped" width="1205">
                                                            <thead><!--หัวตาราง-->
                                                                <tr>

                                                                    <td width="20" rowspan="2" align="center"><p>&nbsp;</p>
                                                                        <p>เลือก</p>
                                                                    </td>

                                                                    <td rowspan="2" align="center"><p>cuscode</p>
                                                                        <p>รหัสบริษัท</p></td>
                                                                    <td width="200"  rowspan="2" align="center"><p>cusname</p>
                                                                        <p>ชื่อบริษัท</p></td>
                                                                    <td width="50"  rowspan="2" align="center"><p>trndate</p>
                                                                        <p>วันที่</p></td>
                                                                    <td  width="139" rowspan="2" align="center"><p>trntime</p>
                                                                        <p>ช่วงเวลา</p></td>
                                                                    <td colspan="3" align="center">เวลา</td>
                                                                    <td colspan="3" align="center">รายการบันทึก</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="20"  align="center">เวลาใช้ไป</td>
                                                                    <td  align="center">ยกมา</td>
                                                                    <td  align="center">คงเหลือ</td>
                                                                    <td  align="center">ยกมา</td>
                                                                    <td width="20"  align="center">คีย์เข้า</td>
                                                                    <td  align="center">ยกไป</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody><!--ตัวตาราง-->
                                                                <tr>
                                                                    <td><input id="chkBox1" name="chkBox1" type="checkbox"/></td>
                                                                    <td>55022789865</td>
                                                                    <td>absolute inovative inc.</td>
                                                                    <td>9/12/2558</td>
                                                                    <td> <div id="basicExample">
                                                                            <input disabled id="txtStartTime" name="txtStartTime" size="7" placeholder="เริ่ม"  type="text" class="time start form-control input-sm" />
                                                                            <input disabled id="txtEndTime" name="txtEndTime" size="7" placeholder="สิ้นสุด" type="text" class="time end form-control input-sm" />
                                                                        </div></td>
                                                                    <td><input disabled id="txtUseTime" name="txtUseTime" class="form-control input-sm" type="text" placeholder="นาที" size="5"/></td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                    <td><input disabled id="txtCountRec" name="txtCountRec" class="form-control input-sm" type="text" placeholder="จำนวน" size="5"/></td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot><!--ท้ายตาราง-->
                                                                <tr>
                                                                    <td rowspan="2" align="center"><p>&nbsp;</p>
                                                                        <p>เลือก</p>
                                                                    </td>
                                                                    <td rowspan="2" align="center"><p>cuscode</p>
                                                                        <p>รหัสบริษัท</p></td>
                                                                    <td  rowspan="2" align="center"><p>cusname</p>
                                                                        <p>ชื่อบริษัท</p></td>
                                                                    <td  rowspan="2" align="center"><p>trndate</p>
                                                                        <p>วันที่</p></td>
                                                                    <td  rowspan="2" align="center"><p>trntime</p>
                                                                        <p>ช่วงเวลา</p></td>
                                                                    <td colspan="3" align="center">เวลา</td>
                                                                    <td colspan="3" align="center">รายการบันทึก</td>
                                                                </tr>
                                                                <tr>
                                                                    <td  align="center">เวลาใช้ไป</td>
                                                                    <td  align="center">ยกมา</td>
                                                                    <td  align="center">คงเหลือ</td>
                                                                    <td  align="center">ยกมา</td>
                                                                    <td  align="center">คีย์เข้า</td>
                                                                    <td  align="center">ยกไป</td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div><!-- .table-responsive -->
                                                </div>
                                                <!-- /.box-body -->
                                            </div>
                                            <!-- /.box -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </section>

                                <!--.Conten Tab1-->
                            </div>


                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- .TAB --->
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

        <!-- DataTables -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.js"></script>
        <!--DatePicker-->
        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
        <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <!--DatePair-->
        <script src="plugins/datepair-this/jquery.timepicker.js"></script>
        <script src="plugins/datepair-this/bootstrap-datepicker.js"></script>
        <script src="plugins/datepair-this/datepair.js"></script>
        <script src="plugins/datepair-this/jquery.datepair.js"></script>
        <!--Data Table1-->
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });

        </script>

        <!--timePair-->
        <script>
            $('#basicExample .time').timepicker({
                'showDuration': true,
                'timeFormat': 'g:ia'
            });

            $('#basicExample .date').datepicker({
                'format': 'm/d/yyyy',
                'autoclose': true
            });

            var basicExampleEl = document.getElementById('basicExample');
            var datepair = new Datepair(basicExampleEl);
        </script>

        <!--CheckBox-->
        <script>
            document.getElementById('chkBox1').onchange = function () {
                document.getElementById('txtStartTime').disabled = !this.checked;
                document.getElementById('txtEndTime').disabled = !this.checked;
                document.getElementById('txtUseTime').disabled = !this.checked;
                document.getElementById('txtCountRec').disabled = !this.checked;
               
            };
        </script>
        <!--.CheckBox-->


    </body>
</html>

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
        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
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
                        เพิ่มโครงการ
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="project.php"><i class="fa fa-dashboard"></i>โครงการ</a></li>
                        <li class="active">เพิ่มโครงการ</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Your Page Content Here -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="box-body">
                                <div class="callout callout-info">
                                    <center>เลขประจำตัวผู้เสียภาษีอากร: <a>112233458</a> หน่วยงาน: <a>absolute</a></center>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Box ข้อมูลโครงการ-->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">ข้อมูลโครงการ</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <!--รหัสงานที่ Gen ใหม่-->
                                <div class="col-sm-3">
                                    <label>รหัสงานใหม่:</label>
                                    <input type="text" class="form-control" name="txtIdWorkCustomer" placeholder="รหัสงานบริษัท(อาจจะอัตโนมัติ)"  />
                                </div>
                                <div class="col-sm-3">
                                    <!--echo ชื่อหน่วยงานลง value-->
                                    <label>หน่วยงาน:</label>
                                    <input type="text" class="form-control" name="txtCustomerName" value="absolute" readonly=""/>
                                </div>
                                <!--รายได้โครงการ-->
                                <div class="col-sm-3">
                                    <label>&nbsp;</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-usd"></i>
                                        </div>
                                        <input name="txtAssetProject" type="number" class="form-control" placeholder="รายได้โครงการ(บาท)"/>
                                    </div>
                                </div>
                                <!--ค่าใช้จ่ายสำนักงาน-->
                                <div class="col-sm-3">

                                    <label>&nbsp;</label>
                                    <input type="number"  class="form-control" name="txtCoastOffice" placeholder="ค่าใช้จ่ายสำนักงาน(บาท)"  />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>&nbsp;</label>
                                    <textarea class="form-control" name="txtMarkProject" placeholder="หมายเหตุ"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>


                    <!--Box ข้อมูลทีมงาน-->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">ข้อมูลทีมงาน</h3>
                        </div>
                        <div class="box-body">
                            <!-- /ส่วนเลือกพนักงาน -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>&nbsp;</label>
                                    เลือกพนักงาน
                                </div>
                            </div>  <!-- /.ส่วนเลือกพนักงาน -->

                            <!-- /Data table แสดงพนักงานในทีม -->
                            <br />
                          <!--  <div class="box"> -->
                               <!-- <div class="box-header"></div> --><!-- /.box-header แสดงพนักงานในทีม -->  
                               <!-- <div class="box-body">  -->
                                    <!--Data Table ข้อมูลพนักงานในทีม-->
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>เลขประจำตัวผู้เสียภาษีอากร</th>
                                                    <th>ชื่อกิจการ</th>
                                                    <th>โทรศัพท์</th>
                                                    <th>อีเมล์</th>
                                                    <th>เพิ่มเติม</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <!--เลขประจำตัวผู้เสียภาษีอากร-->
                                                    <td>112233458</td>
                                                    <!--ชื่อกิจการ-->
                                                    <td>absolute</td>
                                                    <!--โทรศัพท์-->
                                                    <td>0855387928</td>
                                                    <!--อีเมล์-->
                                                    <td>admin@absolute.com</td>
                                                    <!--เพิ่มเติม-->
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>เลขประจำตัวผู้เสียภาษีอากร</th>
                                                    <th>ชื่อกิจการ</th>
                                                    <th>โทรศัพท์</th>
                                                    <th>อีเมล์</th>
                                                    <th>เพิ่มเติม</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div> <!--/.div table responsive-->

                                    <!--/.Data Table ข้อมูลพนักงานในทีม-->
                               <!-- </div> -->
                                <!-- /.box-body แสดงพนักงานในทีม -->  
                         <!--   </div> -->
                            <!-- /.Box Data table แสดงพนักงานในทีม -->  
                        </div>
                        <!-- /.box-body -->
                    </div>



                    <!--Box ข้อมูลงาน-->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">ข้อมูลงาน</h3>
                        </div>
                        <div class="box-body">
                            <!--วันที่เริ่มทำ-->
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>วันที่เริ่มรอบบัญชี:</label>

                                   <!-- <input  data-provide="datepicker" name="datInWork" type="text" class="form-control datepicker" placeholder="" data-date-format="dd/mm/yyyy">-->
                                    <div class="input-group date" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                        <input name="datIntWork" type="text" class="form-control" placeholder="01/01/2016">

                                    </div>
                                </div>


                                <!--วันที่สิ้นสุด-->  
                                <div class="col-sm-4">
                                    <label>วันที่สิ้นสุดรอบบัญชี:</label>

                                   <!-- <input  data-provide="datepicker" name="datInWork" type="text" class="form-control datepicker" placeholder="" data-date-format="dd/mm/yyyy">-->
                                    <div class="input-group date" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                        <input name="datFinalWork" type="text" class="form-control" placeholder="01/01/2017">

                                    </div>
                                </div>

                                <!--วันที่รับทำบัญชี-->  
                                <div class="col-sm-4">
                                    <label>วันที่รับทำบัญชี:</label>

                                   <!-- <input  data-provide="datepicker" name="datInWork" type="text" class="form-control datepicker" placeholder="" data-date-format="dd/mm/yyyy">-->
                                    <div class="input-group date" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                        <input name="datAcepeWork" type="text" class="form-control" placeholder="01/01/2016">

                                    </div>
                                </div>

                                <!--อัตราค่าทำบัญชี-->

                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>อัตราค่าทำบัญชี:</label>
                                    <select class="form-control" name="selRateCoast">

                                        <option value="รายเดือน">รายเดือน</option>
                                        <option value="รายครั้ง">รายครั้ง</option>
                                    </select>
                                </div>
                                <!--จำนวนเงินบาท-->
                                <div class="col-sm-4">
                                    <label>&nbsp;</label>
                                    <input class="form-control" name="txtRevenueAudit" type="number" placeholder="จำนวนเงิน(บาท)" />
                                </div>

                                <div class="col-sm-4">
                                    <label>&nbsp;</label>
                                    <input class="form-control" name="txtInstallment" type="number" placeholder="จำนวนงวดงาน"/>
                                </div>

                            </div>


                        </div>
                        <!-- /.box-body -->
                    </div>


                    <!--ใบเสนอราคา-->
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">เอกสาร</h3>
                        </div>
                        <div class="box-body">
                            <!--ใบเสนอราคา-->
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>ใบเสนอราคา:</label>
                                    <div class="input-group date" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                        <input name="datOffers" type="text" class="form-control" placeholder="วันที่เสนอราคา 01/01/2016">

                                    </div>
                                </div>
                                <!--ยอดเงินรวม-->  
                                <div class="col-sm-3">
                                    <label>&nbsp;</label>
                                    <input class="form-control" name="txtSumMoney" type="number" placeholder="ยอดเงินรวม"/>
                                </div>
                                <!--เลขที่ใบเสนอราคา-->  
                                <div class="col-sm-3">
                                    <label>&nbsp;</label>
                                    <input class="form-control" name="txtNoOffer" type="number" placeholder="เลขที่ใบเสนอราคา"/>
                                </div>
                                <!--ไฟล์ใบเสนอราคา-->  
                                <div class="col-sm-3">
                                    <label>&nbsp;</label>
                                    <input class="form-control" name="fileDocOfffer" type="file" />
                                </div>

                            </div>

                            <!--สัญญาจ้าง-->
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>สัญญาจ้าง:</label>
                                    <div class="input-group date" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                        <input name="datOffersEmploy" type="text" class="form-control" placeholder="วันที่เสนอราคา 01/01/2016">

                                    </div>
                                </div>
                                <!--ยอดเงินรวม-->  
                                <div class="col-sm-3">
                                    <label>&nbsp;</label>
                                    <input class="form-control" name="txtSumMoneyEmploy" type="number" placeholder="ยอดเงินรวม"/>
                                </div>
                                <!--เลขที่สัญญาจ้าง--->  
                                <div class="col-sm-3">
                                    <label>&nbsp;</label>
                                    <input class="form-control" name="txtNoEmploy" type="number" placeholder="เลขที่ใบเสนอราคา"/>
                                </div>
                                <!--ไฟล์สัญญาจ้าง--->  
                                <div class="col-sm-3">
                                    <label>&nbsp;</label>
                                    <input class="form-control" name="fileDocEmploy" type="file" />
                                </div>

                            </div>
                        </div>
                        <!-- /.box-body -->

                        <!--Div Footer-->
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">ล้างข้อมูล</button>
                            <button type="submit" class="btn btn-success pull-right">บันทึก</button>
                        </div>
                        <!--.Div Footer-->

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
        <!--Datpicker-->
        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- DataTables -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!--Data 1  -->
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
    </body>
</html>

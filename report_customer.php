<!DOCTYPE html>
<?php
@session_start();
include_once './include-page/sc-login.php';
?>
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
    <body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
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
                        รายงาน
                        <small>แสดงข้อมูลรายงานลูกค้า</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> รายงาน</a></li>
                        <!--<li class="active">Here</li> -->
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Your Page Content Here -->
                    <!-- TAB --->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">รายงานตามบริษัท</a></li>
                            
                        </ul>
                        <div class="tab-content">
                            <!--รายงานตามบริษัท-->
                            <div class="tab-pane active" id="tab_1">
                                <!--Conten Tab1-->
                                <section class="content">
                                    <!--ส่วนค้นหาตามบริษัท-->
                                    <form name="formCustomer" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                        <div class="row">
                                         
                                            <div class="col-sm-2">
                                                <select class="form-control input-sm" name="selProjectNumber">
                                                    <option value="" disabled="" selected>รหัสงานบริษัท</option>
                                                    <?php
                                                    if($_SESSION['role']=="ผู้ดูแลระบบ")
                                                    {
                                                       $sqlSelProjectNumber = "SELECT * FROM project";
                                                    }
                                                    elseif($_SESSION['role']=="ผู้ใช้งาน")
                                                    {
                                                      $sqlSelProjectNumber =  "SELECT  * FROM `team` JOIN project ON team.project_id = project.project_id WHERE em_id = '$_SESSION[em_id]'";
                                                    }
                                                    $queySelProjectNumber = $conn->query($sqlSelProjectNumber);
                                                    while($arrSelProjectNumber = $queySelProjectNumber->fetch_array())
                                                    { ?>
                                                    <option value="<?php echo $arrSelProjectNumber['project_id'];  ?>"><?php echo $arrSelProjectNumber['project_number'];  ?></option>
                                                        
                                                        
                                            <?php   }  ?>
                                                 </select>
                                            </div>
                                          
                                            
                                           
                                           <!--เลือกชื่อบริษัทลูกค้า--> 
                                            <div class="col-sm-2">
                                                <select name="selCustomerName" class="form-control input-sm">
                                                    <option value="" selected="" disabled="">ชื่อบริษัท</option>
                                                    <?php
                                                        if($_SESSION['role']=="ผู้ดูแลระบบ")
                                                        {
                                                            $sqlSelCustomerName = "SELECT * FROM customer";
                                                        }
                                                        elseif($_SESSION['role']=="ผู้ใช้งาน")
                                                        {
                                                            $sqlSelCustomerName = "SELECT * FROM `team` JOIN project ON team.project_id = project.project_id JOIN customer ON project.customer_id = customer.customer_id WHERE em_id = '$_SESSION[em_id]' GROUP BY(customer_name)";
                                                        }
                                                        $querySelCustomerName = $conn->query($sqlSelCustomerName);
                                                        while($arrSelCustomerName = $querySelCustomerName->fetch_array())
                                                        {
                                                    ?>
                                                    <option value="<?php echo $arrSelCustomerName['customer_id']; ?>" ><?php echo $arrSelCustomerName['customer_name']; ?></option>   
                                                  <?php }?>
                                                </select>
                                            
                                            </div>
                                           
                                            
                                            
                                            
                                            <div class="col-sm-2">
                                                <select class="form-control input-sm" name="selYear">
                                                    <option value="" disabled="" selected="">ปี</option>
                                                    <?php
                                                    for ($year = 2555; $year <= 2600; $year++) {
                                                        ?>
                                                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>  
                                            <div class="col-sm-2">
                                                <button title="ค้นหา"  name="btnSubmitCustomer" type="submit"  class="btn btn-sm btn-default"><span class="fa fa-search"></span></button>
                                            </div>

                                            </form>
                                               
                                            
                                        </div>
                                    
                                    <br>
                                    
                                    
                                <?php 
                                    if(isset($_POST['btnSubmitCustomer']) && ($_POST['selProjectNumber'] || $_POST['selCustomerName'] || $_POST['selYear'] ))
                                    {
                                 /*ส่วนกำหนดเนื้อหาการค้น*/       
                                 //$sqlSerach = "SELECT * FROM `daily` JOIN employee ON daily.em_id = employee.em_id JOIN project ON daily.project_id = project.project_id JOIN customer ON project.customer_id = customer.customer_id ";
                              $sqlSerach = "SELECT SUM(daily_use_time) AS sum_use_time, em_number, em_name, employee.em_id AS employee_id, SUM(daily.daily_rec_insert) AS sum_rec FROM `daily` JOIN employee ON daily.em_id = employee.em_id JOIN project ON daily.project_id = project.project_id JOIN customer ON project.customer_id = customer.customer_id ";
                                
                                 /*กำหนด สิทธ์ User ตรงนี้*/
                              
                                 if($_POST['selProjectNumber'] != "")   //ถ้าค่า selProjectNumber  มีค่าให้ต่อ
                                  {
                                 $sqlSerach = $sqlSerach." AND project.project_id = '$_POST[selProjectNumber]'";
                                        
                                  }
                                  
                                  if($_POST['selCustomerName'] != "")   //ถ้าค่า selProjectNumber  มีค่าให้ต่อ
                                  {
                                   $sqlSerach = $sqlSerach." AND customer.customer_id = '$_POST[selCustomerName]'";
                                    
                                  }
                                  
                                  if($_POST['selYear'] != "")   //ถ้าค่า selProjectNumber  มีค่าให้ต่อ
                                  {
                                   $sqlSerach = $sqlSerach." AND project.project_year = '$_POST[selYear]'";
                                  
                                  }
                                  /*ห้อยท้ายด้วย GROUP BY*/
                                    $sqlSerach = $sqlSerach." GROUP BY(daily.em_id)";
                                  $querySerach = $conn->query($sqlSerach);
                                    /*แสดงสิ่งที่เลือก*/
                                      // echo $_POST['selProjectNumber']."&nbsp;".$_POST['selCustomerName']."&nbsp;".$_POST['selYear'] ;
                                       
                                ?> 
                                    
                                    <div class="row">
                                        <div class="col-xs-12">
                                       
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2"><center>ข้อมูล</center></th>
                                                    <th colspan="3"><center>เวลา</center></th>
                                                    <th colspan="3"><center>รายการบันทึก</center></th>
                                                    </tr> 

                                                    <tr>
                                                        <th>รหัสพนักงาน</th>
                                                        <th>ชื่อพนักงาน</th>
                                                        <th>ใช้ไป</th>
                                                        <th>เวลาตั้งต้น</th>
                                                        <th>คงเหลือ</th>
                                                        <th>วันนี้</th>
                                                        <th>รวม</th>
                                                        <th>โน้ต</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                            <?php
                                /*แสดงผล*/
                                while ($arrSerach = $querySerach->fetch_array())
                                {   
                                   //$em_id = $arrSerach['employee_id'];
                                    /*ค้นหาเวลาตั้งต้น*/
                                    $sqlSelProjectTime = "SELECT SUM(team_hour) AS team_hour FROM `team`JOIN project ON team.project_id = project.project_id";
                                    if($_POST['selProjectNumber'] != "")
                                    {
                                         $sqlSelProjectTime = $sqlSelProjectTime." AND project.project_id = '$_POST[selProjectNumber]'";
                                    }
                                    if($_POST['selCustomerName'] != "")
                                    {
                                        $sqlSelProjectTime = $sqlSelProjectTime." AND project.customer_id = '$_POST[selCustomerName]'";
                                    }
                                     
                                    $sqlSelProjectTime = $sqlSelProjectTime." AND team.em_id = '$arrSerach[employee_id]'";
                                    
                                    if($_POST['selYear'] != ""){
                                       $sqlSelProjectTime = $sqlSelProjectTime." AND project.project_year = '$_POST[selYear]'";
                                    }
                                    $querySelProjectTime = $conn->query($sqlSelProjectTime);
                                    $fetchSelProjectTime = $querySelProjectTime->fetch_assoc();
                                 
                            ?>            
                                                        <tr>
                                                            <!--รหัสพนักงาน-->
                                                            <td>
                                                                <?php echo $arrSerach['em_number']; ?>
                                                            </td>
                                                            
                                                            <!--ชื่อพนักงาน-->
                                                            <td><?php echo $arrSerach['em_name']; ?></td>
                                                            <!--เวลาใช้ไป-->
                                                            <td><div style="float: right"><?php echo number_format($arrSerach['sum_use_time']) ;  ?></div></td>
                                                            <!--เวลาตั้-งต้น-->
                                                            <td><div style="float: right"><?php echo number_format($fetchSelProjectTime['team_hour']) ;  ?></div></td>
                                                            <!--คงเหลือ-->
                                                            <td><div style="float: right"><?php echo number_format($fetchSelProjectTime['team_hour'] - $arrSerach['sum_use_time'])?></div></td>
                                                            
                                                            <!--วันนี้-->
                                        <?php
                                            $sqlSelRecToday = "SELECT * FROM `daily` JOIN employee ON daily.em_id = employee.em_id JOIN project ON daily.project_id = project.project_id JOIN customer ON project.customer_id = customer.customer_id AND employee.em_number = '$arrSerach[em_number]' AND daily.daily_dat = '$_SESSION[date]'";
                                            if($_POST['selProjectNumber'] != "")
                                            {
                                                $sqlSelRecToday = $sqlSelRecToday." AND project.project_id = '$_POST[selProjectNumber]'";
                                            }
                                            if($_POST['selCustomerName'] != "")
                                            {
                                                $sqlSelRecToday = $sqlSelRecToday." AND customer.customer_id = '$_POST[selCustomerName]'";
                                            }
                                            if($_POST['selYear'] != ""){
                                                $sqlSelRecToday = $sqlSelRecToday." AND project.project_year = '$_POST[selYear]'";
                                            }
                                            $queySelRecToday = $conn->query($sqlSelRecToday);
                                            $fetchSelRecToday = $queySelRecToday->fetch_assoc();
                                         ?>                    
                                                            <td><div style="float: right"><?php echo number_format($fetchSelRecToday['daily_use_time']); ?></div></td>
                                                            <!--รวม-->
                                                            <td><div style="float: right"><?php echo number_format($arrSerach['sum_rec']);?></div></td>
                                                            <!--โน้ต-->
                                                            <td>&nbsp;</td>

                                                        </tr>
                                <?php } //while1?>
                                                    </tbody>
                                               
                                                </table>
                                            </div> 
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    
                            <?php
                               }else
                               {
                                   include_once './include-page/table_customer.php';
                               }
                            ?>
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

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane active" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside> 
            <!-- /.control-sidebar -->
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
            // Data 2 
            $(function () {
                $("#example3").DataTable();
                $('#example4').DataTable({
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
<?php

$conn->close();
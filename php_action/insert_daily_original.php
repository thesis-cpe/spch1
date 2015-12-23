<?php

include_once '../include-page/sc-login.php';
@session_start();

/* POST VAR */
$hdfProjectNumber = $_POST['hdfProjectNumber']; //project_id
$hdfCurentDay = $_POST['hdfCurentDay']; //วันที่ในระบบ
$txtStartTime = $_POST['txtStartTime']; //ช่วงเวลาเรื่ม
$txtEndTime = $_POST['txtEndTime']; //สิ้นสุด
$txtUseTime = $_POST['txtUseTime']; //เวลาที่ใช้ไป
$txtCountRec = $_POST['txtCountRec']; //จำนวนที่คีย์เข้า
$em_id = $_SESSION["em_id"];
$hdfSumUseTime = $_POST['hdfSumUseTime']; //รวมเวลาที่ใช้ไปล่าสุดก่อนเข้า
$hdfSumrec = $_POST['hdfSumrec']; //รวมเรคคอร์ดล่าสุด





/* Insert to DB */

        for ($i = 0; $i < sizeof($txtStartTime); $i++) {
          $sumUseTime = 0;
          $sumUseRec = 0;
            
          $selSumTimeSumrec = "SELECT MAX(daily_id),daily_sum_time, daily_sum_rec FROM daily WHERE project_id = '$hdfProjectNumber[$i]'";
          $querySumTimeSumrec = $conn->query($selSumTimeSumrec);
          $fetchSumTimeSumrec  = $querySumTimeSumrec->fetch_assoc();
          
     $sumUseTime =  $txtUseTime[$i] + $fetchSumTimeSumrec['daily_sum_time'];
        $sumUseRec = $txtCountRec[$i] + $fetchSumTimeSumrec['daily_sum_rec'];
          
        echo  $sqlInsertDw = "INSERT INTO `daily` (`daily_dat`, `daily_start_time`, `daily_end_time`, `daily_use_time`, `daily_sum_time`, `daily_rec_insert`, `daily_sum_rec`, `em_id`, `project_id`) "
            . "VALUES ('$hdfCurentDay[$i]', '$txtStartTime[$i]', '$txtEndTime[$i]', '$txtUseTime[$i]', '$sumUseTime', '$txtCountRec[$i]', '$sumUseRec', '$em_id', '$hdfProjectNumber[$i]')";

         $queryInsertDw = $conn->query($sqlInsertDw);
          
        }
  
 $conn->close();
//header('Location: ' . $_SERVER['HTTP_REFERER']);
//exit(0);   



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


/* วันที่ */
$today = date("d-m-Y ");
$todayExplode = explode("-", $today);
$yearThaiBank = $todayExplode[2] + 543; //ได้เป็นปีพ.ศ.
$curentDay = date("d-m") . "-" . $yearThaiBank; //วันที่ปัจจุบัน

/*INSERT DB*/

    for($i=0;$i<sizeof($hdfProjectNumber);$i++){
       $sqlInsertDr = "INSERT INTO `daily` (`daily_dat`, `daily_start_time`, `daily_end_time`, `daily_use_time`, `daily_rec_insert`, `em_id`, `project_id`)"
            . " VALUES (  '$curentDay', '$txtStartTime[$i]', '$txtEndTime[$i]', '$txtUseTime[$i]', '$txtCountRec[$i]', '$em_id', '$hdfProjectNumber[$i]')";
        
       $queryInsertDr = $conn->query($sqlInsertDr);
    }
    
    



$conn->close();

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit(0);   



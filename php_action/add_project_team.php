<?php

include_once '../include-page/sc-login.php';
include_once '../include-page/function_lib.php';

$curentYear = date("Y") + 543; //ปีปัจจุบัน พ.ศ.  


/* Var Tb Project */
$hdfCusId = $_POST['hdfCusId']; //customer Id
$txtIdWorkCustomer = $_POST['txtIdWorkCustomer']; //รหัสงานใหม่่
$txtCustomerName = $_POST['txtCustomerName'];
$txtAssetProject = $_POST['txtAssetProject']; //รายได้โครงการ
$txtCoastOffice = $_POST['txtCoastOffice']; //ค่าใช้จ่ายสำนักงาน
$txtMarkProject = $_POST['txtMarkProject'];
$datIntWork = $_POST['datIntWork']; //เิร่มรับทำ
$datFinalWork = $_POST['datFinalWork']; //วันสิ้นสุด
$datAcepeWork = $_POST['datAcepeWork']; //วันที่รับทำ
$selRateCoast = $_POST['selRateCoast']; //รายเดือน รายครั้ง
$txtRevenueAudit = $_POST['txtRevenueAudit']; // ค่าทำบัญชี
$txtInstallment = $_POST['txtInstallment']; //จำนวนงวดงาน

/* var Tb File */
$datOffers = $_POST['datOffers']; // วันที่เสนอราคา ใบเสนอราคา
$txtSumMoney = $_POST['txtSumMoney']; // ยอดเงินใบเสนอราคา
$txtNoOffer = $_POST['txtNoOffer']; // เลขที่ใบเสนอราคา
$datOffersEmploy = $_POST['datOffersEmploy']; //วันที่ทำสัญญาจ้าง
$txtSumMoneyEmploy = $_POST['txtSumMoneyEmploy']; //ยอดเงินสัญญษจ้าง
$txtNoEmploy = $_POST['txtNoEmploy']; //เลขที่สัญญาจ้าง

/* var Tb Team */
$selEmRole = $_POST['selEmRole'];
$selEmName = $_POST['selEmName'];
$txtCountWorkHour = $_POST['txtCountWorkHour'];
$txtBathTime = $_POST['txtBathTime'];





/* TB  PROJECT */
if ($txtCustomerName != "") {
    $sqlInsertProject = "INSERT INTO `project` (`project_number`, `project_income`, `project_coast`, `project_note`, `prject_start`, `project_end`, `project_receip`, `project_rate`, `project_coasts`, `project_period`, `project_year`, `customer_id`) 
    VALUES ('$txtIdWorkCustomer', '$txtAssetProject', '$txtCoastOffice', '$txtMarkProject', '$datIntWork', '$datFinalWork', '$datAcepeWork', '$selRateCoast', '$txtRevenueAudit', '$txtInstallment',  '$curentYear', '$hdfCusId')";

    $queryInsertProject = $conn->query($sqlInsertProject);
    
}


/* TB  TEAM */
  //FillterArray
$selEmNameFill = array_filter($selEmName);
$selEmRoleFill = array_filter($selEmRole);
$txtCountWorkHourFill = array_filter($txtCountWorkHour);
$txtBathTimeFill = array_filter($txtBathTime);

if (!empty($selEmNameFill)) {  //ถ้าค่าไม่ว่างค่อยเข้ามา   //ดูอันที่เพิ่งInsert ไป
   $sqlSelProjectIdFromWorkId = "SELECT project_id FROM project WHERE project_number = '$txtIdWorkCustomer'";
    $querySelProjectIdFromWorkId  = $conn->query($sqlSelProjectIdFromWorkId);
    $fetchSelProjectIdFromWorkId = $querySelProjectIdFromWorkId->fetch_assoc();
  
   
   
    $sizeEmNameFill = sizeof($selEmNameFill);
    //วนเก็บ
    for($i=0;$i<$sizeEmNameFill;$i++)
    {
         echo  $sqlInsertTeam = "INSERT INTO `team` (`team_role`, `team_hour`, `team_salary`, `em_id`, `project_id`) "
                . "VALUES ('$selEmRoleFill[$i]', '$txtCountWorkHourFill[$i]', '$txtBathTimeFill[$i]', '$selEmNameFill[$i]', '$fetchSelProjectIdFromWorkId[project_id]')";
    
         $queryInsertTeam = $conn->query($sqlInsertTeam);
    }
        
 }// .เช็คค่าว่าง
 
 
 /*ไฟล์*/


$conn->close();

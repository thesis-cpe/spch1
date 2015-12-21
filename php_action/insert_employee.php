<?php
include_once '../include-page/sc-login.php';
include_once '../include-page/function_lib.php';

/*ข้อมูลพนักงาน*/
$selTitle = $_POST['selTitle'];   
$txtEmName = $_POST['txtEmName'];
$txtEmLastName = $_POST['txtEmLastName'];
$selStatus = $_POST['selStatus'];
$selRole = $_POST['selRole'];
$txtEmId = $_POST['txtEmId'];
$txtAuditId = $_POST['txtAuditId'];
$txtPassword = md5($_POST['txtPassword'].";bmpkobroTNแท่นทอง@Up#2๐1๕");
$txtPassword2 = md5($_POST['txtPassword2'].";bmpkobroTNแท่นทอง@Up#2๐1๕");
/*ข้อมูลส่วนบุคคล*/
$txtNationId = $_POST['txtNationId'];
$selMarieStatus = $_POST['selMarieStatus'];
$txtareaAddr1 = $_POST['txtareaAddr1'];
$txtareaAddr2 = $_POST['txtareaAddr2'];
$txtTel = $_POST['txtTel'];    
$txtEmail =  $_POST['txtEmail'];    
$txtNameFriend = $_POST['txtNameFriend'];   
$txtTelFriend = $_POST['txtTelFriend'];
$selGaduLevel =   $_POST['selGaduLevel']; 
$txtMajor = $_POST['txtMajor']; 
$txtGpa = $_POST['txtGpa'];
$txtInstitute = $_POST['txtInstitute'];
$datInWork = $_POST['datInWork'];
$txtCoast =  $_POST['txtCoast'];                            //อัตราเงินเดือน
$txtRateCoast = $_POST['txtRateCoast'];                           //ค่าแรงต่อวัน
$txtWorkDay =   $_POST['txtWorkDay'];                           //จำวนวนวัันทำงาน
$txtareaCondition = $_POST['txtareaCondition'];
$txtareaMark = $_POST['txtareaMark'];


if($txtPassword == $txtPassword2)
{
    $emName = "$selTitle"." $txtEmName"." $txtEmLastName";
   $sqlInsertEmployee = "INSERT INTO `employee` (`em_name`, `em_status`, `em_role`, `em_number`, `em_audit_number`, `em_password`, `em_nationn_id`, `em_marie_status`, `em_addr`, `em_addr_curent`, `em_tel`, `em_mail`, `em_friend_name`, `em_friend_tel`, `em_level`, `em_major`, `em_gpa`, `em_insutution`, `em_start_work`, `em_salary_rate`, `em_salary_day`, `em_day_work`, `em_benefit`, `em_note`) "
        . "VALUES ('$emName', '$selStatus', '$selRole', '$txtEmId', '$txtAuditId', '$txtPassword', '$txtNationId', '$selMarieStatus', '$txtareaAddr1', '$txtareaAddr2', '$txtTel', '$txtEmail', '$txtNameFriend', '$txtTelFriend', '$selGaduLevel', '$txtMajor', '$txtGpa', '$txtInstitute', '$datInWork', '$txtCoast', '$txtRateCoast', '$txtWorkDay', '$txtareaCondition', '$txtareaMark')";
        $queryInsertEmployee = $conn->query($sqlInsertEmployee);
        
        /* Random ชื่อ */
        $randFileName = generateRandomString(16);
        /* upload file */

        if (move_uploaded_file($_FILES["fileEmPhoto"]["tmp_name"], "../store/$randFileName" . $_FILES["fileEmPhoto"]["name"])) {

            
            $fileNameUp = $randFileName . $_FILES["fileEmPhoto"]["name"];

            //ค้นหา id ที่ตรงกับค่า tax_id ที่กรอกเข้ามา  ต้นฉบัับมาจาก add customer
            $sqlSelectIdFromTax = "SELECT em_id FROM employee WHERE em_number = '$txtEmId'";
            $querySelectIdFromTax = $conn->query($sqlSelectIdFromTax);
            $fechSelectIdFromTax = $querySelectIdFromTax->fetch_assoc();
            $resultSelectIdFromTax = $fechSelectIdFromTax['em_id'];
             $resultSelectIdFromTax;  // em_id  
     
     
            
            $sqlInsertFile = "INSERT INTO file (file_path, em_id) VALUES ('$fileNameUp', '$resultSelectIdFromTax')";
            $queryInsertFile = $conn->query($sqlInsertFile);

        }
        
}
elseif($txtPassword != $txtPassword2){
    echo "รหัสไม่ตรงกัน"."<br>";
    echo "<a href='../add-employee.php'>กลับเพื่อแก้ไข</a>";
    
}


    


$conn->close();
header( "location: ../main-data.php" );
 exit(0);
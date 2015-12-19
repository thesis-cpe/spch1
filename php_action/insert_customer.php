<?php

include_once '../include-page/sc-login.php';
include_once '../include-page/function_lib.php';
$txtCusname = $_POST['txtCusname']; //ชื่อกิจการลูกค้า
$selCusStatus = $_POST['selCusStatus']; //สถานะ
$txtNumTax = $_POST['txtNumTax']; //เลขภาษี
$txtNumBand = $_POST['txtNumBand']; //ทะเบียนการค้า
$txtAddrTh = $_POST['txtAddrTh']; //ที่อยู่ภาษาไทย
$txtAddrEn = $_POST['txtAddrEn']; //ที่อยู่ภาษาอังกฤษ
$txtCusTel = $_POST['txtCusTel']; //เบอร์โทร
$txtCusFax = $_POST['txtCusFax']; // fax
$txtCusWeb = $_POST['txtCusWeb'];   //web    
$txtCusMail = $_POST['txtCusMail']; //main
$txtConditionNam = $_POST['txtConditionNam']; //เงื่อนไขการลงนาม



/* table sign */

$txtNameCon = $_POST['txtNameCon']; //ชื่อผู้มีอำนาจลงนาม
$selStatusCondition = $_POST['selStatusCondition']; // สถานะผู้มีอำนาจลงนาม

/* .table sign */

$txtContractName = $_POST['txtContractName']; //ชื่อผู้ติดต่องาน
$txtContractTel = $_POST['txtContractTel']; //เบอร์โทรผู้ติดต่องาน
$txtContractMail = $_POST['txtContractMail'];  //mailผู้ติดต่องาน

$txtLat = $_POST['txtLat']; //ละติจูด
$txtLong = $_POST['txtLong']; //ลองติจูด
$txtCustomerMark = $_POST['txtCustomerMark']; //หมายเหตุ


$sqlInsertCustomer = "INSERT INTO `customer` ( `customer_name`, `customer_status`, `customer_tax_id`, `customer_band_id`, `customer_addr_th`, `customer_addr_en`, `customer_tel`, `customer_fax`, `customer_web`, `customer_mail`, `customer_condition`, `customer_coor_name`, `customer_coor_tel`, `customer_coor_mail`, `customer_lat`, `customer_long`, `customer_note`) "
        . "VALUES ('$txtCusname', '$selCusStatus', '$txtNumTax', '$txtNumBand', '$txtAddrTh', '$txtAddrEn', '$txtCusTel', '$txtCusFax', '$txtCusWeb', '$txtCusMail', '$txtConditionNam', '$txtContractName', '$txtContractTel', '$txtContractMail', '$txtLat', '$txtLong', '$txtCustomerMark')";
$queryInsertCustomer = $conn->query($sqlInsertCustomer);


//ค้นหา id ที่ตรงกับค่า tax_id ที่กรอกเข้ามา
    $sqlSelectIdFromTax = "SELECT customer_id FROM customer WHERE customer_tax_id = '$txtNumTax'";
    $querySelectIdFromTax = $conn->query($sqlSelectIdFromTax);
    $fechSelectIdFromTax = $querySelectIdFromTax->fetch_assoc();
    $resultSelectIdFromTax = $fechSelectIdFromTax['customer_id'];
     $resultSelectIdFromTax;  // customer_id  





/* Random ชื่อ */
$randFileName = generateRandomString(15);
/* upload file */

if (move_uploaded_file($_FILES["fileImgCustomer"]["tmp_name"], "../store/$randFileName" . $_FILES["fileImgCustomer"]["name"])) {
    
    $fileNameUp = $randFileName . $_FILES["fileImgCustomer"]["name"];
    
    $sqlInsertFile = "INSERT INTO file (file_path, customer_id) VALUES ('$fileNameUp', '$resultSelectIdFromTax')";
    $queryInsertFile = $conn->query($sqlInsertFile);
    
}

 /*หากมีการกำหนดผู้ลงนาม*/   

 
$txtNameConFitter = array_filter($txtNameCon); //กรองค่า 0 '' error ใน array
$selStatusConditionFitter = array_filter($selStatusCondition);    
if (!empty($txtNameConFitter)) {
    
    
   $sizeNameCon = sizeof($txtNameConFitter);
   for($i=0;$i<$sizeNameCon;$i++)
   {
      $sqlInsertSign = "INSERT INTO sign (sing_name, sign_status, customer_id) VALUES ('$txtNameConFitter[$i]', '$selStatusConditionFitter[$i]', '$resultSelectIdFromTax')";
       $queryInsertSign = $conn->query($sqlInsertSign);
      
   }
}






$conn->close();
header( "location: ../main-data.php" );
 exit(0);
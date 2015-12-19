<?php
include_once '../include-page/sc-login.php';
include_once '../include-page/function_lib.php';

/*ข้อมูลพนักงาน*/
$selTitle = $_POST['selTitle'];   // echo "$selTitle"." $txtEmName"." $txtEmLastName";
$txtEmName = $_POST['txtEmName'];
$txtEmLastName = $_POST['txtEmLastName'];
$selRole = $_POST['selRole'];
$txtEmId = $_POST['txtEmId'];
$txtAuditId = $_POST['txtAuditId'];
$txtPassword = $_POST['txtPassword'];
$txtPassword2 = $_POST['txtPassword2'];
/*ข้อมูลส่วนบุคคล*/
$txtNationId = $_POST['txtNationId'];
$selMarieStatus = $_POST['$selMarieStatus'];
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
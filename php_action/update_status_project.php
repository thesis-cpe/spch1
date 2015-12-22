<?php
include_once '../include-page/sc-login.php';
    
    if($_GET['command'] == "close")
    {
     $sqlUpdate = "UPDATE project SET project_status = 'ปิดโครงการ' WHERE project_id ='$_GET[pro_id]'";
      $queryUpdate = $conn->query($sqlUpdate);
    }elseif($_GET['command'] == "open")
    {
        $sqlUpdate = "UPDATE project SET project_status = 'เปิดโครงการ' WHERE project_id ='$_GET[pro_id]'";
      $queryUpdate = $conn->query($sqlUpdate);
    }
    
$conn->close();

/*header( "location: ../edit-project.php?customer_id=1");
exit(0); */
header('Location: ' . $_SERVER['HTTP_REFERER']);

<?php


@session_start();
 if($_SESSION["em_number"])
 { 
      header( "location: main-control.php" );
      exit(0);
 }
 else {
     header( "location: login.php" );
     exit(0);
}
<?php
session_start();
include_once './include-page/sc-login.php'; //เชื่อมต่อ DB
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Authorization Access Only | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a ><b>Authorize Access Only!</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group has-feedback">
                        <input name="user" type="text" class="form-control" placeholder="username" required/>
                        <span class="fa  fa-user  form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input name="pass" type="password" class="form-control" placeholder="password" required/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button name="btnLogin" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
        <?php
/* Login */
if (isset($_POST['btnLogin'])) {
    
     if($_POST['user'] == "" || $_POST['pass'] == "")
     {
         echo "<center>ไม่ได้กรอกชื่อผู้ใช้งาน หรือ รหัสผ่าน</center>";
     }  else {
         $txtPassword = md5($_POST['pass'].";bmpkobroTNแท่นทอง@Up#2๐1๕");
         $sqlCheckUser = "SELECT em_number, em_password, em_id, em_role FROM employee  WHERE em_number ='$_POST[user]' AND em_password ='$txtPassword' AND em_status = 'คงอยู่'";
         $queryCheckUser = $conn->query($sqlCheckUser);
         $numrow = mysqli_num_rows($queryCheckUser);
         if($numrow>0)
         {
             $resultUser = $queryCheckUser->fetch_assoc();
             $_SESSION["em_number"] = $resultUser['em_number'];
             $_SESSION["user_id"] = $resultUser['em_id'];
             $_SESSION["role"] = $resultUser['em_role'];
              header( "location: index.php" );
                exit(0);
         }else{
             echo "<center>username or password is incorect!</center>";
         }
             
 
     }
    
} ?>
        
    </body>
</html>






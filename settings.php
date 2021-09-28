<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/gas5.png" />
        <title>গ্যাস লাগবে</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/mainstyle.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1>পাসওয়ার্ড পরিবর্তন করুন</h1>
                        <form method="post" action="setting_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldPassword" placeholder="পুরাতন পাসওয়ার্ড">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newPassword" placeholder="নতুন পাসওয়ার্ড">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder=" আবার দিন নতুন পাসওয়ার্ড">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="পরিবর্তন">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy Partho All Rights Reserved</p>
                   <p>This website is developed Partho Roy</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>

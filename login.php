<?php
    require 'connection.php';
    session_start();
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
            <br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>লগ ইন করুন</h3>
                            </div>
                            <div class="panel-body">
                                <p>অর্ডার করতে লগ ইন করুন</p>
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="ইমেইল" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="পাসওয়ার্ড">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="লগ ইন" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">লগ ইন অ্যাকাউন্ট নাই? <a href="signup.php">রেজিস্ট্রেশন করুন</a></div>
                        </div>
                    </div>
                </div>
           </div>
           <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy Partho All Rights Reserved.</p>
                   <p>This website is developed by Partho Roy</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>

<?php
    session_start();
    require 'check_if_added.php';
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
            <div class="container">
                <div class="jumbotron">
                    <p><b>সর্বোচ্চ নিরাপত্তায় এলপিজি সিলিন্ডারে স্মার্ট রান্না</b></p>
                    <blockquote>
                        <p>*নিশ্চিত করুন সিলিন্ডারে কোম্পানির সিল রয়েছে কি না।</p>
                        <p>*নিশ্চিত করুন যে সিলিন্ডারটির সেফটি ক্যাপটি সুরক্ষিত ভাবে লাগানো রয়েছে কি না।</p>
                        <p>*ডেলিভারি ম্যানকে সিলিন্ডারের যথাযথ ব্যবহার বিধি ও ম্যানুয়াল সম্পর্কে জিজ্ঞাসা করতে দ্বিধা করবেন না।</p>
                    </blockquote>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/basunpre.png" alt="gas1">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>বসুন্ধরা প্রিমিয়ার</h3>
                                    <p>মূল্য:৯৯০.০০ টাকা</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">অর্ডার করুন</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">কার্টে অ্যাড করুন</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/basun45kg.png" alt="gas2">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>বসুন্ধরা ৪৫ কেজি</h3>
                                    <p>মূল্য:২৯৯০.০০ টাকা</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">অর্ডার করুন</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">কার্টে অ্যাড করুন</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/total1.jpg" alt="gas3">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>টোটাল গ্যাস</h3>
                                    <p>মূল্য:৯৮০.০০ টাকা</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">অর্ডার  করুন</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">কার্টে অ্যাড করুন</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/omera.jpg" alt="gas4">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>ওমেরা গ্যাস</h3>
                                    <p>মূল্য:৮৯০.০০ টাকা</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">অর্ডার  করুন</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">কার্টে অ্যাড করুন</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/jamuna.jpg" alt="gas5">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>যমুনা গ্যাস</h3>
                                    <p>মূল্য:৯১০.০০ টাকা</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">অর্ডার করুন</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">কার্টে অ্যাড করুন</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
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

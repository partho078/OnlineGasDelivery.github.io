<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="img/gas5.png"/>
    <title>গ্যাস লাগবে?</title>
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
      <div id="bannerImage">
        <div class="container">
          <center>
          <div id="bannerContent">
            <h1>গ্যাস লাগবে?</h1>
            <p>৫% ছাড় সকল গ্যাসের উপর</p>
            <a href="products.php" class="btn btn-danger">অর্ডার করুন</a>
          </div>
          </center>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xs-4">
            <div  class="thumbnail">
              <a href="products.php">
                <img src="img/gasbasun.jpg" alt="Camera">
              </a>
              <center>
              <div class="caption">
                <p id="autoResize">বসুন্ধরা গ্যাস</p>
              </div>
              </center>
            </div>
          </div>
          <div class="col-xs-4">
            <div class="thumbnail">
              <a href="products.php">
                <img src="img/totalgas.jfif" alt="Watch">
              </a>
              <center>
              <div class="caption">
                <p id="autoResize">টোটাল গ্যাস</p>
              </div>
              </center>
            </div>
          </div>
          <div class="col-xs-4">
            <div class="thumbnail">
              <a href="products.php">
                <img src="img/gas2.png" alt="Shirt">
              </a>
              <center>
              <div class="caption">
                <p id="autoResize">অন্যান্য</p>
              </div>
              </center>
            </div>
          </div>
        </div>
      </div>
      <br><br> <br><br><br><br>
      <footer class="footer">
        <div class="container">
          <center>
          <p>Copyright &copy Partho</a> All Rights Reserved.</p>
          <p>Design & Developed by Partho Roy</p>
          </center>
        </div>
      </footer>
    </div>
  </body>
</html>
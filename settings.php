<?php
    session_start();
    require 'config/connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/gebogan.png" />
        <title>NS Design</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
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
                        <h1>Ubah Password Kamu</h1>
                        <p>Pastikan kamu hapal yakk !</p>
                        <form method="post" action="setting_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldPassword" placeholder="Password Lama">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newPassword" placeholder="Password baru">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Ketik Ulang Password Baru">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Ubah">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
                   <p style="font-family:'montserrat' ">Copyright 2020 &copy <a href="index.php">NINDY X SAM .co</a>. All Rights Reserved.<a href="ttg-kami.php">About-Us</a></p>
                   </center>
              </center>
               </div>
           </footer>
        </div>
    </body>
</html>

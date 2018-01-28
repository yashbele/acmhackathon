<?php

   

?>


<!DOCTYPE html>
<html lang="en" class="no-js">
 
<?php 
    
    $page_name = 'index.php';
    include_once 'header.php';

    //session_start();
    if(isset($_SESSION['name'])){
      echo "<script type='text/javascript'>
     window.location.href='index.php'</script>";
    }

?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

    

        <!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">Login</h1>
                
            </div>
        </div>
        <!--========== PARALLAX ==========-->
<br><br>
        <div class="container">
            
            <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <h2 style="color: green">Login</h2>

                    <div id="checkLogin" style="color: red;font-size: 15px;text-align: center;"></div>

                    <form>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                      </div>
                    </form>
                    <input type="submit" class="btn btn-primary" value="LOGIN"  onclick="login();" id="login"> 
                    


                  </div>
                </div>
              </div>
              <div class="col-sm-3"></div>
            </div>

        </div>



        <?php 

            include_once 'footer.php';

        ?>

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>

    </body>
    <!-- END BODY -->
</html>
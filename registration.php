<?php 
  


?>


<!DOCTYPE html>
<html lang="en" class="no-js">
 
<?php 
    
    $page_name = 'index.php';
    include_once 'header.php';

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
                <h1 class="carousel-title">Registration</h1>
                
            </div>
        </div>
        <!--========== PARALLAX ==========-->
<br><br>
        <div class="container" id="confirmRegistration">
            
            <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <h2 style="color: green">Registration</h2>

                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Full-Name</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Full-Name">
                        <small id="errorName" style="color: red"></small>
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="errorEmail" style="color: red"></small>
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <small id="errorPass" style="color: red"></small>
                      </div>
                      <div class="form-group">
                        <label for="confirm_password">Confirm-Password</label>
                        <input type="password" class="form-control" id="confirm_password" placeholder="confirm_password">
                      </div>
                      <small id="errorPassword" style="color: red"></small>
                      <div class="form-group">
                        <label for="contact_no">Contact No.</label>
                        <input type="text" name="contact_no" class="form-control" id="contact_no" aria-describedby="emailHelp" placeholder="Contact No.(10 Digit)" maxlength="10">
                        <small id="errorContact" style="color: red"></small>
                      </div>

                      <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>

                      
                    </form>
                    <input type="submit" onclick="registration();" id="submit" class="btn btn-primary" value="SUBMIT">


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
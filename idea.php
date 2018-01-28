<?php

   
    

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
 
<?php 
    
    $page_name = 'domainDesc.php';
    include_once 'header.php';


    if(!isset($_SESSION['name'])){
      echo "<script type='text/javascript'>
     window.location.href='index.php'</script>";
    }
    else{

      if(!isset($_POST['domain_title'])){
      echo "<script type='text/javascript'>
     window.location.href='index.php'</script>";
    }
    else{
      
      $domainId = $_POST['domain_id'];
      $domainTitle = $_POST['domain_title'];
      $domainTitle = urldecode($domainTitle);


      

      $_SESSION['domain_id'] = $domainId;
      $_SESSION['domain_title'] = $domainTitle;

    }

      require 'include/db_config.php';
      $id = $_SESSION['id'];

      $db = new Database();
      $conn = $db->getConnection();

      $cnt = 0;


      $query = "SELECT * from team_details where id = '$id' and selected_domain_id = '$domainId'";

      $q = $conn->query($query);
  
      if($q->setFetchMode(PDO::FETCH_ASSOC))
      {
        
        while ($r = $q->fetch()) {
           $cnt++;
        }
        
      }

      if($cnt != 0){
        echo '<script language="javascript">
              alert("This Domain is already registered by you. You are not allowed to register the same domain again.");
              window.location.href = "domainDesc.php";
        </script>';
      }


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
                <h1 class="carousel-title"><?php echo $domainTitle; ?></h1>
                <p></p>
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
            <div class="container">

            <h1 style="text-align: center;"><b>Idea Submission Form</b></h1>

            <div id="message">

            <form>
              <div class="form-group">
                <label for="teamName">Team Name (Must be unique)*</label>
                <input type="email" class="form-control form-control-lg" id="teamName" placeholder="Team Name">
              </div>
              <h3 style="color: green">College Details</h3>
              <div class="form-group">
                <label for="nameofcollege">Name of Institute / College*</label>
                <input type="email" class="form-control form-control-lg" id="nameOfCollege" placeholder="Name of Institute / College">
              </div>
              <h3 style="color: green">Solution Details</h3>
              <div class="form-group">
                <label for="ideaTitle">Idea Title*</label>
                <input type="email" class="form-control form-control-lg" id="ideaTitle" placeholder="Idea Title">
              </div>
              <div class="form-group">
                <label for="ideaSummary">Idea Summary</label>
                <textarea class="form-control form-control-lg" id="ideaSummary" rows="3"></textarea>
              </div>
            </form>

            <h3 style="color: green">Uplaod Your Abstract</h3>

            <form method="POST" action="#" enctype="multipart/form-data">
            <!-- COMPONENT START -->
            <div class="form-group">
              <div class="input-group input-file" name="Fichier1">
                <span class="input-group-btn">
                      <button class="btn btn-default btn-choose" type="button">Choose</button>
                  </span>
                  <input type="text" id="fileUpload" class="form-control" placeholder='Choose a file...' />
                  <span class="input-group-btn">
                       <button class="btn btn-warning btn-reset" type="button">Reset</button>
                  </span>
              </div>
            </div>
            <!-- COMPONENT END -->




    <h3 style="color: green;">Team Details</h3>

<?php 


        echo '<div class="panel panel-default">
        <div class="panel-body">
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Team Leader" name="email" readonly>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <input type="text" class="form-control" id="name1" placeholder="Name" name="name" value="'.$_SESSION['name'].'" readonly>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <input type="text" class="form-control" id="email1" placeholder="Email" name="email" value="'.$_SESSION['email'].'" readonly size="25">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <input type="text" class="form-control" id="mobile1" placeholder="Mobile" name="mobile" value="'.$_SESSION['phone_number'].'" readonly>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                    <select class="form-control" id="gender1"  readonly>
                      <option  value="'.$_SESSION['gender'].'">'.$_SESSION['gender'].'</option>
                      
                    </select>
                </div>
            </form>
        </div>
    </div>';

    
 
      echo '<div class="panel panel-default">
        <div class="panel-body">
            <form class="form-inline" action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Team Member" name="email" readonly>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <input type="text" class="form-control" id="name2" placeholder="Name" name="name">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <input type="text" class="form-control" id="email2" placeholder="Email" name="email" size="25">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <input type="text" class="form-control" id="mobile2" placeholder="Mobile" name="mobile" maxlength="10">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                    <select class="form-control" id="gender2">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                </div>
            </form>
        </div>
    </div>';

      echo '<div class="panel panel-default">
        <div class="panel-body">
            <form class="form-inline" action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Team Member" name="email" readonly>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <input type="text" class="form-control" id="name3" placeholder="Name" name="name">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <input type="text" class="form-control" id="email3" placeholder="Email" name="email" size="25">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <input type="text" class="form-control" id="mobile3" placeholder="Mobile" name="mobile" maxlength="10">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                    <select class="form-control" id="gender3">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                </div>
            </form>
        </div>
    </div>';

    echo '<div class="panel panel-default">
        <div class="panel-body">
            <form class="form-inline" action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Team Member" name="email" readonly>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <input type="text" class="form-control" id="name4" placeholder="Name" name="name">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <input type="text" class="form-control" id="email4" placeholder="Email" name="email" size="25">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <input type="text" class="form-control" id="mobile4" placeholder="Mobile" name="mobile" maxlength="10">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                    <select class="form-control" id="gender4">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                </div>
            </form>
        </div>
    </div>';
        

?>





    <div class="container">

      <div id="errorMessage" style="color: red;"></div>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="btn btn-primary btn-lg" id="savebutton" onclick="finalSubmit();" value="FINAL SUBMIT">

      

    </div>

    </div>

</div>

<br>



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

        <script type="text/javascript">
          
          function bs_input_file() {
            $(".input-file").before(
              function() {
                if ( ! $(this).prev().hasClass('input-ghost') ) {
                  var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                  element.attr("name",$(this).attr("name"));
                  element.change(function(){
                    element.next(element).find('input').val((element.val()).split('\\').pop());
                  });
                  $(this).find("button.btn-choose").click(function(){
                    element.click();
                  });
                  $(this).find("button.btn-reset").click(function(){
                    element.val(null);
                    $(this).parents(".input-file").find('input').val('');
                  });
                  $(this).find('input').css("cursor","pointer");
                  $(this).find('input').mousedown(function() {
                    $(this).parents('.input-file').prev().click();
                    return false;
                  });
                  return element;
                }
              }
            );
          }
          $(function() {
            bs_input_file();
          });

        </script>

    </body>
    <!-- END BODY -->
</html>
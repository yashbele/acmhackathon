 <!DOCTYPE html>
 <html>
 
    <?php

        $page_name = "domainDesc.php";
        include_once 'header.php';

        $pageInfo = file_get_contents('json/domains/pageDetails.json');
        $pageInfo = json_decode($pageInfo);

        $domain_list = file_get_contents('json/domains/domains.json');
        $domain_list = json_decode($domain_list); 


    ?>

        <!--========== SLIDER ==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                
            </div>

            <!-- Wrapper for slides -->
            
                <div class="item active">
                    <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40" style="margin-top: 100px;">
                                <h1 class="carousel-title"><?php echo $pageInfo->pageTitle; ?></h1>
                                <p><?php echo $pageInfo->description; ?></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            
        </div>
        <!--========== SLIDER ==========-->

        <br>
        <div id="select">
        <h1 align="center">THEME : SOCIAL INNOVATION</h1>
        <div class="container">
            <div class="panel-group" id="accordion">

        <?php 

            $i=1;

            foreach ($domain_list as $domain) {
                echo '<div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i.'">'.$domain->domain_title.'</a>
                </h4>
              </div>
              <div id="collapse'.$i.'" class="panel-collapse collapse">
                <div class="panel-body">'.$domain->domain_description.'</div>
                &nbsp;&nbsp;&nbsp;&nbsp;';

                if(!isset($_SESSION['name'])){
                echo '<a href="login.php"><button type="button" class="btn btn-default">Select</button></a><br><br>';
            }

            else{

                $domainTitle = urlencode($domain->domain_title);
                $domainId = $domain->domain_id;


                echo '<form action="idea.php" method="post">
                        <input type="hidden" name="domain_title" value='.$domainTitle.'>
                        <input type="hidden" name="domain_id" value='.$domainId.'>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-default" value="Select"><br><br>
                    </form>';
            }

                echo '</div>
            </div>';

             $i++;     
            }

        ?> 

        <script type="text/javascript">
            function selectedDomain(domain_id)
            {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById('select').innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "ideaSubmission.php", true);
                xhttp.send();
            }
        </script>

          </div> 
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
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>
<!DOCTYPE html>
<html lang="en" class="no-js">
  
    <?php 

        $page_name = "t&c.php";
        include_once 'header.php';
        
        $tcdetails = file_get_contents('json/t&c/pageDetails.json');
        $tcdetails = json_decode($tcdetails);

        $tandc = file_get_contents('json/t&c/tandc.json');
        $tandc = json_decode($tandc);


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
                                <h1 class="carousel-title"><?php echo $tcdetails->pageHeading; ?></h1>
                                <p><?php echo $tcdetails->description; ?></p>
                            </div>
                        </div>
                    </div>
                </div>      
        </div>
        <!--========== SLIDER ==========-->

        

        <!-- Testimonials -->
        <?php 

            foreach ($tandc as $terms) {

                echo '<div class="content-lg container">
                <div class="row">
                    <div class="col-sm-9">
                        <h2>'.$terms->question.'</h2>

                        <div class="swiper-slider swiper-testimonials">
        
                            
                                    <blockquote class="blockquote">';

                                    foreach ($terms->includes as $termsc) {
                                        echo '<div class="margin-b-20">
                                            '.$termsc.'
                                        </div>';
                                    }
                                        
                                        
                                  echo  '</blockquote>
                                    </div>
                                </div>
                               
                                <div class="swiper-testimonials-pagination"></div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>';

        }

        ?>

        



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
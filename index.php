<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <?php 

        $page_name = "index.php";
        include_once 'header.php';

        $data = file_get_contents('json/index/organizer.json');
        $organizer = json_decode($data);

        $data1 = file_get_contents('json/index/sponsors.json');
        $sponsors = json_decode($data1);

        

        $data3 = file_get_contents('json/index/about.json');
        $about = json_decode($data3);

        $data4 = file_get_contents('json/index/guided.json');
        $guided = json_decode($data4);

        $quesdata = file_get_contents('json/index/whyWceHackathon.json');
        $questions = json_decode($quesdata);




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
                                <h1 class="carousel-title"><?php echo $siteDetails->websiteName; ?></h1>
                                <p><?php echo $siteDetails->description; ?></p>
                            </div>
                            <a href="comming.html" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">DOMAINS</a>
                        </div>
                    </div>
                </div>
                
            
        </div>
        <!--========== SLIDER ==========-->

        <!-- About -->
        <div class="content-lg container" id="about">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2><?php echo $about->title; ?></h2>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="margin-b-30">
                        <p><?php echo $about->details1; ?></p>
                        <p><?php echo $about->details2; ?></p>
                    </div>
                    <p></p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="img/640x380/hack.jpg" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End About -->


        <!-- Service -->
        <div class="bg-color-sky-light" data-auto-height="true">
            <h1 style="text-align: center;padding-top: 30px;">Why <?php echo $siteDetails->websiteName; ?> ?</h1>
            <div class="content-lg container">
                <?php 

                    $i = 0;

                    foreach ($questions as $ques) {
                        if($i==0 || $i%2==0){
                            echo '<div class="row row-space-1 margin-b-2">';
                        }

                        echo '<div class="col-sm-6 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <h3>'.$ques->question.'</h3>
                                <p class="margin-b-5">'.$ques->answer.'</p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>';

                        if ($i%2==1) {
                            echo '</div>';
                        }
                        $i++;
                    }

                ?>
            </div>
        </div>
        <!-- End Service -->



        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->
        <div class="bg-color-sky-light" data-auto-height="true">
            
            <div class="content-lg container">
                <h2 style="text-align: center;">ORGANIZERS</h2>
                <div class="row row-space-1 margin-b-2">

                    <?php 

                        foreach($organizer as $organize){
                            echo '<div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon"><img src="images/logo/'.$organize->logo.'.png" class="organizer_logo" ></i>
                                </div>
                                <div class="service-info">
                                    <h3>'.$organize->organizerHeading.'</h3>
                                    <p class="margin-b-5">'.$organize->description.'</p>
                                </div>
                                <a href="'.$organize->link.'" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>';
                        }    

                    ?>

                    
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Service -->


        <!-- Clients -->
        <div class="bg-color-sky-light">
                    <br>
            <h2 style="text-align: center;">SPONSORS</h2>
            <div class="content-lg container">
                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">

                        <!-- <div class="swiper-slide"> in case we want slider -->

                        <?php 

                            foreach($sponsors as $sponsor){
                                echo '<div>
                                <img class="swiper-clients-img" src="img/clients/'.$sponsor->sponsorsLogo.'" alt="Clients Logo">
                            </div>';
                            }    

                        ?>     

                    </div>
                    <!-- End Swiper Wrapper -->
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->

        <!-- Team -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>GUIDED BY</h2>
                    </div>
                </div>
                <!--// end row -->
                <?php

                    $i = 0;

                    foreach($guided as $guider){

                            if($i == 0 || $i == 4){
                                echo '<div class="row">';
                            }

                        echo '<div class="col-sm-3 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="'.$guider->guiderImage.'" alt="Team Image">
                            </div>
                        </div>
                        <h4><a href="#">'.$guider->guiderName.'</a> <span class="text-uppercase margin-l-20">'.$guider->guiderPost.'</span></h4>
                        <p></p>
                        
                    </div>';

                        if($i == 3){
                            echo '</div>';
                        }

                    $i++;

                    }
                ?>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- End Team -->


        




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
<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <?php 

        $page_name = "contact.php";
        include_once 'header.php';

        $contactDetails = file_get_contents('json/contact/contactDetails.json');
        $contactDetails = json_decode($contactDetails);

        $contactPeople = file_get_contents('json/contact/contactPeople.json');
        $contactPeople = json_decode($contactPeople);

    ?>   

        <!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title"><?php echo $contactDetails->pageHeading; ?></h1>
                <p><?php echo $contactDetails->description; ?></p>
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Contact List -->
        <div class="section-seperator">
            <div class="content-lg container">
                <div class="row">
                    <!-- Contact List -->
                    <?php 

                        foreach ($contactPeople as $contactpeople) {
                            echo '<div class="col-sm-4 sm-margin-b-50">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="'.$contactpeople->image.'" alt="Team Image" style="height:200px; width: 230px;">
                            </div><br>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3><a href="'.$contactpeople->link.'">'.$contactpeople->name.'</a><br><span class="text-uppercase margin-l-20">'.$contactpeople->post.'</span></h3>
                            <p>'.$contactpeople->detail.'</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i>'.$contactpeople->phoneDetails.'</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i>'.$contactpeople->emailDetails.'</li>
                                <li><i class="icon-large icon-search"></i></li>
                            </ul>
                        </div>
                    </div>';
                        }

                    ?>

                    
                    <!-- End Contact List -->
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Contact List -->
        <br><br>

        <!-- Google Map -->
        <div id="map" style="width:100%;height:500px"></div>

        <script>
            function myMap() {
              var myCenter = new google.maps.LatLng(16.845702,74.601275);
              var mapCanvas = document.getElementById("map");
              var mapOptions = {center: myCenter, zoom: 8};
              var map = new google.maps.Map(mapCanvas, mapOptions);
              var marker = new google.maps.Marker({position:myCenter});
              marker.setMap(map);
            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbunfNfWmrTzqkdbXGKw8uRI9Pwi01Oe8&callback=myMap"></script>


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

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <!-- <script src="js/components/gmap.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script> -->

    </body>
    <!-- END BODY -->
</html>
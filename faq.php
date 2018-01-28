
    <?php 

        $page_name = "faq.php";
        include_once 'header.php';

        $faqdata = file_get_contents('json/faq/faqheader.json');
        $faq = json_decode($faqdata);

        $quesdata = file_get_contents('json/faq/question.json');
        $questions = json_decode($quesdata);

        $prizeFisrt = file_get_contents('json/faq/prize1.json');
        $prizeFisrt = json_decode($prizeFisrt);

        $prizeSecond = file_get_contents('json/faq/prize2.json');
        $prizeSecond = json_decode($prizeSecond);

        $prizeThird = file_get_contents('json/faq/prize3.json');
        $prizeThird = json_decode($prizeThird);

    ?>

        <!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title"><?php echo $faq->pageTitle; ?></h1>
                <p><?php echo $faq->description; ?></p>
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->
        <div class="bg-color-sky-light" data-auto-height="true">
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

        <!-- Pricing -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <h1 style="text-align: center">Prizes</h1>
                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <!-- Pricing -->
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-badge"></i>
                                    <h3><?php echo $prizeSecond->prizeTitle; ?><span> - RS.</span><?php echo $prizeSecond->prizeMoney; ?></h3>
                                    <p><?php //echo $prizeSecond->description; ?></p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <?php 

                                        foreach ($prizeSecond->prizes as $prize) {
                                            echo '<li class="pricing-list-item">'.$prize.'</li>';
                                        }

                                    ?>
                                    
                                </ul>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <!-- Pricing -->
                            <div class="pricing pricing-active">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-badge"></i>
                                    <h3><?php echo $prizeFisrt->prizeTitle; ?><span> - RS.</span><?php echo $prizeFisrt->prizeMoney; ?></h3>
                                    <p><?php //echo $prizeFisrt->description; ?></p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <?php 

                                        foreach ($prizeFisrt->prizes as $prize) {
                                            echo '<li class="pricing-list-item">'.$prize.'</li>';
                                        }

                                    ?>
                                    
                                </ul>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
                            <!-- Pricing -->
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-badge"></i>
                                    <h3><?php echo $prizeThird->prizeTitle; ?><span> - RS.</span><?php echo $prizeThird->prizeMoney; ?></h3>
                                    <p><?php //echo $prizeThird->description; ?></p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <?php 

                                        foreach ($prizeThird->prizes as $prize) {
                                            echo '<li class="pricing-list-item">'.$prize.'</li>';
                                        }

                                    ?>
                                    
                                </ul>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Pricing -->
        <!--========== END PAGE LAYOUT ==========-->

        


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

    </body>
    <!-- END BODY -->
</html>
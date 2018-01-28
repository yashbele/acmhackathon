<?php
    
    session_start();
        if(!isset($_SESSION['name'])){
            session_destroy();
        }






        $siteDetails = file_get_contents("json/header/siteDetails.json");
        $siteDetails = json_decode($siteDetails);
        $data = file_get_contents('json/header/navbar.json');
        $navbarDetails = json_decode($data);
?>


<head>
        <meta charset="utf-8"/>
        <title>WCE Hackathon</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          
          <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
          <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>

          <script type="text/javascript" src="js/script.js"></script>


        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">

            <!-- Navbar -->
            <nav class="navbar navbar-default">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="glyphicon glyphicon-align-left"></span>
                  </button>
                  <a class="navbar-brand" href="#" class="brand">WCE-HACKATHON</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">

                    <?php 

                        if(isset($_SESSION['name'])){
                            echo '<a href="login.php"><button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-user" style="margin-right: 5px;"></span>'.$_SESSION['name'].'</button></a>
                    <a href="logout.php"><button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-log-in" style="margin-right: 5px;"></span>LOGOUT</button></a>';
                        }

                        else{
                            echo '<a href="registration.php"><button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-user" style="margin-right: 5px;"></span>Register</button></a>
                            <a href="login.php"><button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-log-in" style="margin-right: 5px;"></span>Log-in</button></a>';
                        }

                    ?>

                    
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>


            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.php">
                                <img class="logo-img logo-img-main" src="img/logo.png" style="max-height: 200px;max-width: 200px;" alt="WCE ACM logo">
                                <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="WCE ACM hackathon logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <?php
                                foreach ($navbarDetails as $navbar) {
                                    if($page_name === $navbar->goto){
                                        echo '<li class="nav-item"><a class="nav-item-child nav-item-hover active" href='. $navbar->goto.'>'.$navbar->page.'</a></li>';
                                    }
                                    else{
                                        echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href='. $navbar->goto.'>'.$navbar->page.'</a></li>';
                                    }
                                }
                                
                                ?>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
</header>


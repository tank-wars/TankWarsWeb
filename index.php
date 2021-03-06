<!DOCTYPE html>
<html>
    <head>
        <title>Envision</title>
        <link href="css/agency.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/scripts/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/script.js"></script>
        <link rel="shortcut icon" href="favicon.png">

        <!--Custom fonts-->

        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <script src="js/loader.js"></script>

        <script>
            $(document).ready(function () {
                $(".mywrapper").hide();
            });
        </script>


    </head>

    <body id="home" style="margin-top: 40px; padding-bottom: 60px;" >

        <?php
        require_once './header.php';
        require_once './footer.php';
        ?>

        <div class="preloader">
            <div class="animation"></div>
        </div>

        <div class="mywrapper">
            <!--Carousel-->
            <div id="home_slider" class="col-xs-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/home_carousel/slider_1.jpg" alt="..." id="bg">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item">
                            <img src="img/home_carousel/slider_2.jpg" alt="..." id="bg">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item">
                            <img src="img/home_carousel/slider_3.jpg" alt="..." id="bg">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--/Carousel-->
        </div>  

    </body>
</html>

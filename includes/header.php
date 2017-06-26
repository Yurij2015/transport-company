<?php
if (!isset ($layout_context)) {
    $layout_context = "public";
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Транспортная компания</title>
    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic'
          rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Flaticon CSS -->
    <link href="../fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Offcanvas CSS -->
    <link href="../css/hippo-off-canvas.css" rel="stylesheet">
    <!-- animate CSS -->
    <link href="../css/animate.css" rel="stylesheet">
    <!-- language CSS -->
    <link href="../css/language-select.css" rel="stylesheet">
    <!-- owl.carousel CSS -->
    <link href="../owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <!-- magnific-popup -->
    <link href="../css/magnific-popup.css" rel="stylesheet">
    <!-- Main menu -->
    <link href="../css/menu.css" rel="stylesheet">
    <!-- Template Common Styles -->
    <link href="../css/template.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="../css/responsive.css" rel="stylesheet">

    <script src="../js/vendor/modernizr-2.8.1.min.js"></script>
    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../js/vendor/html5shim.js"></script>
    <script src="../js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
<div id="st-container" class="st-container">
    <div class="st-pusher">
        <div class="st-content">
            <header class="header">
                <nav class="top-bar">
                    <div class="overlay-bg">
                        <div class="container">
                            <div class="row">

                                <div class="col-sm-6 col-xs-12">
                                    <div class="call-to-action">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-phone"></i> +79146469252</a></li>
                                            <li><a href="#"><i class="fa fa-envelope"></i> logistic@magistraltransport.ru</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.call-to-action -->
                                </div><!-- /.col-sm-6 -->

                                <div class="col-sm-6 hidden-xs">
                                    <div class="topbar-right">

                                        <ul class="social-links list-inline pull-right">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                        </ul>
                                    </div><!-- /.social-links -->
                                </div><!-- /.col-sm-6 -->

                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.overlay-bg -->
                </nav><!-- /.top-bar -->

                <nav class="navbar navbar-default" role="navigation">

                    <div class="container mainnav">
                        <div class="navbar-header">
                            <h1 class="logo"><a class="navbar-brand" href="/"><img src="../img/logo.png"
                                                                                            alt=""></a></h1>

                            <!-- offcanvas-trigger -->
                            <button type="button" class="navbar-toggle collapsed pull-right">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-bars"></i>
                            </button>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-collapse">


                            <span class="search-button pull-right"></span>

                            <ul class="nav navbar-nav navbar-right">
                                <!-- Home -->
                                <li class="dropdown <?php if ($page == "index") {
                                    echo "active";
                                } ?> "><a href="../index.php">Главная </a>
                                </li>
                                <!-- /Home -->

                                <!-- About -->
                                <li class="dropdown <?php if ($page == "about") {
                                    echo "active";
                                } ?>"><a href="../about.php">О компании</a>
                                </li>
                                <!-- /Pages -->

                                <!-- Order -->
                                <li class="dropdown <?php if ($page == "orderform") {
                                    echo "active";
                                } ?>"><a href="../orderform.php">Оформить заказ</a>

                                </li>

                                <li class="dropdown <?php if ($page == "blog") {
                                    echo "active";
                                } ?>"><a href="../blog.php">Блог</a>

                                </li>
                                <!-- /Pages -->
                                <li class="dropdown <?php if ($page == "contact-form") {
                                    echo "active";
                                } ?>"><a href="../contact-form.php">Контакты</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                </nav>
            </header>





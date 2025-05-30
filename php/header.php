<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="One Page Corporate HTML Template">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <!-- Title -->
    <title>İzmir Karşıyaka Avukat Sahra Artun & Artun Hukuk Bürosu</title>

    <!-- Necessary CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS Only GRID -->
    <link href="../../../css?family=Prata" rel="stylesheet">
    <link href="../../../css-1?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/google-font.css"> <!-- Google Font -->
    <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="css/swiper.min.css"> <!-- Swiper slider -->
    <link rel="stylesheet" href="css/jquery.mb.YTPlayer.min.css"> <!-- Video background -->
    <link rel="stylesheet" href="css/template.css"> <!-- Template CSS -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
$servisler_JSON = json_decode(file_get_contents('data/servisler.json'));
$blog_JSON = json_decode(file_get_contents('data/blog.json'));

?>

<body>

    <!-- Wrapper -->
    <div class="site-wrapper">

        <!-- Top Bar -->
        <div class="site-top-bar">

            <!-- Bootstrap -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <!-- Left section -->
                        <div class="site-top-bar-left-section">

                            <!-- Link -->
                            <a>
                                <!-- Font awesome icon -->
                                <i class="fa fa-clock-o"></i>
                                <!-- Text -->
                                <span>Mon to Sat : 08:00 - 15:30</span>
                            </a>

                        </div>
                        <!-- End Left Section -->


                        <!-- Right Section -->
                        <div class="site-top-bar-right-section">

                            <!-- Link -->
                            <a href="tel:+1801454587">
                                <!-- Icon -->
                                <i class="fa fa-phone"></i>
                                <!-- Text -->
                                <span>+1 801 4545 87</span>
                            </a>

                            <!-- Link -->
                            <a href="mailto:contact@gmail.com">
                                <!-- Icon -->
                                <i class="fa fa-envelope"></i>
                                <!-- Text -->
                                <span>contact@gmail.com</span>
                            </a>

                        </div>
                        <!-- End Right Section -->

                    </div>
                </div>
            </div>
            <!-- End Bootstrap -->

        </div>
        <!-- End Top Bar -->

        <!-- Header -->
        <header class="site-header" id="sticky-header">

            <!-- Bootstrap -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <!-- Logo -->
                        <div class="site-logo">
                            <!-- Link -->
                            <a href="index.php">
                                <!-- Logo Image -->
                                <img src="images/logo.png" alt="Logo">
                            </a>
                        </div>
                        <!-- End logo -->

                        <!-- Navigation Toggle Button -->
                        <div class="site-nav-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- End Nav Toggle Button -->

                        <!-- Navigation -->
                        <nav class="site-nav">
                            <ul>
                                <!-- Active Item (Use the active class) -->

                                <li class="active"><a href="index.php">Anasayfa</a></li>
                                <li class="active"><a href="hakkimizda.php">Hakkımızda</a></li>
                                <li><a href="hakkimizda.php">Çalışma Alanlarımız
                                        <i class="indicator-desktop fa fa-angle-down"></i> </a> <!-- Desktop sub menu indicator icon -->
                                    <i class="indicator-mobile fa fa-angle-down"></i> <!-- Mobile view sub menu indicator icon -->

                                    <!-- Sub menu level 1 -->
                                    <ul class="sub-menu">
                                        <?php
                                        foreach ($servisler_JSON as $servisler) { ?>
                                            <li><a href="servisler.php?name=<?= $servisler->service_link ?>"><?= $servisler->service_name ?></a></li>

                                        <?php  }
                                        ?>

                                    </ul>
                                </li>
                                <li><a href="hakkimizda.php">Makaleler
                                        <i class="indicator-desktop fa fa-angle-down"></i> </a> <!-- Desktop sub menu indicator icon -->
                                    <i class="indicator-mobile fa fa-angle-down"></i> <!-- Mobile view sub menu indicator icon -->

                                    <!-- Sub menu level 1 -->
                                    <ul class="sub-menu">
                                        <?php
                                        foreach ($blog_JSON as $blog) { ?>
                                            <li><a href="servisler.php?name=<?= $blog->blog_link ?>"><?= $blog->blog_name ?></a></li>

                                        <?php  }
                                        ?>

                                    </ul>
                                </li>
                                <li><a href="iletisim.php">İLETİŞİM</a></li>


                            </ul>
                        </nav>
                        <!-- End Navigation -->

                    </div>
                </div>
            </div>
            <!-- End Bootstrap -->

        </header>
        <!-- End Header -->
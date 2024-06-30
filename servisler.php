<?php include "php/header.php";



$selectedVal = array();

if (isset($_GET["name"])) {

    $name = $_GET['name'];
    for ($i = 0; $i < count($servisler_JSON); $i++) {
        if ($servisler_JSON[$i]->service_link == $name) {

            array_push($selectedVal, $servisler_JSON[$i]);
        }
    }
} else {
    header("Location: index.php");
}

?>
<div id="about" class="site-about site-grey-section">

    <!-- Bootstrap -->
    <div class="container">
        <div class="row">

            <!-- Left colom -->
            <div class="col-xs-12 col-sm-12 col-md-8 ">
                <div class="right-colom">
                    <!-- H1 Heading -->
                    <h1>ÇALIŞMA ALANLARIMIZ</h1>

                    <!-- H2 heading -->
                    <h2><?= $selectedVal[0]->service_name ?></h2>

                    <!-- Paragraph -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industrys standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries but also the leap into electronic typesetting remaining essentially unchanged It was popularised in the with the release of Letraset sheets containing Lorem Ipsum passages and moe recently with desktop.</p>



                </div>
            </div>

            <!-- Right colom -->
            <div class="col-xs-12 col-sm-12 col-md-4 ">
                <div class="left-colom">
                    <!-- Figure -->
                    <figure>
                        <img src="images/about-us-bg.png" alt="image">
                    </figure>

                </div>
            </div>

        </div>
    </div>
    <!-- End Bootstrap -->

</div>
<div id="services" class="site-services site-dark-section">

    <!-- Bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <!-- H1 Heading -->
                <h1>Artun Hukuk</h1>

                <!-- H2 heading -->
                <h2>Çalışma Alanlarımız </h2>

                <!-- Bootstrap inner columns -->
                <div class="row">
                    <!-- icon box  -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="feature-box s1">
                            <!-- Icon -->
                            <figure> <img src="images/home-service-icon1.png" alt="icon"> </figure>
                            <!-- Heading -->
                            <h3>Business Law</h3>
                            <!-- Paragraph -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been industrys.</p>

                            <!-- Link -->
                            <a class="more-text" href="#"> Read More</a>
                        </div>
                    </div>

                    <!-- icon box  -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="feature-box s2">
                            <!-- Icon -->
                            <figure> <img src="images/home-service-icon2.png" alt="icon"> </figure>
                            <!-- Heading -->
                            <h3>Family Law</h3>
                            <!-- Paragraph -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been industrys.</p>

                            <!-- Link -->
                            <a class="more-text" href="#"> Read More</a>
                        </div>
                    </div>

                    <!-- Clearfix for small view -->
                    <div class="clearfix visible-sm"></div>

                    <!-- icon box  -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="feature-box s3">
                            <!-- Icon -->
                            <figure> <img src="images/home-service-icon3.png" alt="icon"> </figure>
                            <!-- Heading -->
                            <h3>Criminal Law</h3>
                            <!-- Paragraph -->
                            <p>Typeseing industry Lorem Ipsum been industry standard ever since the when an Lorem Ipsum.</p>

                            <!-- Link -->
                            <a class="more-text" href="#"> Read More</a>
                        </div>
                    </div>

                    <!-- Clearfix for medium and large view -->
                    <div class="clearfix visible-lg visible-md"></div>

                    <!-- icon box  -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="feature-box s4">
                            <!-- Icon -->
                            <figure> <img src="images/home-service-icon4.png" alt="icon"> </figure>
                            <!-- Heading -->
                            <h3>Educational Law</h3>
                            <!-- Paragraph -->
                            <p>Lorem Ipsum is simply dummy of the tingand typeseing industry Lorem Ipsum been industry standard.</p>

                            <!-- Link -->
                            <a class="more-text" href="#"> Read More</a>
                        </div>
                    </div>

                    <!-- Clearfix for small view -->
                    <div class="clearfix visible-sm"></div>


                    <!-- icon box  -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="feature-box s5">
                            <!-- Icon -->
                            <figure> <img src="images/home-service-icon5.png" alt="icon"> </figure>
                            <!-- Heading -->
                            <h3>Real Estate Law</h3>
                            <!-- Paragraph -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been industrys.</p>

                            <!-- Link -->
                            <a class="more-text" href="#"> Read More</a>
                        </div>
                    </div>

                    <!-- icon box  -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="feature-box s6">
                            <!-- Icon -->
                            <figure> <img src="images/home-service-icon6.png" alt="icon"> </figure>
                            <!-- Heading -->
                            <h3>Tax Law</h3>
                            <!-- Paragraph -->
                            <p>Lorem Ipsum is simply dummy of the tingand typeseing industry Lorem Ipsum been industry standard ever.</p>

                            <!-- Link -->
                            <a class="more-text" href="#"> Read More</a>
                        </div>
                    </div>

                </div>
                <!-- End inner columns -->

            </div>
        </div>
    </div>
    <!-- End Bootstrap -->

</div>
<?php include "php/footer.php" ?>
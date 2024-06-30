<?php include 'php/header.php' ?>
<div id="about" class="site-about site-grey-section site-call-to-action " style="background-image: none; color:black">

    <style>
        .site-call-to-action p {
            color: black;
        }

        .site-call-to-action h1 {
            color: black;
        }
    </style>
    <!-- Bootstrap -->
    <div class="container">
        <div class="row">

            <!-- Left colom -->
            <div class="col-xs-12 col-sm-12 col-md-5 ">
                <div class="right-colom">
                    <!-- H1 Heading -->
                    <h1>İLETİŞİM</h1>

                    <!-- H2 heading -->
                    <h2>We always fight for your justice to win</h2>

                    <!-- Paragraph -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industrys standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries but also the leap into electronic typesetting remaining essentially unchanged It was popularised in the with the release of Letraset sheets containing Lorem Ipsum passages and moe recently with desktop.</p>

                    <!-- Read more -->
                    <div class="btn">
                        <a class="theme-btn" href="#"> contact us</a>
                    </div>

                    <!-- Call -->
                    <div class="call">
                        <a href="tel:+1801454587">
                            <!-- Icon -->
                            <i class="fa fa-phone"></i>
                            <!-- Text -->
                            <span> +1 801 4545 87</span>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Right colom -->
            <div class="col-xs-12 col-sm-12 col-md-7 ">
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
<div class="site-call-to-action" id="call-to-action">

    <!-- Bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <!-- Box -->
                <div class="site-box">

                    <!-- H1 heading -->
                    <h1>Are You Looking For Someone To Help?<br>
                        Contact Us Today.</h1>

                    <!-- Bootstrap inner columns -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-offset-2">

                            <!-- Paragraph -->
                            <p>Lorem Ipsum is simply dummy text of therinting and typeseing
                                industry Lorem sum haseen the industry's standard dummy
                                text ever since the when aning.</p>

                        </div>

                        <!-- call-info -->
                        <div class="call-info">
                            <ul>
                                <li><a href="tel:11234567890"> <!-- Icon --> <i class="fa fa-phone"></i> +1 123.456.7890 </a> </li>
                                <li><a href="mailto:support@gmail.com"> <!-- Icon --> <i class="fa fa-envelope"></i> contact@example.com </a> </li>
                                <li> <i class="fa fa-clock-o"></i> Mon – Fri 09 AM-08 PM </li>
                            </ul>
                        </div>

                        <div class="col-xs-12">

                            <!-- Button -->
                            <a href="#" class="theme-btn"> Schedule a Free Consultation </a>

                        </div>
                    </div>

                </div>
                <!-- End box -->

            </div>
        </div>
    </div>
    <!-- End Bootstrap -->

</div>


<div id="contact" class="site-quick-support site-dark-section">

    <!-- Bootstrap -->
    <div class="container">
        <div class="row">
            <!-- Bootstrap inner columns -->
            <div class="col-xs-12">

                <div class="map-and-form-container">

                    <!-- Left colom -->
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="left-colom">
                            <figure> <img src="images/quick-support-man.png" alt="image"> </figure>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <!-- form -->
                        <div class="form-container">
                            <!-- H1 heading -->
                            <h1>Contact us</h1>

                            <!-- H2 heading -->
                            <h2>Any Question ?<br>
                                Feel Free to Ask Us.</h2>

                            <!-- Contact form -->
                            <form action="php/form.php" method="post" id="contactForm" class="site-contact-form">
                                <!-- Name -->
                                <label><input type="text" name="contact_name" placeholder="Name" required="required"></label>
                                <!-- Email -->
                                <label><input type="email" name="contact_email" placeholder="Email" required="required"></label>
                                <!-- Phone -->
                                <label><input type="number" name="contact_phone" placeholder="Phone" required="required"></label>
                                <!-- Message -->
                                <label><textarea name="contact_message" placeholder="Message" required=""></textarea></label>
                                <!-- Submit -->
                                <button type="submit">Request free Consultation <i class="fa fa-spin fa-spinner"></i></button>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- End map and form container -->

            </div>
            <!-- End bootstrap inner columns -->
        </div>
    </div>
    <!-- End bootstrap -->

</div>



<?php include 'php/footer.php' ?>
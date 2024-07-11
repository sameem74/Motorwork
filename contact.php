<!DOCTYPE html>
<html lang="en">
<?php
include('include/headerlink.php');
?>

<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <?php
include('include/header.php');
?>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contact us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Contact US</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

             <div class="contact-form">
                <form method="post" action="sendemail.php" id="contact-form">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group pull-right">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone No" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button type="submit" name="submit-form">send Massage</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="contact-info">
                <div class="row clearfix">
                    <div class="image-column col-lg-8 col-md-12 col-sm-12">
                        <figure><img src="images/resource/car-image.png" alt=""></figure>
                    </div>

                    <div class="info-column col-lg-4 col-md-12 col-sm-12">
                        <h3>Contact Info</h3>
                        <ul>
                            <li>
                                <span class="icon flaticon-placeholder"></span>
                                <p><strong>Address:</strong><br>Near ShahidPath ,Utrethia, Telibagh Lucknow</p>
                            </li>
                            
                            <li>
                                <span class="icon flaticon-phone"></span>
                                <p><strong>Phone:</strong>+91 800125 6524</p>
                                <p><span>Email:</span><a href="#" class="mailto:moto@autowork.com">moto@autowork.com</a></p>
                            </li>

                            <li>
                                <span class="icon flaticon-stopwatch"></span>
                                <p><strong>Workshop Timeing :</strong><br>  09:30am to 7:00pm  Sunday Closed</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7124.500016764256!2d80.94085821468224!3d26.76829950551042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfb75045b8f6d%3A0x38c714b481dadde0!2sUthratia!5e0!3m2!1sen!2sin!4v1646984914031!5m2!1sen!2sin" width="600" height="450" style="border:10;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    <!-- End Map Section -->

     <!--Clients Section-->
    <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!-- Main Footer -->
<?php
include('include/footer.php');
?>

<?php
include('include/footerlink.php');
?>
</body>
</html>

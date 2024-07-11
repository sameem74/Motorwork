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
                <h1>Registration</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Registration</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Login Section-->
    <section class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <!-- Login Form -->
                    <h2>Login</h2>
                    <div class="login-form">
                        <!--Login Form-->
                        <form method="post" action="login.html">
                            <div class="form-group">
                                <label>Username or Email Address</label>
                                <input type="text" name="username" placeholder="Name or Email " required>
                            </div>

                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>

                            <div class="clearfix">
                                <div class="pull-right">
                                    <div class="form-group text-right">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">LOGIN</button>
                                    </div>
                                </div>
                                <div class="pull-left">
                                    <div class="form-group remember">
                                        <input type="checkbox" name="shipping-option" id="account-option-2">&nbsp; <label for="account-option-2">Remember me</label>
                                        <a href="#" class="psw">Lost your password?</a>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                    <!--End Login Form -->
                </div>

                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <h2>Register</h2>
                    <!-- Login Form -->
                    <div class="login-form">
                        <!--Login Form-->
                        <form method="post" action="login.html">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" name="username" placeholder="Your Email " required>
                            </div>

                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>

                            <div class="clearfix">
                                <div class="pull-right">
                                    <div class="form-group text-right">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Register</button>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                    <!--End Login Form -->
                </div>
            </div>
        </div>
    </section>
    <!--End Login  Section-->

    <!-- Subscribe Section -->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h3>Check out our repair service for your car and get a free clean</h3>
                <a href="#" class="call-btn">Order Now</a>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->

    <!-- Main Footer -->
<?php
include('include/footer.php');
?>


<?php
include('include/footerlink.php');
?>
</body>
</html>

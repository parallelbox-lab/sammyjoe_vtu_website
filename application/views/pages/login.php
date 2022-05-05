<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="darkblue" />
    <link rel="icon" href="<?= base_url();?>asset/img/mlogo.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>login | sammyjoe</title>

    <!-- Icon css link -->
    <link href="<?php echo base_url(); ?>/asset/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="<?php echo base_url(); ?>/asset/vendors/revolution/css/settings.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="<?php echo base_url(); ?>/asset/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/asset/css/swiper.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/asset/css/responsive.css" rel="stylesheet">

<style>
    .error{
        border:1px solid red;
    }
</style>
<body>
    <div class="login">
        <div class="login-wrap">
            <div class="container">
                <div class="login-content ">
                    <div class="login-logo mt-3 ">
                        <a href="#" class="">
                            <img src="<?php echo base_url(); ?>/asset/img/mlogo.png" class="login-logo" alt="sammyjoe logo" style="width: 100px;
                            ">
                        </a>
                    </div>
                    <?php 
                    $this->load->view("config/flash"); ?>
                    <div class="login-form">
                        <div align="center" class="mb-3"> <h5 class="ti" style="font-weight:900">Login into your account</h5></div>
    <?php
                    if($error)
                    {
                        echo '<div class="p-3 text-white text-center bg-danger" id="error">Invalid Email and Password. Please try again.</div><br/>';
                    }?>
                    <form method="post" id="form1" class="mt-2"> 
                             <div class="form-group">
                                <label><b>Email Address</b></label>
                                <input class="au-input au-input--full form-control" type="email" name="email" placeholder="Email" <?php if (form_error($error) !=='') { echo 'class="error"'; } ?>  value="<?php echo set_value('email'); ?>">
                                
                            </div>
                            <div class="form-group">
                                <label><b>Password</b></label>
                                <input class="au-input au-input--full form-control" type="password" name="password" placeholder="Password">
                                <
                            </div>

                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" id="#ButtonID">sign in</button>

                        </form>

                    </div>
                    <div class="register-link">
                        <div class="div">
                            <p>
                                Don't  have an account?
                                <a href="<?php echo base_url(); ?>signup">Sign Up Here</a>
                            </p>
                            <div class="mt-5">
                                <a href="<?= base_url();?>forget-password">forget password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="<?php echo base_url(); ?>/asset/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>asset/js/main.js"></script>
 <script type="text/javascript">
    $('#form1').submit(function(){
        $("#ButtonID", this)
          .html("Please Wait...");
        return true;
    });
</script>
    </div>
</body>
</html>
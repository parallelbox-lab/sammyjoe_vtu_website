<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="darkblue" />
    <link rel="icon" href="<?= base_url();?>img/mlogo.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>forget password | sammyjoe</title>

    <!-- Icon css link -->
    <link href="<?php echo base_url(); ?>/asset/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="<?php echo base_url(); ?>/asset/vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/asset/vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/asset/vendors/revolution/css/navigation.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="<?php echo base_url(); ?>/asset/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/asset/css/swiper.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/asset/css/responsive.css" rel="stylesheet">


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
                    <div class="login-form">
                        <div align="center" class="mb-3"> <span class="ti">Forget password</span></div>
        <?php echo @$error; ?>
        
                        <form action="<?php echo base_url();?>resetlink" method="post">
                        <?=$this->session->flashdata('message');?>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="au-input au-input--full form-control" type="email" name="email" placeholder="Email">
                            </div>
                            

                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Send resetlink</button>

                        </form>

                    </div>
                  
                </div>
            </div>
        </div>




    </div>
</body>

</html>
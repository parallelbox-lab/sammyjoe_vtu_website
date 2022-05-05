
    <section class="slider p-4" id="slider" style="background-color: #f8f9fa!important;margin-top:55px;">
        <div class="container">
            <div class="content">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="left">
                            <h1 class="text-xlbold" style="color:#40196d;">Satisfying all <br/>our customers needs</h1>                      
                            <p class="text-dark mt-2" style="font-size:16px;">Airtime,data bundle, Utility Bills and lots more..</p>
                            <br/>
                             <div class="flex justify-between" style="display:flex">
                                    <?php if($this->session->userdata('user_id'))
         {?>
                                <a href="<?= base_url();?>dashboard" class="menu-btn" style="border-radius:0px">My Account</a>

                                <a href="<?= base_url();?>logout" class="menu-btn2 ml-3"style="border-radius:0px">Logout</a>                                                                                     
            <?php    } else{ ?> 
                            <a class="menu-btn" href="<?php echo base_url(); ?>signup" style="border-radius:0px">Signup</a> <a class="menu-btn2 ml-3" style="border-radius:0px" href="<?php echo base_url(); ?>login">login</a>
            <?php } ?>
            </div>
                        </div>
                    </div>
                    <!-- Right-->
                    <div class="col-md-6">
                                                <div class="right" style="width:100%;height:100%;overflow:hidden;margin:0 auto;outline:none" title="" role="button" aria-label="animation" tabindex="0">

                        <img src="<?= base_url();?>asset/img/payment.png" style="width:100%" alt="auto wallet funding" class="sammyjoe-ill">
                        

                            </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    

    <div class="services-container">
        <div class="container">
            <div class="section-title">
                <h5 class="text-left">Our Products </h5>
            </div>

            <br>
            <div class="row">
                
                <div class="col-md-3 col-sm-6 mt-2">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <div class="dis">
                            <span class="small-t"><i class="fa fa-mobile" style="color: #e80368;"></i></span>
                            <h2 class=""><b>data bundle </b></h2>
                        </div>
                        <p class="mt-2">Enjoy sme data at a very cheaper price </p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-2">

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <div class="dis">
                            <span class="small-t"><i class="fa fa-phone-square" style="color: #5578ff;"></i></span>
                            <h2 class=""><b>airtime </b></h2>
                        </div>
                        <p class="mt-2">top up and enjoy discount when you purchase airtime </p>

                    </div>

                </div>
                <div class="col-md-3 col-sm-6 mt-2">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <div class="dis">
                            <span class="small-t"><i class="fa fa-desktop" style="color: #e361ff;"></i></span>
                            <h2 class=""><b>Cable Tv </b></h2>
                        </div>
                        <p class="mt-2">Start enjoying instant recharge when you purchase Dstv, gotv and lots mores </p>

                    </div>

                </div>
                <div class="col-md-3 col-sm-6 mt-2">

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <div class="dis">
                            <span class="small-t"><i class="fa fa-lightbulb-o" style="color:#ffbb2c;"></i></span>
                            <h2 class=""><b>electricity bill </b></h2>
                        </div>

                        <p class="mt-2">purchase your electricity bill e.g.Bedc, AEDC, PHEDC and lots more </p>

                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- container -->
    </div>
    <!-- service-container -->

    <section id="services">
        <div class="container mt-5'">
            <header class="section-header wow fadeInUp">
                <h3 class="sec-title">Why Choose sammyjoe</h3>
                <p>Sammyjoe is a reliable VTU platform to purchase airtime, data bundles,weac epin and lots. Our services are easy to use, fast and secure with instant delivery of your transactions.</p>
            </header>
            <div class="row mt-2">

                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon mb-2"><i class="fa fa-lock"></i></div>
                    <h4 class="title"><a href="">Secure</a></h4>
                    <p class="description">Our user's details are safe and secured and other security measures are taken to safe guide every transaction made using ssl certificate..</p>
                </div>

                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="icon"><i class="zmdi zmdi-balance-wallet"></i></div>
                    <h4 class="title"><a href="">Instant wallet funding</a></h4>
                    <p class="description">Our wallet funding system is fast and easy to use.</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="icon"><i class="fa fa-gift"></i></div>
                    <h4 class="title"><a href="">Cheap and easy to afford services</a></h4>
                    <p class="description">Our platform is the best and has one of the cheapest services .</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="icon"><i class="fa fa-support"></i></div>
                    <h4 class="title"><a href="">24/7 Customer support</a></h4>
                    <p class="description">Talk to our customer support through the whatsapp icon on page and get your reply immediately.</p>
                </div>
            </div>
        </div>
    </section>



    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 style="font-size:24PX;color:#fff">Our partners</h5>

                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive big" src="<?php echo base_url(); ?>/asset/img/mtn.jpg" alt="mtn">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive big" src="<?php echo base_url(); ?>/asset/img/gotv.jpg" alt="gotv">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive big" src="<?php echo base_url(); ?>/asset/img/startimes.png" alt="startimes">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive big" src="<?php echo base_url(); ?>/asset/img/electric.jpg" alt="electricity board">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive big" src="<?php echo base_url(); ?>/asset/img/glo.png" alt="glo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive big" src="<?php echo base_url(); ?>/asset/img/dstv.jpg" alt="Dstv">
                                    </div>
                                </div>
                            </div>
                            <!-- end of swiper-wrapper -->
                        </div>
                        <!-- end of swiper container -->
                    </div>
                    <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
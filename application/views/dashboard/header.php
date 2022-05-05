<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
<meta name="theme-color" content="#000">
    <!-- Title Page-->
    <title>Dashboard </title>
  <link rel="icon" href="<?php echo base_url();?>asset/img/mlogo.png" type="image/x-icon" />
    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url(); ?>/asset/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/asset/vendors/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/asset/vendors/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/asset/vendors/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(); ?>/asset/vendors/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>/asset/vendors/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/asset/vendors/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/asset/vendors/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/asset/vendors/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/asset/vendors/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/asset/vendors/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/asset/vendors/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/asset/vendors/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
  

    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>/asset/css/theme.css" rel="stylesheet" media="all">
     
    <style>
    .in-md {
    border-radius: 2px !important;
    outline: none;
    font-size: 15px !important;
    line-height: 20px !important;
    height: 52px !important;
    border: none !important;
    background: #ddd !important;
    padding: 16px 12px !important;
}
</style>
    
<script src="<?php echo base_url(); ?>/asset/js/jquery-3.2.1.min.js"></script>
 <script src="<?php echo base_url(); ?>/asset/js/jquery.validate.min.js"></script>
</head>

<body class="animsition" style="font-family:Muli">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="<?= base_url();?>">
                    <img src="<?php echo base_url(); ?>/asset/img/mlogo.png" alt="Sammyjoe logo" style="height:55px;width:55PX;" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    
                    <h4 class="name"><?= $account['fullname'];?></h4>
                                   <?php
                    

                    
                        if($account['status'] == 'admin') {
                            ?>
                        <a href="<?= base_url();?>cw3admin" class="btn btn-success text-white mt-2">Admin dashboard</a>
                        <?php } else { ?>
                        
                        <a href="<?= base_url();?>dashboard/edit-profile" class="btn btn-success text-white mt-2"><i class="zmdi zmdi-cogs"></i>Settings</a>
                        <?php } ?>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="<?= base_url();?>dashboard">
                                Dashboard
                               
                            </a>

                        </li>
                        <li>
                            <a href="<?= base_url();?>dashboard/airtime">
                                Buy Airtime</a>
                        </li>
                        <li>
                            <a href="<?= base_url();?>dashboard/data-bundle">
                                Buy databundle</a>
                        </li>
                        <li>
                            <a href="<?= base_url();?>dashboard/electricity">
                                Pay Electricity bills</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">Cable TV                           
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= base_url();?>dashboard/gotv">
                                        gotv</a>
                                </li>
                                <li>
                                    <a href="<?= base_url();?>dashboard/Dstv">
                                Dstv</a>
                                </li>
                                <li>
                                    <a href="<?= base_url();?>dashboard/startimes">
                                    Startimes</a>
                                </li>

                            </ul>
                        </li>
 <li>
                            <a href="<?= base_url();?>dashboard/transaction">
                                Trans history</a>
                        </li>
 <li>
                            <a href="<?= base_url();?>dashboard/edit-profile">
                                Settings</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>/asset/img/mlogo.png" alt="sammyjoe logo" style="width:85px;">
                                </a>
                            </div>
                            <div class="header-button2">

                                <div class="header-button-item has-notis js-item-menu">
                                    <i class="zmdi zmdi-account"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                   
                                            <p><a href="<?= base_url();?>dashboard/edit-profile">Edit profile</a></p>
                                            <p><a href="<?= base_url();?>dashboard/update-password">Change password</a></p>
                                            <hr/>
                                            <p><a href="<?= base_url();?>logout">Logout</a></p>
                                        </div>

                                    </div>
                                </div>
                                                  <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                  

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="<?= base_url();?>">
                        <img src="<?php echo base_url(); ?>/asset/img/mlogo.png" alt="sammyjoe logo" style="height:55PX;width:55PX;">
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">

                        <h4 class="name"><?= $account['fullname'];?></h4>
                                   <?php
                    

                    
                        if($account['status'] == 'admin') {
                            ?>
                        <a href="<?= base_url();?>cw3admin" class="btn btn-success text-white mt-2">Admin dashboard</a>
                        <?php } else { ?>
                        
                        <a href="<?= base_url();?>dashboard/edit-profile" class="btn btn-success text-white mt-2"><i class="zmdi zmdi-cogs"></i> Settings</a>
                        <?php } ?>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                  
                            <li class="active has-sub">
                                <a class="js-arrow" href="<?= base_url();?>dashboard">
                                 Dashboard
                                   
                                </a>

                            </li>
                            <li>
                            <a href="<?= base_url();?>dashboard/airtime">
                                Buy Airtime</a>
                        </li>
                            <li>
                                <a href="<?= base_url();?>dashboard/data-bundle">
                                    Data bundle</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                  Cable tv
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="<?= base_url();?>dashboard/gotv">
                                            <i class="fas fa-table"></i>gotv</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url();?>dashboard/dstv">
                                            <i class="far fa-check-square"></i>dstv</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url();?>dashboard/startimes">
                                            <i class="fas fa-calendar-alt"></i>startimes</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                 
                                <a class="" href="<?= base_url();?>dashboard/electricity">
                                   Electricity
                                    
                                </a>

                            </li>
                      

                         <li>
                            <a href="<?= base_url();?>dashboard/edit-profile">
                                Settings</a>
                        </li>

                        </ul>
                    </nav>
                </div>
            </aside>
            
            <!-- END HEADER DESKTOP-->
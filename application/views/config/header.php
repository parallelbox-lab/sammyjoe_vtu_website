<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="darkblue" />
    
        <link rel="manifest" href="<?php echo base_url();?>manifest.json">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>asset/img/mlogo.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sammyjoe | Airtime,Databundle,Waec Pin,Cable TV Sub and lot more</title>

    <!-- Icon css link -->
    <link href="<?php echo base_url(); ?>/asset/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/asset/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- Rev slider css -->
    <link href="<?php echo base_url(); ?>/asset/css/style2.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="<?php echo base_url(); ?>/asset/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/asset/css/swiper.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/asset/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>

   
	<header class="headers">

	      
                 
                        
	<a href="#" class="navbar-brand"><img src="<?= base_url();?>asset/img/mlogo.png" class="slogo" width=""></a>
	
                            <button id="toggle" class="hamburgers"> <span class="burger"></span> <span class="burger"></span> <span class="burger"></span> </button>
	<div id="nav" class="mobile-nav">
	    
	    <div class="container">
	      
	           
	       
	        <div class="flex align-center">
	              <div class="s-menu  flex justify-between" style="display:flex">
	                  <?php if($this->session->userdata('user_id'))
                    {?>
                                                <a href="<?= base_url();?>dashboard" class="menu-btn">My Account</a>
       
                                                <a href="<?= base_url();?>logout" class="menu-btn2 ml-2">Logout</a>                                         
                                                

             <?php    } else{ ?> 
                            <a class="menu-btn" href="<?php echo base_url(); ?>signup" style="">Signup</a> <a class="menu-btn2 ml-2" href="<?php echo base_url(); ?>login">login</a>
<?php } ?>
 </div>
	<ul class="menu_m">
	<li><a href="<?php echo base_url();?>">Home</a></li>
	<li><a href="<?php echo base_url();?>dashboard/data-bundle">Databundle</a></li>
	<li><a href="#">cable tv</a></li>
	<li><a href="#">Airtime</a></li>
	<li><a href="#">Electricity</a></li>
	</ul>
	</div>
	</div>
	</div>
		<div class="desktop-nav">
	<ul>
	<li><a href="#"><b>Home</b></a></li>
	<li><a href="#"><b>Databundle</b></a></li>
	<li><a href="#"><b>Cable tv</b></a></li>
	<li><a href="#"><b>Airtime</b></a></li>
	<li><a href="#">Electricity</a></li>
	</ul>
	</div>
	
	

	</header>
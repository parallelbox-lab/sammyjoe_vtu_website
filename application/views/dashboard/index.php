 <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">My Account Dahboard</span>

                                    </div>
                                    <a href="<?= base_url();?>dashboard/fund-wallet" class="au-btn au-btn-icon au-btn--green">
                                        <i class="fa fa-bank"></i>Fund wallet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            <section class="statistic mb-5">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6  col-lg-6">
                                <div class="card statistic__item--orange" style="border-radius:0PX;">
                                    <div style="display:flex;">
                                        <span class="text-white" style="font-size:15PX;"><I class="zmdi zmdi-balance-wallet"></I></span>
                                        <span class="desc text-white ml-1">Wallet balance</span></div>

                                    <h2 class="number">₦ <?php if (number_format($balance['balance']) == 0) {
	echo "0.00";
} else {
    echo number_format($balance['balance']);
}

?></h2>
                                    <div class="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6  col-sm-4 col-lg-6">

                                <div class="card statistic__item--green" style="border-radius:0PX;">                                                                        <a href="<?php echo base_url();?>dashboard/transaction"  >

                                    <div style="display:flex;">
                                        <span class="text-white" style="font-size:15PX;"><I class="fa fa-chart-line"></I></span>
                                        <span class="desc text-white ml-1">Transactions</span></div>

                                    <h2 class="number"><?php if ($alltransaction == null) {
                                    echo "0";
                                } else {
                                    echo $alltransaction;
                                }

                                    ?></h4>
                                </a></h2>
                                    <div class="icon">
                                    </div>
                                    </a>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <section class="feat ml-2" >
                
                <div class="container-fluid">
                    <h3><b>Quick services</b></h3>
                    <hr/>
                    <div class="row mt-3">
                        <div class="col">
                        <a href="<?= base_url();?>dashboard/airtime">
                            <div class="icon-box" style="background:orange;">
                                <i class="fa fa-phone-square"></I>
                            </div>
                            <p>Buy airtime </p></a>
                        </div>

                        <div class="col">
                        <a href="<?= base_url();?>dashboard/data-bundle">
                            <div class="icon-box" style="background:tomato;">
                                <i class="fa fa-mobile-phone"></I>
                            </div>
                            <p>Buy data</p></a>
                        </div>

                        <div class="col">
                        <a href="<?= base_url();?>dashboard/cabletv">
                            <div class="icon-box" style="background:dodgerblue;">
                                <i class="fa fa-desktop"></I>
                            </div>
                            <p>Cable tv</p></a>
                        </div>





                    </div>
                    <div class="row mt-5">
                        <div class="col">
                          <a href="<?= base_url();?>dashboard/electricity">
                            <div class="icon-box" style="background:mediumseagreen">
                                <i class="fa fa-bolt"></I>
                            </div>
                            <p>Electricity </p></a>
                        </div>

                        <div class="col">
                                <a href="<?= base_url();?>dashboard/waec-pin">
                            <div class="icon-box" style="background:slateblue;">
                                <i class="fa fa-book"></I>
                            </div>
                            <p>waec pin </p></a>
                        </div>

                        <div class="col">
                                <a href="<?= base_url();?>dashboard/spectranet">
                            <div class="icon-box" style="background:gray;">
                                <i class="zmdi zmdi-router"></i>
                            </div>
                            <p>Spectranet</p></a>
                        </div>





                    </div>
                </div>
            </section>



            <section>
                <div class="container-fluid mt-2">


                    <div class="card mt-3" style="border-radius: 0px">
                        <span class="desc text-dark">Do you need any help ?</span>
                        <p><b>call/whatsapp </b>- <a href="https:wa.me/08130048542">08130048542</a></p>
                        <p><b>Email </b>- <a href="mailto:complain@sammyjoe.com.ng">Complain@sammyjoe.com.ng</a></p>

                        <div class="icon">
                        </div>
                    </div>
                </div>
            </section>
            

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
            <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Transaction</li>
  </ol>
</nav>
  <div class="pushs">
            <div class="container-fluid mt-4">
                                <h4 class="text-center">Transactions</h4>

                <div class="table-responsive">

<table border="1" cellpadding="2" cellspacing="0" class="table mt-5"><tbody><tr><th>DATE/TIME</th><th>SERVICE</th><th>DESTINATION</th><th>AMOUNT</th><th>status</th></tr>
    <?php  foreach($transaction as $trans) : ?>
<tr>
<td> <?php if (($trans->date) == null) {
	echo "date not available";
} else {
    echo ($trans->date);
}
?></td>
 <td> <?php if (($trans->service) == null) {
	echo "service not available";
} else {
    echo ($trans->service);
}
?></td>
<td>										 
<?php if (($trans->phone_number) == null) {
	echo "Phone number not available";
} else {
    echo ($trans->phone_number);
}
?>
</td>
<td>   
<?php if (($trans->total_amount) == null) {
echo "price not available";
} else {
    echo ($trans->total_amount);
}

?>
</td> 
<td>   
<?php if (($trans->status) == null) {
	echo "status not available";
} else {
    echo ($trans->status);
}

?>
</td> 	
			


    </tr><tr>
<?php endforeach; ?>

</tbody></table></div></div>
<div class="pagination-links text-center">
		<?php echo $links; ?>
</div>
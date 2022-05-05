<section class="mt-2">
<div class="container">
<h3>Admin Dashboard </h3>

<div class="row">
 <div class="col-lg-6">
<div class="card">
<div class="card-body">

<ul class="list-group list-group-flush">
  <li class="list-group-items"><p>My clubkonnect wallet balance <span class="badge badge-primary badge-pill">₦ <?php if(isset($request)){
  echo $request;}else{ echo "no price"; } ?></span></p></li>
  <li class="list-group-items"><p>Members total wallet balance <span class="badge badge-primary badge-pill">₦
  <?= $balance['balance'];?></span></p> </li>
  <!--<li class="list-group-items"><p>Members total wallet - my wallet balance <span class="badge badge-primary badge-pill"><?php $result =  $balance['balance'] - $request;?>₦<?= $result;?></span> </p></li>-->
  
  <li class="list-group-items"><p>Total wallet using paystack method <span class="badge badge-primary badge-pill">14</span></p></li>
</ul>
<?php if($balance['balance'] > $request){
     ?>
     <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        Caution your customers wallet balance is greater than your clubkonnect balance fund your wallet to avoid any issue</div>
    <?php } else {?>
         <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
You have enough money your admin wallet
</div>
    <?php } ?>
</div>
</div>
</div>
 <div class="col-lg-5 mt-2">
 <div class="card p-2">
 <h3 class="">Manage website </h3>
 <div class="row p-2 ">
<a href="<?= base_url();?>cw3admin/manage-products" class="btn btn-primary btn-md p-1 m-1" tabindex="-1" role="button" aria-disabled="true">manage products</a>
<a href="<?= base_url();?>cw3admin/users" class="btn btn-secondary btn-md p-1 m-1" tabindex="-1" role="button" aria-disabled="true">Manage Member</a>
<a href="<?= base_url();?>cw3admin/transactions" class="btn btn-danger btn-md p-1 m-1" tabindex="-1" role="button" >All transaction</a>
<a href="<?= base_url();?>cw3admin/settings" class="btn btn-success btn-md p-1 m-1" tabindex="-1" role="button" >Site settings</a>
 </div>
 </div>
 
 </div>
 <br/>
</div>
</div>
</section>
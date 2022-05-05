<body style="background:;">
             <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Fund Wallet</li>
  </ol>
</nav>
<section class="container">
    
    <div class="rounded p-4">
        <div class="row">
        <!-- Mobile Recharge -->
     
                <div class="col    mb-4 mb-lg-0">
                <h2 class=" mb-3 text-center">Fund wallet</h2>
                                    <br>
                            <form action="<?php echo base_url();?>Paystack/pay" method="post">
       
          
            <div class="form-group">
            <label class="control-label" for="txtAmount">Amount to Deposit</label>
                        <input type="number" class="form-control in-md" name="amount" min="10"  max="10000" required="" placeholder="Amount to deposit">

            </div>
       <input type="hidden" name="email" value="<?= $account['email']; ?>">



    <button class="bt btn-primary au-btn" type="submit" name="pay"> Click to continue</button>

    
    </form>
    <style>
        li{
            list-style:none;
        }
    </style>
    <div class="card pd-5 bg-white mt-3">
    <h3 class="mt-3 mb-3">OR</h3>
    <p>Make payment to this account Number</p>
    <div class="mt-3">
        <ul>
            <li>Account name:Adeniran Samuel</li>
                        <li>Bank name:Kuda Bank</li>
            <li>Bank name:<span onclick="copied" id="text">3456778999</span></li>

        </ul>
    </div>
        </div>
        </div>
    <!-- End Mobile Recharge -->
    
</div>

</div>
<script>
    function copied() {
    let copy =document.getElementById('text');
  copy.select();
  copy.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copy.value);
}
</script>

</section>
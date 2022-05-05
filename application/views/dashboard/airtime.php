
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
            <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Buy Airtime</li>
  </ol>
</nav>
  <div class="pushs">
<div class="container mt-3">

   
<?php $this->load->view('config/flash'); ?>


   <?php if(isset($message)){
        ?>
   <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <?php echo $message; ?>
</div>
       <?php   }
?>
<?php if(isset($message_error)){
        ?>
   <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" id="message_error" aria-hidden="true">×</button>
      
        <?php echo $message_error; ?>
    </div>
       <?php   }
?>

                <div class="col">
                                    <h4 class="text-4 mb-3 text-center">Instant Airtime Recharge</h4>
                            <form method="post" class="form-prevent-multiple-submits"  id="form1" name="form1" >
          
 
            <div class="form-group">
                <label>Select Network</label>
                <select class="custom-select" name="id" id="network" required="true" autocomplete="off">
                  <option value="">-- Mobile Network --</option>
                    <option value="01">MTN NG</option><option value="02">GLO NG</option><option value="04">AIRTEL NG</option><option value="03">9Mobile NG</option>        
                    </select>
            </div>
            <div class="form-group">
                <label>Enter Phone Number</label>
                <input type="number" class="form-control in-md" id="phone" name="phone_no" minlength="11"  required="" placeholder="Enter Mobile Number">
            </div>
          

            <div class="form-group">
                <label>Enter Amount</label>
                <input class="form-control in-md h-5" id="amt" name="amount" placeholder="Enter Amount" min="50" required type="number">
            </div>
                            
                                				
                                							
                  <button id="ButtonID" class="bt btn-success btn-block" name="sub"  onclick="topup()" style="height:50PX;"> topup </button>
    </form>
        </div>
</div>

<script language="javascript">
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;

    if (charCode > 31 && (charCode < 48 || charCode > 57)) {

        return false;

    }
    return true;
}

function topup(){
var phone=document.getElementById('phone').value;
var amt=document.getElementById('amt').value;
var network=document.getElementById('network');


if(network.value==''){
	alert("Select network.");
	exit;
}

phone = phone.replace(/\s+/g, '');

if(phone.length<11 || phone.length>11){
	alert("Phone Number should not be less than or greater 11 Numbers.");
	exit;
}

if(isNaN(phone)){
	alert("Please enter phone number.");
	exit;
}

document.getElementById('phone').value=phone;


if(network.value=='20' && amt<2000){
	//alert("Minimum recharge on MTN Premium is 2,000 at 4.2% discount.");
	//exit;
}
if(network.value=='25' && amt<10){
	//alert("Minimum recharge on MTN VTU wallet is 2,000 at 5% discount.");
	//exit;
}

if(network.value=='30' && (amt<50 || amt>10000 )){
	alert("Minimum recharge is N50.");
	exit;
}

var dnet = element.options[ element.selectedIndex ].text;
var conf=confirm("Top up "+ phone + " with "+ dnet+ " N"+amt +"?");
if(conf==0){
	exit;
}

document.getElementById('tbut').value="Please wait...";
document.form1.submit();
}


</script>

  <script type="text/javascript">
    $('#form1').submit(function(){
        $("#ButtonID", this)
          .html("Please Wait...");
        return true;
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
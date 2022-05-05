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
    <li class="breadcrumb-item active" aria-current="page">DataBundle</li>
  </ol>
</nav>
  <div class="pushs">
                
            
  <section class="container section__content section__content--p30">


    <div class="rounded p-4">
        
   <?php $this->load->view('config/flash'); ?>
   <?php if(isset($message)){
        ?>
   <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <?php echo $message; ?>
</div>
    <?php   }
?>

<!--  -->
<?php if(isset($message_error)){
        ?>
   <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      
        <?php echo $message_error; ?>
    </div>
       <?php   }
?>
        <div class="row">
        <!-- Mobile Recharge -->
   

                <div class="col    mb-4 mb-lg-0">
                <h2 class=" mb-3 text-center">Buy DataBundle</h2>
                <form id="form1" name="form1" method="post">
                <div id="imghere"></div>
                    <div class="form-group">
                        <label class="text-dark"> Select network </label>
				              <select name="Network" id="cboMobileNetwork"   class="custom-select">
							  <option value="none" selected="">Select</option>
							  <option value="01">MTN</option>
		                                    <option value="04">AirTel</option>
		                                    <option value="02">GLO</option>		                                    
		                                	<option value="03">9mobile</option>
                            </select>
                </div>
                            <div class="form-group">

						<label class="text-dark">	Data Bundle </label>
						<br/>
						 <p class="mt-2 mb-3" id="wait" style="display:none;color:blue;"
>Loading Please wait...</p>  
							<select name="dataplan" id="dataplan" tabindex="3"  class="custom-select">
							    
							<option selected="">Select</option>
                            </select>
                                        
</div>
                <div class="form-group">

					 	<label class="text-dark">	Phone Number </label>
                          <input type="text" name="phone" id="phone" class="form-control in-md" placeholder="Enter Phone number">
						  
				</div>
									    <button type="submit" id="ButtonID" class="bt btn-success btn-block" name="sub" style="height:50PX;"> topup </button>

	    			  </form>
        </div>
    <!-- End Mobile Recharge -->

</div>

</section>
<br/><div class="" style="overflow: auto;">
    <div class="panel panel-default card rounded" style="margin:20px;">
               			<div class="panel-body">
               				<div class="panel-content">
               					<!--
               					<p>
               						Our internet/mobile data plan works with all devices e.g Andriod, Iphone, Blackberry(OS 10), computers, modems e.t.c. Data rollover if you re-subscribe before expiry of current plan.
               					</p>
               					-->
               					<p align="center" style="padding:5px;">
					                To check your data balance<br>
					                MTN &gt;&gt; *461*4# (SME)<br>
					                MTN &gt;&gt; *131*4# (direct)<br>
					                Etisalat &gt;&gt; *228#<br>
					                GLO &gt;&gt; *127*0#<br>
					                AirTel &gt;&gt; *140#
               					</p>
               				</div>
               			</div>
                       </div>
<script type="text/javascript">
        $(document).ready(function(){
            $('#cboMobileNetwork').change(function(){
               var id=$(this).val();
                $.ajax({
                    method: "POST",
                      beforeSend: function(){	
		$('#wait').css("display", "inline");
	},
	
                    url : "<?= base_url();?>dashboard/fetch_bundle",
                    
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                  complete: function() {
                            	$('#wait').css("display", "none");
                        },
                    success: function(data){

                    var html = '';                
                    var pr='';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id+'>'+data[i].dataplan+' - '+data[i].price+'</option> ';
                            }          
                        $('#dataplan').html(html);               
                }
                });
                return false;
            });

        

 $('#form1').submit(function(){
        $("#ButtonID", this)
          .html("Please Wait...");
        return true;
    });
  });
    </script>
   
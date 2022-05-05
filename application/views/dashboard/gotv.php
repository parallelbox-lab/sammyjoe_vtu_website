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
    <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard Home</a></li>
    
     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/cabletv">Cable Tv</a></li>
    <li class="breadcrumb-item active" aria-current="page">Gotv</li>
  </ol>
</nav>
<div class="container">
      
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
            <div class="row">
<div class="col mt-3">
    <?= form_open(); ?> 
                                	<!--Form-->
                 					<h2 class="mb-3">Pay GOtv Subscription<span style="font-weight: 400"> 
									- Instant Activation</span></h2>                                                                    
		                         
		                            <div class="form-group">
		                                <label for="city">TV Subscription</label>
		                                  <span class="text-danger"><?php echo form_error('cboCableTV'); ?></span>
		                                <select name="cboCableTV" id="cboCableTV" onchange="GetAmount();" onmouseup="GetAmount()" onmousedown="GetAmount()" class="form-control">		                                
		                                	<option selected disabled> -- Select one --</option>
		                                	<option value="gotv">GOtv</option>		                                   
		                                </select>
		                            </div>
		                            <div class="form-group">
		                                <label for="city">Bouquet/Package</label>
		                                  <span class="text-danger"><?php echo form_error('cbopackage'); ?></span>
		                                <select name="cboPackage" id="cboPackage" tabindex="3" onchange="GetAmount2();" onmouseup="GetAmount2()" onmousedown="GetAmount2()" class="form-control">
		                                	
								                                
				                                	                                
             		
		                                </select>
		                                
		                            </div>
		                            <div class="form-group">
		                                <label class="control-label" for="txtSmartCardNo">SmartCard/IUC Number</label> -&gt; <br/>
		                            <div id="custdet" class="mb-2 mt-2"><b></b></div>
		                                
		                                <input type="text" name="iuc" id="iuc" class="form-control input-md in-md">
		                                   <span class="text-danger"><?php echo form_error('iuc'); ?></span>

		                                  
		                            </div>
		                            
		                      <div class="form-group">
		                          <label>Price</label>
		                          <input type="text" name="txtAmount" id="txtAmount" value="" class="form-control input-md" readonly="true">
		                             <span class="text-danger"><?php echo form_error('txtAmount'); ?></span>

		                      </div>
		                      
		                  
		                            <div class="form-group">

		                               	<button type="submit" class="btn btn-primary btn-block" name="sub" id="cmdSubmit" value="Click to Proceed">Pay Now</button>
		                            </div>		                            
									<!--/Form-->
									</form>
		                            <div class="row">
		                                <div class="col-md-12 col-sm-12 col-xs-12">

		                                </div>
		                            </div>									
								</div>
								</div>
								</div>
								<script type="text/javascript">
	//var arrCode = new Array(49);					
	//for (var i = 0; i < x.length; i++) 
	//{
	//  arrCode[i] = new Array(2);
	//}	
					
	//var arrAmount = new Array(49);					
	//for (var i = 0; i < x.length; i++) 
	//{
	//  arrAmount[i] = new Array(2);
	//}	
					
	//var arrName = new Array(49);					
	//for (var i = 0; i < x.length; i++) 
	//{
	//  arrName[i] = new Array(2);
	//}
				
	var arrCode= [[],[],[]];
	var arrAmount= [[],[],[]];
	var arrName= [[],[],[]];
</script><script type="text/javascript">
								i='0';j='0';
								arrCode[i][j]='dstv-padi';
								arrAmount[i][j]='1,850.00';
								if(i==2)
								{
									arrName[i][j]='DStv Padi N1,850';
								}
								else
								{
									arrName[i][j]='DStv Padi ';
								}														
							</script><script type="text/javascript">
								i='0';j='1';
								arrCode[i][j]='dstv-yanga';
								arrAmount[i][j]='2,565.00';
								if(i==2)
								{
									arrName[i][j]='DStv Yanga N2,565';
								}
								else
								{
									arrName[i][j]='DStv Yanga ';
								}														
							</script><script type="text/javascript">
								i='0';j='2';
								arrCode[i][j]='dstv-confam';
								arrAmount[i][j]='4,615.00';
								if(i==2)
								{
									arrName[i][j]='Dstv Confam N4,615';
								}
								else
								{
									arrName[i][j]='Dstv Confam ';
								}														
							</script><script type="text/javascript">
								i='0';j='3';
								arrCode[i][j]='dstv79';
								arrAmount[i][j]='7,900.00';
								if(i==2)
								{
									arrName[i][j]='DStv  Compact N7900';
								}
								else
								{
									arrName[i][j]='DStv  Compact ';
								}														
							</script><script type="text/javascript">
								i='0';j='4';
								arrCode[i][j]='dstv3';
								arrAmount[i][j]='18,400.00';
								if(i==2)
								{
									arrName[i][j]='DStv Premium N18,400';
								}
								else
								{
									arrName[i][j]='DStv Premium ';
								}														
							</script><script type="text/javascript">
								i='0';j='5';
								arrCode[i][j]='dstv6';
								arrAmount[i][j]='6,200.00';
								if(i==2)
								{
									arrName[i][j]='DStv Asia N6,200';
								}
								else
								{
									arrName[i][j]='DStv Asia ';
								}														
							</script><script type="text/javascript">
								i='0';j='6';
								arrCode[i][j]='dstv7';
								arrAmount[i][j]='12,400.00';
								if(i==2)
								{
									arrName[i][j]='DStv Compact Plus N12,400';
								}
								else
								{
									arrName[i][j]='DStv Compact Plus ';
								}														
							</script><script type="text/javascript">
								i='0';j='7';
								arrCode[i][j]='dstv9';
								arrAmount[i][j]='25,550.00';
								if(i==2)
								{
									arrName[i][j]='DStv Premium';
								}
								else
								{
									arrName[i][j]='DStv Premium-French ';
								}														
							</script><script type="text/javascript">
								i='0';j='8';
								arrCode[i][j]='dstv10';
								arrAmount[i][j]='20,500.00';
								if(i==2)
								{
									arrName[i][j]='DStv Premium';
								}
								else
								{
									arrName[i][j]='DStv Premium-Asia ';
								}														
							</script><script type="text/javascript">
								i='0';j='9';
								arrCode[i][j]='confam-extra';
								arrAmount[i][j]='7,115.00';
								if(i==2)
								{
									arrName[i][j]='DStv Confam + ExtraView N7,115';
								}
								else
								{
									arrName[i][j]='DStv Confam + ExtraView ';
								}														
							</script><script type="text/javascript">
								i='0';j='10';
								arrCode[i][j]='yanga-extra';
								arrAmount[i][j]='5,065.00';
								if(i==2)
								{
									arrName[i][j]='DStv Yanga + ExtraView N5,065';
								}
								else
								{
									arrName[i][j]='DStv Yanga + ExtraView ';
								}														
							</script><script type="text/javascript">
								i='0';j='11';
								arrCode[i][j]='padi-extra';
								arrAmount[i][j]='4,350.00';
								if(i==2)
								{
									arrName[i][j]='DStv Padi + ExtraView N4,350';
								}
								else
								{
									arrName[i][j]='DStv Padi + ExtraView ';
								}														
							</script><script type="text/javascript">
								i='0';j='12';
								arrCode[i][j]='com-asia';
								arrAmount[i][j]='14,100.00';
								if(i==2)
								{
									arrName[i][j]='DStv Compact + Asia N14,100';
								}
								else
								{
									arrName[i][j]='DStv Compact + Asia ';
								}														
							</script><script type="text/javascript">
								i='0';j='13';
								arrCode[i][j]='dstv30';
								arrAmount[i][j]='10,400.00';
								if(i==2)
								{
									arrName[i][j]='DStv Compact + Extra View N10,400';
								}
								else
								{
									arrName[i][j]='DStv Compact + Extra View ';
								}														
							</script><script type="text/javascript">
								i='0';j='14';
								arrCode[i][j]='com-frenchtouch';
								arrAmount[i][j]='10,200.00';
								if(i==2)
								{
									arrName[i][j]='DStv Compact + French Touch N10,200';
								}
								else
								{
									arrName[i][j]='DStv Compact + French Touch ';
								}														
							</script><script type="text/javascript">
								i='0';j='15';
								arrCode[i][j]='dstv33';
								arrAmount[i][j]='20,900.00';
								if(i==2)
								{
									arrName[i][j]='DStv Premium ';
								}
								else
								{
									arrName[i][j]='DStv Premium - Extra View ';
								}														
							</script><script type="text/javascript">
								i='0';j='16';
								arrCode[i][j]='dstv40';
								arrAmount[i][j]='18,600.00';
								if(i==2)
								{
									arrName[i][j]='DStv Compact Plus ';
								}
								else
								{
									arrName[i][j]='DStv Compact Plus - Asia ';
								}														
							</script><script type="text/javascript">
								i='0';j='17';
								arrCode[i][j]='com-frenchtouch-extra';
								arrAmount[i][j]='12,700.00';
								if(i==2)
								{
									arrName[i][j]='DStv Compact + French Touch + ExtraView N12,700';
								}
								else
								{
									arrName[i][j]='DStv Compact + French Touch + ExtraView ';
								}														
							</script><script type="text/javascript">
								i='0';j='18';
								arrCode[i][j]='com-asia-extra';
								arrAmount[i][j]='16,600.00';
								if(i==2)
								{
									arrName[i][j]='DStv Compact + Asia + ExtraView N16,600';
								}
								else
								{
									arrName[i][j]='DStv Compact + Asia + ExtraView ';
								}														
							</script><script type="text/javascript">
								i='0';j='19';
								arrCode[i][j]='dstv43';
								arrAmount[i][j]='20,500.00';
								if(i==2)
								{
									arrName[i][j]='DStv Compact Plus + French Plus N20,500';
								}
								else
								{
									arrName[i][j]='DStv Compact Plus + French Plus ';
								}														
							</script><script type="text/javascript">
								i='0';j='20';
								arrCode[i][j]='complus-frenchtouch';
								arrAmount[i][j]='14,700.00';
								if(i==2)
								{
									arrName[i][j]='DStv Compact Plus + French Touch N14,700';
								}
								else
								{
									arrName[i][j]='DStv Compact Plus + French Touch ';
								}														
							</script><script type="text/javascript">
								i='0';j='21';
								arrCode[i][j]='dstv45';
								arrAmount[i][j]='14,900.00';
								if(i==2)
								{
									arrName[i][j]='DStv Compact Plus ';
								}
								else
								{
									arrName[i][j]='DStv Compact Plus - Extra View ';
								}														
							</script><script type="text/javascript">
								i='0';j='22';
								arrCode[i][j]='complus-french-extraview';
								arrAmount[i][j]='23,000.00';
								if(i==2)
								{
									arrName[i][j]='DStv Compact Plus + FrenchPlus + Extra View N23,000';
								}
								else
								{
									arrName[i][j]='DStv Compact Plus + FrenchPlus + Extra View ';
								}														
							</script><script type="text/javascript">
								i='0';j='23';
								arrCode[i][j]='dstv47';
								arrAmount[i][j]='16,000.00';
								if(i==2)
								{
									arrName[i][j]='DStv Compact + French Plus N16,000';
								}
								else
								{
									arrName[i][j]='DStv Compact + French Plus ';
								}														
							</script><script type="text/javascript">
								i='0';j='24';
								arrCode[i][j]='dstv48';
								arrAmount[i][j]='21,100.00';
								if(i==2)
								{
									arrName[i][j]='DStv Compact Plus + Asia + ExtraView N21,100';
								}
								else
								{
									arrName[i][j]='DStv Compact Plus + Asia + ExtraView ';
								}														
							</script><script type="text/javascript">
								i='0';j='25';
								arrCode[i][j]='dstv61';
								arrAmount[i][j]='23,000.00';
								if(i==2)
								{
									arrName[i][j]='DStv Premium + Asia + Extra View N23,000';
								}
								else
								{
									arrName[i][j]='DStv Premium + Asia + Extra View ';
								}														
							</script><script type="text/javascript">
								i='0';j='26';
								arrCode[i][j]='dstv62';
								arrAmount[i][j]='28,050.00';
								if(i==2)
								{
									arrName[i][j]='DStv Premium + French + Extra View N28,000';
								}
								else
								{
									arrName[i][j]='DStv Premium + French + Extra View ';
								}														
							</script><script type="text/javascript">
								i='0';j='27';
								arrCode[i][j]='hdpvr-access-service';
								arrAmount[i][j]='2,500.00';
								if(i==2)
								{
									arrName[i][j]='DStv HDPVR Access Service N2,500';
								}
								else
								{
									arrName[i][j]='DStv HDPVR Access Service ';
								}														
							</script><script type="text/javascript">
								i='0';j='28';
								arrCode[i][j]='frenchplus-addon';
								arrAmount[i][j]='8,100.00';
								if(i==2)
								{
									arrName[i][j]='DStv French Plus Add';
								}
								else
								{
									arrName[i][j]='DStv French Plus Add-on ';
								}														
							</script><script type="text/javascript">
								i='0';j='29';
								arrCode[i][j]='asia-addon';
								arrAmount[i][j]='6,200.00';
								if(i==2)
								{
									arrName[i][j]='DStv Asian Add';
								}
								else
								{
									arrName[i][j]='DStv Asian Add-on ';
								}														
							</script><script type="text/javascript">
								i='0';j='30';
								arrCode[i][j]='frenchtouch-addon';
								arrAmount[i][j]='2,300.00';
								if(i==2)
								{
									arrName[i][j]='DStv French Touch Add';
								}
								else
								{
									arrName[i][j]='DStv French Touch Add-on ';
								}														
							</script><script type="text/javascript">
								i='0';j='31';
								arrCode[i][j]='extraview-access';
								arrAmount[i][j]='2,500.00';
								if(i==2)
								{
									arrName[i][j]='ExtraView Access N2,500';
								}
								else
								{
									arrName[i][j]='ExtraView Access ';
								}														
							</script><script type="text/javascript">
								i='0';j='32';
								arrCode[i][j]='french11';
								arrAmount[i][j]='3,260.00';
								if(i==2)
								{
									arrName[i][j]='DStv French 11 N3,260';
								}
								else
								{
									arrName[i][j]='DStv French 11 ';
								}														
							</script><script type="text/javascript">
								i='1';j='0';
								arrCode[i][j]='gotv-max';
								arrAmount[i][j]='3,600.00';
								if(i==2)
								{
									arrName[i][j]='GOtv Max N3,600';
								}
								else
								{
									arrName[i][j]='GOtv Max ';
								}														
							</script><script type="text/javascript">
								i='1';j='1';
								arrCode[i][j]='gotv-jolli';
								arrAmount[i][j]='2,460.00';
								if(i==2)
								{
									arrName[i][j]='GOtv Jolli N2,460';
								}
								else
								{
									arrName[i][j]='GOtv Jolli ';
								}														
							</script><script type="text/javascript">
								i='1';j='2';
								arrCode[i][j]='gotv-jinja';
								arrAmount[i][j]='1,640.00';
								if(i==2)
								{
									arrName[i][j]='GOtv Jinja N1,640';
								}
								else
								{
									arrName[i][j]='GOtv Jinja ';
								}														
							</script><script type="text/javascript">
								i='1';j='3';
								arrCode[i][j]='gotv-smallie';
								arrAmount[i][j]='800.00';
								if(i==2)
								{
									arrName[i][j]='GOtv Smallie ';
								}
								else
								{
									arrName[i][j]='GOtv Smallie - monthly ';
								}														
							</script><script type="text/javascript">
								i='1';j='4';
								arrCode[i][j]='gotv-smallie-3months';
								arrAmount[i][j]='2,100.00';
								if(i==2)
								{
									arrName[i][j]='GOtv Smallie ';
								}
								else
								{
									arrName[i][j]='GOtv Smallie - quarterly ';
								}														
							</script><script type="text/javascript">
								i='1';j='5';
								arrCode[i][j]='gotv-smallie-1year';
								arrAmount[i][j]='6,200.00';
								if(i==2)
								{
									arrName[i][j]='GOtv Smallie ';
								}
								else
								{
									arrName[i][j]='GOtv Smallie - yearly ';
								}														
							</script><script type="text/javascript">
								i='2';j='0';
								arrCode[i][j]='nova';
								arrAmount[i][j]='900.00';
								if(i==2)
								{
									arrName[i][j]='Nova ';
								}
								else
								{
									arrName[i][j]='';
								}														
							</script><script type="text/javascript">
								i='2';j='1';
								arrCode[i][j]='basic';
								arrAmount[i][j]='1,700.00';
								if(i==2)
								{
									arrName[i][j]='Basic ';
								}
								else
								{
									arrName[i][j]='Basic - 1,700 ';
								}														
							</script><script type="text/javascript">
								i='2';j='2';
								arrCode[i][j]='smart';
								arrAmount[i][j]='2,200.00';
								if(i==2)
								{
									arrName[i][j]='Smart ';
								}
								else
								{
									arrName[i][j]='Smart - 2,200 ';
								}														
							</script><script type="text/javascript">
								i='2';j='3';
								arrCode[i][j]='classic';
								arrAmount[i][j]='2,500.00';
								if(i==2)
								{
									arrName[i][j]='Classic ';
								}
								else
								{
									arrName[i][j]='Classic - 2,500 ';
								}														
							</script><script type="text/javascript">
								i='2';j='4';
								arrCode[i][j]='super';
								arrAmount[i][j]='4,200.00';
								if(i==2)
								{
									arrName[i][j]='Super ';
								}
								else
								{
									arrName[i][j]='Super - 4,200 ';
								}														
							</script><script type="text/javascript">
								i='2';j='5';
								arrCode[i][j]='nova-weekly';
								arrAmount[i][j]='300.00';
								if(i==2)
								{
									arrName[i][j]='Nova ';
								}
								else
								{
									arrName[i][j]='';
								}														
							</script><script type="text/javascript">
								i='2';j='6';
								arrCode[i][j]='basic-weekly';
								arrAmount[i][j]='600.00';
								if(i==2)
								{
									arrName[i][j]='Basic ';
								}
								else
								{
									arrName[i][j]='Basic - 600 ';
								}														
							</script><script type="text/javascript">
								{
									arrName[i][j]='Smart - 700 ';
								}														
								i='2';j='8';
								arrCode[i][j]='classic-weekly';
								arrAmount[i][j]='1,200.00';
								if(i==2)
								{
									arrName[i][j]='Classic ';
								}
								else
								{
									arrName[i][j]='Classic - 1200 ';
								}														
							</script><script type="text/javascript">
								i='2';j='9';
								arrCode[i][j]='super-weekly';
								arrAmount[i][j]='1,500.00';
								if(i==2)
								{
									arrName[i][j]='Super ';
								}
								else
								{
									arrName[i][j]='Super - 1,500 ';
								}														
							</script><script type="text/javascript">
								i='2';j='10';
								arrCode[i][j]='nova-daily';
								arrAmount[i][j]='90.00';
								if(i==2)
								{
									arrName[i][j]='Nova ';
								}
								else
								{
									arrName[i][j]='';
								}														
							</script><script type="text/javascript">
								i='2';j='11';
								arrCode[i][j]='basic-daily';
								arrAmount[i][j]='160.00';
								if(i==2)
								{
									arrName[i][j]='Basic ';
								}
								else
								{
									arrName[i][j]='Basic - 160 ';
								}														
							</script><script type="text/javascript">
								i='2';j='12';
								arrCode[i][j]='smart-daily';
								arrAmount[i][j]='200.00';
								if(i==2)
								{
									arrName[i][j]='Smart ';
								}
								else
								{
									arrName[i][j]='Smart - 200 ';
								}														
							</script><script type="text/javascript">
								i='2';j='13';
								arrCode[i][j]='classic-daily';
								arrAmount[i][j]='320.00';
								if(i==2)
								{
									arrName[i][j]='Classic ';
								}
								else
								{
									arrName[i][j]='Classic - 320 ';
								}														
							</script><script type="text/javascript">
								i='2';j='14';
								arrCode[i][j]='super-daily';
								arrAmount[i][j]='400.00';
								if(i==2)
								{
									arrName[i][j]='Super ';
								}
								else
								{
									arrName[i][j]='Super - 400 ';
								}														
							</script><script type="text/javascript">
	function formatMoney(number, decPlaces, decSep, thouSep) 
	{
		decPlaces = isNaN(decPlaces = Math.abs(decPlaces)) ? 2 : decPlaces,
		decSep = typeof decSep === "undefined" ? "." : decSep;
		thouSep = typeof thouSep === "undefined" ? "," : thouSep;
		var sign = number < 0 ? "-" : "";
		var i = String(parseInt(number = Math.abs(Number(number) || 0).toFixed(decPlaces)));
		var j = (j = i.length) > 3 ? j % 3 : 0;
		
		return sign +
			(j ? i.substr(0, j) + thouSep : "") +
			i.substr(j).replace(/(\decSep{3})(?=\decSep)/g, "$1" + thouSep) +
			(decPlaces ? decSep + Math.abs(number - i).toFixed(decPlaces).slice(2) : "");
	}
	function validateForm1()
	{
		var cboPaymentOption = document.Form1.cboPaymentOption;
		var cboCableTV=document.Form1.cboCableTV;
		var cboPackage=document.Form1.cboPackage;
		var txtSmartCardNo=document.Form1.txtSmartCardNo;
		var txtAmount=document.Form1.txtAmount;
		
		
		var strPaymentOption = cboPaymentOption.value;
		var strCableTV=cboCableTV.value;		
		var strPackage=cboPackage.value;		
		var strSmartCardNo=txtSmartCardNo.value;	
		var strAmount=txtAmount.value;

		if (strPaymentOption=='-Select-')
		{
			alert('you have omitted the payment option.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";document.getElementById("cmdSubmit2").style.visibility = "visible";			
			cboPaymentOption.focus();
			return false;
		}
		if(strCableTV=='-Select-')
		{
			alert('you have omitted the TV Subscription.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";document.getElementById("cmdSubmit2").style.visibility = "visible";			
			cboCableTV.focus();
			return false;
		}
		if(strPackage=='-Select-')
		{
			alert('you have omitted the Bouquet/Package.');
			cboPackage.focus();document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";document.getElementById("cmdSubmit2").style.visibility = "visible";				
			return false;
		}						
		if(!strSmartCardNo)
		{
			alert('you have omitted the SamartCard/IUC Number.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";document.getElementById("cmdSubmit2").style.visibility = "visible";		
			txtSmartCardNo.focus();
			return false;
		}		
		if(!strAmount)
		{
			//alert('you have omitted the amount.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";document.getElementById("cmdSubmit2").style.visibility = "visible";
			//txtAmount.focus();		
			//return false;
		}								
	}
	function GetAmount()
	{
		var strCableTV=document.getElementById('cboCableTV').value;
		var strPackage=document.getElementById('cboPackage').value;

		var cboPackage=document.getElementById('cboPackage');
		cboPackage.length=0;

		if (strCableTV=="dstv")
		{
			i=0;k='33';	
			for (j = 0; j <k; j++) 
			{
				opt = document.createElement('option');
				opt.value = arrCode[i][j];opt.innerHTML = arrName[i][j]+ " - N"+arrAmount[i][j];
				cboPackage.appendChild(opt);
			}				
		}
		else if (strCableTV=="gotv")
		{	
			i=1;k='6';		
			for (j = 0; j <k; j++) 
			{
				opt = document.createElement('option');
				opt.value = arrCode[i][j];opt.innerHTML = arrName[i][j]+ " - N"+arrAmount[i][j];
				cboPackage.appendChild(opt);
			}			    	    	    
		}
		else if (strCableTV=="startimes")
		{	
			i=2;k='15';
			for (j = 0; j <k; j++) 
			{
				opt = document.createElement('option');
				opt.value = arrCode[i][j];opt.innerHTML = arrName[i][j]+ " - N"+arrAmount[i][j];
				cboPackage.appendChild(opt);
			}			
		}	
		
		GetAmount2();	
				
	}
	function GetAmount2()
	{
		var strCableTV=document.getElementById('cboCableTV').value;
		var strPackage=document.getElementById('cboPackage').value;
		
		if (strCableTV=="dstv")
		{
			strDiscountCableTV='0.995'; strCableTVFee='0'
			strDiscountCableTV1='0.993';
			strDiscountCableTV2=Number(strDiscountCableTV1)+0.002
			i=0;k='33';	
			for (j = 0; j <k; j++) 
			{
				if (strPackage==arrCode[i][j]) strPrice=arrAmount[i][j];
			}
		}
		else if (strCableTV=="gotv")
		{	
			strDiscountCableTV='0.995'; strCableTVFee='0'
			strDiscountCableTV1='0.993';
			strDiscountCableTV2=Number(strDiscountCableTV1)+0.002
			i=1;k='6';		
			for (j = 0; j <k; j++) 
			{
				if (strPackage==arrCode[i][j]) strPrice=arrAmount[i][j];
			}	
		}
		else if (strCableTV=="startimes")
		{	
			strDiscountCableTV='0.99'; strCableTVFee='0'
			strDiscountCableTV1='0.985';
			strDiscountCableTV2=Number(strDiscountCableTV1)+0.005
			i=2;k='15';
			for (j = 0; j <k; j++) 
			{
				if (strPackage==arrCode[i][j]) strPrice=arrAmount[i][j];
			}	
		}	
		

		document.getElementById('txtAmount').value=formatMoney((Number(strPrice.toString().replace(/,/g, ""))));
									
	}	
</script>

<script src="<?= base_url();?>asset/js/iuc-load.js">
</script>
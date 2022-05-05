 <script type="text/javascript">
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
		var cboElectricCompany=document.Form1.cboElectricCompany;
		var cboMeterType=document.Form1.cboMeterType;
		var txtMeterNo=document.Form1.txtMeterNo;
		var txtPhoneNo=document.Form1.txtPhoneNo;
		var txtAmount=document.Form1.txtAmount;
		
		
		var strPaymentOption = cboPaymentOption.value;
		var strElectricCompany=cboElectricCompany.value;		
		var strMeterType=cboMeterType.value;		
		var strMeterNo=txtMeterNo.value;	
		var strPhoneNo=txtPhoneNo.value;	
		var strAmount=txtAmount.value;

		if (strPaymentOption=='-Select-')
		{
			alert('you have omitted the payment option.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";document.getElementById("cmdSubmit2").style.visibility = "visible";			
			cboPaymentOption.focus();
			return false;
		}
		if(strElectricCompany=='-Select-')
		{
			alert('you have omitted the Electricity Company.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";document.getElementById("cmdSubmit2").style.visibility = "visible";			
			cboElectricCompany.focus();
			return false;
		}
		if(strMeterType=='-Select-')
		{
			alert('you have omitted the Meter Type.');
			cboMeterType.focus();document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";document.getElementById("cmdSubmit2").style.visibility = "visible";				
			return false;
		}						
		if(!strMeterNo)
		{
			alert('you have omitted the Meter Number.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";document.getElementById("cmdSubmit2").style.visibility = "visible";		
			txtMeterNo.focus();
			return false;
		}	
		if(!strPhoneNo)
		{
			alert('you have omitted the Phone Number.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";document.getElementById("cmdSubmit2").style.visibility = "visible";		
			txtPhoneNo.focus();
			return false;
		}			
		if(!strAmount)
		{
			alert('you have omitted the amount.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";document.getElementById("cmdSubmit2").style.visibility = "visible";
			txtAmount.focus();		
			return false;
		}								
	}
	function GetAmount()
	{
		var strElectricCompany=document.getElementById('cboElectricCompany').value;
		var strAmount=document.getElementById('txtAmount').value;
		
		if (strElectricCompany=="01")
		{
			strDiscountElectricity='0.996'; strElectricityFee='0'
			strDiscountElectricity1='0.995';
			strDiscountElectricity2=Number(strDiscountElectricity1)+0.001;						
		}
		else if (strElectricCompany=="02")
		{
			strDiscountElectricity='0.996'; strElectricityFee='0'
			strDiscountElectricity1='0.996';
			strDiscountElectricity2=Number(strDiscountElectricity1)+0.001;				
		}	
		else if (strElectricCompany=="03")
		{
			strDiscountElectricity='0.996'; strElectricityFee='0'
			strDiscountElectricity1='0.995';
			strDiscountElectricity2=Number(strDiscountElectricity1)+0.001;				
		}		
		else if (strElectricCompany=="04")
		{
			strDiscountElectricity='0.996'; strElectricityFee='0'
			strDiscountElectricity1='0.995';
			strDiscountElectricity2=Number(strDiscountElectricity1)+0.001;			
		}
		else if (strElectricCompany=="05")
		{
			strDiscountElectricity='0.996'; strElectricityFee=''
			strDiscountElectricity1='0.995';
			strDiscountElectricity2=Number(strDiscountElectricity1)+0.001;					
		}
		else if (strElectricCompany=="06")
		{
			strDiscountElectricity='0.996'; strElectricityFee='0'
			strDiscountElectricity1='0.995';
			strDiscountElectricity2=Number(strDiscountElectricity1)+0.001;			
		}
		else if (strElectricCompany=="07")
		{
			strDiscountElectricity='0.996'; strElectricityFee='0'
			strDiscountElectricity1='0.995';
			strDiscountElectricity2=Number(strDiscountElectricity1)+0.001;				
		}
		else if (strElectricCompany=="08")
		{
			strDiscountElectricity='0.996'; strElectricityFee='0'
			strDiscountElectricity1='0.995';
			strDiscountElectricity2=Number(strDiscountElectricity1)+0.001;				
		}								
		else if (strElectricCompany=="09")
		{
			strDiscountElectricity='0.996'; strElectricityFee='0'
			strDiscountElectricity1='0.995';
			strDiscountElectricity2=Number(strDiscountElectricity1)+0.001;				
		}	
		
	

		document.getElementById('txtAmount2').value=formatMoney((Number(strAmount.toString().replace(/,/g, ""))));		
									
	}
</script>
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
            <div class="container">
            <div class="row">
<div class="col mt-3">
<form  onsubmit=""  autocomplete=off method="POST" name="Form1">    
                     				 <div class="col-md-9">
                                	<!--Form-->
                 					<h2>Pay Electricty Bill<span style="font-weight: 400"> 
									- Instant Activation</span></h2>                                                                    
		                        
		                            <div class="form-group">
		                                <label for="city">Electricity Company</label>
		                                <select name="cboElectricCompany" id="cboElectricCompany" onchange="GetAmount();" onmouseup="GetAmount()" onmousedown="GetAmount()" class="form-control">		                                
		                                	
			                                	<option value="-Select-">-Select-</option>
											
				                            	<option value="01">Eko Electric - EKEDC (PHCN)</option>
				                            
				                            	<option value="02">Ikeja Electric - IKEDC (PHCN)</option>
				                            
			                                	<option value="03">Abuja Electric - AEDC</option>
			                                
			                                	<option value="05">Portharcourt Electric - PHEDC</option>
			                                
				                            	<option value="07">Ibadan Electric - IBEDC</option>	
				                            	                                			                                	
				                            	<option value="08">Kaduna Electric - KAEDC</option>
				                            
				                            	<option value="04">Kano Electric - KEDC</option>
				                            
				                            	<option value="06">Jos Electric - JEDC</option>	
				                            
				                            	<option value="09">Enugu Electric - EEDC</option>
				                            			                                								                                		                                	                           	
			                            </select>
		                            </div>
		                            <div class="form-group">
		                                <label for="city">Meter Type</label>
		                                <select name="cboMeterType" id="cboMeterType" tabindex="3" onchange="GetAmount();" onmouseup="GetAmount()" onmousedown="GetAmount()" class="form-control">
		                                	
			                                    <option value="-Select-">-Select-</option>	
		                                    			                                    
		                                    <option value="01">Prepaid</option>
											<option value="02">Postpaid</option>                                            		
		                                </select>
		                                
		                            </div>			                            	                            
		                            <div class="form-group">
		                                <label class="control-label" for="txtMeterNo">Meter Number</label> -> <label id="lblMeterNo" name="lblMeterNo"></label>		                                <input type="text"  name="txtMeterNo" id="txtMeterNo" class="form-control in-md" placeholder="Meter Number">
		                               
		                            </div>	
		                            <div class="form-group">
		                                <label class="control-label" for="txtAmount">Phone Number</label>
		                                <input name="txtPhoneNo"  type="text" value="" class="form-control in-md" placeholder="Phone Number">
		                            </div>		                            	                            
		                            <div class="form-group">
		                                <label class="control-label" for="txtAmount">Amount</label>
		                                <input name="txtAmount" id="txtAmount" type="text" value="" onchange="GetAmount();" onmouseup="GetAmount()" onmousedown="GetAmount()" class="form-control in-md" placeholder="Amount">
		                            </div>		                          
		                            <div class="form-group">
		                                                 
		                               	<button type="submit" class="btn btn-primary btn-block" name="cmdSubmit" id="cmdSubmit" value="Click to Proceed" >Pay Now</button>
		                              
		                            </div>		                
    </form>
    
    </div><!-- col -->
    </div><!-- row-->
    </div><!-- container-->
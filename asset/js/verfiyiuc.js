function topup(){
var packageName = document.getElementById('');
var hiddenIuc = document.getElementById('input_iuc');
var cboPackage = document.getElementById('cboPackage');
var form = document.getElementById('form');
var iuc = document.getElementById('iuc');
if(cboPackage.value===''){
    	alert("Select one Dstv Package cannot be Empty");

} else if(iuc.value ===''){
    alert("Iuc number cannot be empty")
}
else if(hiddenIuc.value===''){
	alert("Customer Iuc number is Invalid");
}
}

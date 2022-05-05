function validateForm1() {
    //var cboPaymentOption = document.Form1.cboPaymentOption;
    var cboMobileNetwork = document.Form1.cboMobileNetwork;
    //var cboDataSpeed=document.Form1.cboDataSpeed;
    var cboDataBundle = document.Form1.cboDataBundle;
    //var txtAmount=document.Form1.txtAmount;
    var txtDataBundlePhoneNo = document.Form1.txtDataBundlePhoneNo;

    //var strPaymentOption = cboPaymentOption.value;
    var strMobileNetwork = cboMobileNetwork.value;
    //var strDataSpeed=cboDataSpeed.value;
    var strDataBundle = cboDataBundle.value;
    //var strAmount=txtAmount.value;
    var strDataBundlePhoneNo = txtDataBundlePhoneNo.value;

    //if (strPaymentOption=='-Select-')
    //{
    //	alert('you have omitted the payment option.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";
    //	cboPaymentOption.focus();
    //	return false;
    //}
    if (strMobileNetwork == '-Select-') {
        alert('you have omitted the data mobile network.');
        document.getElementById("cmdSubmit").style.visibility = "visible";
        cboMobileNetwork.focus();
        return false;
    }
    //if(strMobileNetwork=='GLO' && strDataSpeed=='-Select-')
    //{
    //	alert('you have omitted the data speed.');
    //	cboMobileNetwork.focus();document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";
    //	return false;
    //}
    if (!strDataBundle) {
        alert('you have omitted the data bundle.');
        document.getElementById("cmdSubmit").style.visibility = "visible";
        cboDataBundle.focus();
        return false;
    }
    //if(!strAmount)
    //{
    //alert('you have omitted the amount.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";
    //txtAmount.focus();
    //return false;
    //}
    if (!strDataBundlePhoneNo) {
        alert('you have omitted the mobile number.');
        document.getElementById("cmdSubmit").style.visibility = "visible";
        txtDataBundlePhoneNo.focus();
        return false;
    }
}

function GetAmount() {
    var strDataBundle = document.getElementById('cboDataBundle').value;
    var strMobileNetwork = document.getElementById('cboMobileNetwork').value;

    var cboDataBundle = document.getElementById('cboDataBundle');
    cboDataBundle.length = 0;

    if (strMobileNetwork == "01") {

        //alert('MTN data share is currently unavailable as network provider is currently experience a downtime, pls try again later.');
        //if (1!=1)
        //{

        opt = document.createElement('option');
        opt.code = "1000";
        opt.value= "1";
        opt.innerHTML = "1GB  - (30 days)";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "1500.01";
        opt.value ="2";
        opt.innerHTML = ".15GB - 30 days";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "2000";
        opt.value="3";
        opt.innerHTML = "2 GB  - 30 days";
        cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "6";opt.innerHTML = "3 GB (SME) - 30 days";
        //cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "2500";
        opt.value="4";
        opt.innerHTML = "2.5 GB  - 30 days";
        cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "21";opt.innerHTML = "50 MB (direct) - 1 day";
        //cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "3500.01";
        opt.value="5";
        opt.innerHTML = "1.5 GB  - 7 dayS";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "5000";
        opt.value="6";
        opt.innerHTML = "5 GB  - 30 days";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "10000.01";
        opt.value="7";
        opt.innerHTML = "10 GB  - 30 days";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "22000.01";
        opt.value="8";
        opt.innerHTML = "22 GB  - 30 days";
        cboDataBundle.appendChild(opt);





        //opt = document.createElement('option');
        //opt.value = "27";opt.innerHTML = "750 MB (direct) - 7 days";
        //cboDataBundle.appendChild(opt);

        //}

    } else if (strMobileNetwork == "02") {
        //alert('9mobile databundle is currently unavailable as network provider is currently experience a downtime, pls try again later.');

        //opt = document.createElement('option');
        //opt.value = "1";opt.innerHTML = "250 MB";
        //cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "2";opt.innerHTML = "500 MB";
        //cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "1600.01";
      opt.value ="1";
        opt.innerHTML = "2GB (30 days)";
        cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "4";opt.innerHTML = "1 GB - 30 days";
        //cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "3750.01";
        opt.value="2";
        opt.innerHTML = "4.5GB (30 days)";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "5000.01";
        opt.value="3";
        opt.innerHTML = "7.2GB (30 days)";
        cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "5";opt.innerHTML = "2 GB";
        //cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "6";opt.innerHTML = "3 GB";
        //cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "8000.01";
        opt.value="4";
        opt.innerHTML = "12.5GB (30 days)";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "12000.01";
       opt.value="5";
        opt.innerHTML = "15.6GB (30 days)"; //3 GB - 30 days
        cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "7";opt.innerHTML = "4 GB";
        //cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "8";opt.innerHTML = "5 GB";
        //cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "16000.01";
        opt.value="6";
        opt.innerHTML = "25GB (30 days)";
        cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "9";opt.innerHTML = "6 GB";
        //cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "10";opt.innerHTML = "7 GB";
        //cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "11";opt.innerHTML = "8 GB";
        //cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "12";opt.innerHTML = "9 GB";
        //cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "13";opt.innerHTML = "10 GB";
        //cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "30000.01";
        opt.value="7";
        opt.innerHTML = "52.5GB (30 days)";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.code = "45000.01";
        opt.value="8";
        opt.innerHTML = "62.5GB-N4000(30 days)";
        cboDataBundle.appendChild(opt);

 


    } else if (strMobileNetwork == "04") {

        //opt = document.createElement('option');
        //opt.value = "27";opt.innerHTML = "10MB - 1 day";
        //cboDataBundle.appendChild(opt);

        //opt = document.createElement('option');
        //opt.value = "28";opt.innerHTML = "22MB - 1 day";
        //cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.value = "1";
        opt.innerHTML = "92MB-24hrs";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.value = "2";
        opt.innerHTML = "262MB-7days";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.value = "3";
        opt.innerHTML = "920MB-14days";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.value = "4";
        opt.innerHTML = "1.8GB-30days";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.value = "5";
        opt.innerHTML = "4.5GB-30days";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.value = "6";
        opt.innerHTML = "7.2GB-30days";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.value = "7";
        opt.innerHTML = "8.75GB-30days";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.value = "8";
        opt.innerHTML = "12.5GB-30days";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.value = "9";
        opt.innerHTML = "15.6GB-30days";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.value = "10";
        opt.innerHTML = "25GB-30days";
        cboDataBundle.appendChild(opt);

        opt = document.createElement('option');
        opt.value = "11";
        opt.innerHTML = "32.5GB-30days";
        cboDataBundle.appendChild(opt);


    }

    GetAmount2();
}

function GetAmount2() {
    var strDataBundle = document.getElementById('cboDataBundle').value;
    var strMobileNetwork = document.getElementById('cboMobileNetwork').value;

    if (strDataBundle == '1') {
        if (strMobileNetwork == '2')
            strPrice = '1000';
        else if (strMobileNetwork == '1')
            strPrice = '1000';
        else if (strMobileNetwork == '15')
            strPrice = '100';
        else if (strMobileNetwork == '6')
            strPrice = '100';
    }
    if (strDataBundle == '2') {
        if (strMobileNetwork == '2')
            strPrice = '1200';
        else if (strMobileNetwork == 'airtel')
            strPrice = '1200';
        else if (strMobileNetwork == '15')
            strPrice = '200';
        else if (strMobileNetwork == '6')
            strPrice = '200';
    }
    if (strDataBundle == '3') {
        if (strMobileNetwork == '2')
            strPrice = '2000';
        else if (strMobileNetwork == 'airtel')
            strPrice = '2000';
        else if (strMobileNetwork == '15')
            strPrice = '350';
        else if (strMobileNetwork == '6')
            strPrice = '500';
    }
    if (strDataBundle == '4') {
        if (strMobileNetwork == '2')
            strPrice = '10000';
        else if (strMobileNetwork == 'airtel')
            strPrice = '10000';
        else if (strMobileNetwork == '15')
            strPrice = '500';
        else if (strMobileNetwork == '6')
            strPrice = '1000';
    }
    if (strDataBundle == '5') {
        if (strMobileNetwork == '2')
            strPrice = '25000';
        else if (strMobileNetwork == 'airtel')
            strPrice = '25000';
        else if (strMobileNetwork == '15')
            strPrice = '1000';
        else if (strMobileNetwork == '6')
            strPrice = '2000';
    }
    if (strDataBundle == '6') {
        if (strMobileNetwork == '2')
            strPrice = '50000';
        else if (strMobileNetwork == 'airtel')
            strPrice = '';
        else if (strMobileNetwork == '15')
            strPrice = '1200';
        else if (strMobileNetwork == '6')
            strPrice = '2500';
    }
    if (strDataBundle == '7') {
        if (strMobileNetwork == '2')
            strPrice = '100000';
        else if (strMobileNetwork == 'airtel')
            strPrice = '2000';
        else if (strMobileNetwork == '15')
            strPrice = '2000';
        else if (strMobileNetwork == '6')
            strPrice = '3000';
    }
    if (strDataBundle == '8') {
        if (strMobileNetwork == '2')
            strPrice = '4000';
        else if (strMobileNetwork == 'airtel')
            strPrice = '2500';
        else if (strMobileNetwork == '15')
            strPrice = '3000';
        else if (strMobileNetwork == '6')
            strPrice = '4000';
    }
    if (strDataBundle == '9') {
        if (strMobileNetwork == '2')
            strPrice = '50';
        else if (strMobileNetwork == 'airtel')
            strPrice = '3000';
        else if (strMobileNetwork == '15')
            strPrice = '5000  ';
        else if (strMobileNetwork == '6')
            strPrice = '5000';
    }
    if (strDataBundle == '10') {
        if (strMobileNetwork == '2')
            strPrice = '100';
        else if (strMobileNetwork == 'airtel')
            strPrice = '3500';
        else if (strMobileNetwork == '15')
            strPrice = '2345';
        else if (strMobileNetwork == '6')
            strPrice = '8000';
    }
    if (strDataBundle == '11') {
        if (strMobileNetwork == '2')
            strPrice = '200';
        else if (strMobileNetwork == 'airtel')
            strPrice = '4000';
        else if (strMobileNetwork == '15')
            strPrice = '2680';
        else if (strMobileNetwork == '6')
            strPrice = '10000';
    }
    if (strDataBundle == '12') {
        if (strMobileNetwork == '2')
            strPrice = '15000';
        else if (strMobileNetwork == 'airtel')
            strPrice = '4500';
        else if (strMobileNetwork == '15')
            strPrice = '3015';
        else if (strMobileNetwork == '6')
            strPrice = '';
    }
    if (strDataBundle == '13') {
        if (strMobileNetwork == '2')
            strPrice = '5000';
        else if (strMobileNetwork == 'airtel')
            strPrice = '5000';
        else if (strMobileNetwork == '15')
            strPrice = '3350';
        else if (strMobileNetwork == '6')
            strPrice = '';
    }
    if (strDataBundle == '14') {
        if (strMobileNetwork == '2')
            strPrice = '84992';
        else if (strMobileNetwork == 'airtel')
            strPrice = '950';
        else if (strMobileNetwork == '15')
            strPrice = '960';
        else if (strMobileNetwork == '6')
            strPrice = '920';
    }
    if (strDataBundle == '15') {
        if (strMobileNetwork == '2')
            strPrice = '1500';
        else if (strMobileNetwork == 'airtel')
            strPrice = '1900';
        else if (strMobileNetwork == '15')
            strPrice = '1152';
        else if (strMobileNetwork == '6')
            strPrice = '1840';
    }
    if (strDataBundle == '16') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '1140';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '3325';
        else if (strMobileNetwork == 'MTN')
            strPrice = '1920';
        else if (strMobileNetwork == 'GLO')
            strPrice = '2300';
    }
    if (strDataBundle == '17') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '1425';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '4750';
        else if (strMobileNetwork == 'MTN')
            strPrice = '3360';
        else if (strMobileNetwork == 'GLO')
            strPrice = '2760';
    }
    if (strDataBundle == '18') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '1900';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '7600';
        else if (strMobileNetwork == 'MTN')
            strPrice = '4800';
        else if (strMobileNetwork == 'GLO')
            strPrice = '3680';
    }
    if (strDataBundle == '19') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '3800';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '9500';
        else if (strMobileNetwork == 'MTN')
            strPrice = '9600';
        else if (strMobileNetwork == 'GLO')
            strPrice = '4600';
    }
    if (strDataBundle == '20') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '4750';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '14400';
        else if (strMobileNetwork == 'GLO')
            strPrice = '7360';
    }
    if (strDataBundle == '21') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '9500';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '96';
        else if (strMobileNetwork == 'GLO')
            strPrice = '13800';
    }

    if (strDataBundle == '22') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '14250';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '192';
        else if (strMobileNetwork == 'GLO')
            strPrice = '16560';
    }
    if (strDataBundle == '23') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '288';
        else if (strMobileNetwork == 'GLO')
            strPrice = '18400';
    }
    if (strDataBundle == '24') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '336';
        else if (strMobileNetwork == 'GLO')
            strPrice = '9200';
    }
    if (strDataBundle == '25') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '480';
        else if (strMobileNetwork == 'GLO')
            strPrice = '460';
    }
    if (strDataBundle == '26') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '480';
        else if (strMobileNetwork == 'GLO')
            strPrice = '184';
    }
    if (strDataBundle == '27') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '480';
        else if (strMobileNetwork == 'GLO')
            strPrice = '22';
    }
    if (strDataBundle == '28') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '1440';
        else if (strMobileNetwork == 'GLO')
            strPrice = '44';
    }
    if (strDataBundle == '29') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '5760';
        else if (strMobileNetwork == 'GLO')
            strPrice = '92';
    }
    if (strDataBundle == '30') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '480';
        else if (strMobileNetwork == 'GLO')
            strPrice = '184';
    }
    if (strDataBundle == '31') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '1440';
        else if (strMobileNetwork == 'GLO')
            strPrice = '4600';
    }
    if (strDataBundle == '32') {
        if (strMobileNetwork == 'etisalat')
            strPrice = '';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '2400';
        else if (strMobileNetwork == 'GLO')
            strPrice = '460';
    }
    if (strDataBundle == '33') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '2880';
        else if (strMobileNetwork == 'GLO')
            strPrice = '';
    }
    if (strDataBundle == '34') {
        if (strMobileNetwork == 'Etisalat')
            strPrice = '';
        else if (strMobileNetwork == 'AirTel')
            strPrice = '';
        else if (strMobileNetwork == 'MTN')
            strPrice = '19200';
        else if (strMobileNetwork == 'GLO')
            strPrice = '';
    }

    var myStoreName = 'sammyjoe';
    if (myStoreName = 'sammyjoe') {
        document.getElementById('txtAmount').value = strPrice;
    } else {
        document.getElementById('txtAmount').value = strPrice * 0.998;
    }
}
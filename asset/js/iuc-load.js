 $(document).ready(function(){
            $('#iuc').change(function(){
               var id =$("#iuc").val();
                if (id === "" || id === null) {
      $("#lblSmartCardNo").html("Please insert Iuc Number");
    }else{
                $.ajax({
                      beforeSend:function(){
                    $('#lblSmartCardNo').html("<p class='mt-2 mb-2' style='color:blue;font-weight:500'>Verifying customer information...</p>");
 
                    },
                    url : "<?= base_url();?>dashboard/verifycabletv",
                    method: "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){

                        var html = '';
                        var i;
                     
                            html += '<p style="margin-bottom:5px;color:blue;font-weight:900">"Customer name:" +data+ </p>';
        
                        if(data == "INVALID_SMARTCARDNO"){
                            $('#lblSmartCardNo').html('<p style="color:blue;font-weight:500">Error Unable to load customer details</p>');
                        }else{
                            $('#input_iuc').val(data);
                            $('#lblSmartCardNo').html(data);
                        }
},
                 error:function(data){
                            $('#lblSmartCardNo').html('<p style="margin-bottom:5px;color:red;font-weight:500">Technical Error occured Unable to load user details</p>');
                 }
                });
                return false;
    }
            });
            
        });
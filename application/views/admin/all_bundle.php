        <div class="container-fluid">
        <div class="card" style="padding:18px;margin-bottom:20px;margin-top:20px;">
<?php $this->load->view('config/flash'); ?>

<div class="row">
    
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size:21px">Manage data bundle</h2>
            <div class="form-group">
                <label>Select Network</label>
              <select name="Network" id="cboMobileNetwork" class="form-control" style="width:50%">
							  <option value="none" selected="">Select</option>
							  <option value="01">MTN</option>
		                                    <option value="04">AirTel</option>
		                                    <option value="02">GLO</option>		                                    
		                                	<option value="03">9mobile</option>
                            </select>
            </div>
        </div>
        <div class="pull-right">
            <a class="btn btn-success mb-3" href="<?php echo base_url(); ?>cw3admin/add-bundle"> Add new bundle</a>
        </div>
    </div>
</div>

<div class="table-responsive">
<table class="table table-bordered">


  <thead>
      <tr>
          <th>Dataplan</th>
          <th>Price</th>
          <th>Datacode</th>
          <th width="220px">Action</th>
      </tr>
  </thead>


  <tbody id="dataplan">
 
  </tbody>


</table>
</div>
<script type="text/javascript">
        $(document).ready(function(){
            $('#cboMobileNetwork').change(function(){
               var id=$(this).val();
                $.ajax({
                    url : "<?= base_url();?>dashboard/fetch_bundle",
                    method: "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){

                        var html = '';
                  
                    var pr='';
                        var i;
                        for(i=0; i<data.length; i++){
                          
                             html +='<tr><td>'+data[i].dataplan+'</td><td>NGN '+data[i].price+'</td><td>'+data[i].datacode+'</td><td><a href="<?php echo base_url();?>cw3admin/delete-bundle?id='+data[i].id+'" class="btn btn-danger btn-sm">Delete bundle</a><a href="<?php echo base_url();?>cw3admin/edit-bundle?id='+data[i].id+'" class="btn btn-success btn-sm mt-1 ml-1">Edit bundle</a></td></tr>'
                            }
 
                 
                  
                        $('#dataplan').html(html);

                 

}
                });
                return false;
            });

        });



    </script>

</div>
</div>
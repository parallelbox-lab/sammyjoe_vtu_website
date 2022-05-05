
       <div class="container-fluid">
        <div class="card" style="padding:18px;margin-bottom:20px;margin-top:20px;">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size:21px;">Add New DataBundle</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary mb-2" href="<?php echo base_url();?>cw3admin/manage-products"> Back</a>
        </div>
    </div>
</div>


<form method="post">
  <?php $this->load->view('config/flash'); ?>
 


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             <label>Select Network</label>
              <select name="bid" id="cboMobileNetwork" class="form-control" >
							  <option>Select</option>
							  <option value="01">MTN</option>
		                                    <option value="04">AirTel</option>
		                                    <option value="02">GLO</option>		                                    
		                                	<option value="03">9mobile</option>
                            </select>
                              <?php echo form_error('bid', '<div class="error mt-2" style="color:red;">', '</div>')?>
            </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Dataplan</label>
                <input type="text" name="dataplan" placeholder="Enter dataplan" class="form-control">
                  <?php echo form_error('dataplan', '<div class="error mt-2" style="color:red;">', '</div>')?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" placeholder="Enter Price" class="form-control">
                  <?php echo form_error('price', '<div class="error mt-2" style="color:red;">', '</div>')?>
            </div>
        </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Datacode</label>
                <input type="number" name="code" placeholder="Enter datacode" class="form-control">
                  <?php echo form_error('code', '<div class="error mt-2" style="color:red;">', '</div>')?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>
</div>
</div>
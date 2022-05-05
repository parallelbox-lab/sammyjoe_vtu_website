
       <div class="container-fluid">
        <div class="card" style="padding:18px;margin-bottom:20px;margin-top:20px;">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size:21px;">Edit DataBundle</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary mb-2" href="<?php echo base_url();?>cw3admin/manage-products"> Back</a>
        </div>
    </div>
</div>


<form method="post">
  <?php $this->load->view('config/flash'); ?>
 


    <div class="row">
     
             <?php if(isset($datas)) { foreach($datas as $row) {?> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Dataplan</label>
                <input type="text" name="dataplan" value="<?php echo set_value($row->dataplan);if(set_value($row->dataplan)==''){echo $row->dataplan;} ?>" placeholder="Enter dataplan" class="form-control">
                  <?php echo form_error('dataplan', '<div class="error mt-2" style="color:red;">', '</div>')?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" value="<?php echo set_value($row->price);if(set_value($row->price)==''){echo $row->price;} ?>" placeholder="Enter Price" class="form-control">
                  <?php echo form_error('price', '<div class="error mt-2" style="color:red;">', '</div>')?>
            </div>
        </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Datacode</label>
                <input type="number" name="code" value="<?php echo set_value($row->datacode);if(set_value($row->datacode)==''){echo $row->datacode;} ?>" placeholder="Enter datacode" class="form-control">
                  <?php echo form_error('code', '<div class="error mt-2" style="color:red;">', '</div>')?>
            </div>
        </div>
                                                 <input type="hidden" value="<?php echo $_GET['id']?>" name="id"> 
                                                </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <?php }} ?>
    </div>


</form>
</div>
</div>
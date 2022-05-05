
<?php if ($this->session->flashdata('success')) : ?>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>
<?php if ($this->session->flashdata('logout')) : ?>
<div class="logout-container">
<div class="logout-flash">
 
    <?php echo $this->session->flashdata('logout'); ?>
</div>
</div>
<?php endif; ?>
<?php if ($this->session->flashdata('error')) : ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      
        <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('info')) : ?>
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo $this->session->flashdata('info'); ?>
    </div>
<?php endif; ?>

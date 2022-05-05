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
    <li class="breadcrumb-item active" aria-current="page">Edit-profile</li>
  </ol>
</nav>
<div class="col">

                   <section class="card " style="margin-top:15px;">   
                       <div class="container">  
                           <br/>  
                                           
<h4 class="mb-4">Personal Information</h4>
                                            <form id="personalInformation" method="post" action="<?php echo base_url();?>dashboard/edit-profile">
                                               <?php $this->load->view('config/flash'); ?>
                                            <?php if($error){echo '<div style="color:red;margin-top:0px;border-radius:11px;font-size:14px;" class=" text-center" >'.$error.'</div>'; }?>
    
                                                <div class="form-group">
                                                    <label for="fullName">Fullname</label>
                                                    <input type="text" name="fullname" value="<?php echo set_value('fullname');if(set_value('fullname')==''){echo $account['fullname'];} ?>" class="custom-select in-md" required="" placeholder="Full Name">
                                                </div>
                                            
                                            
                                                <h4 class="mb-4">Account Information</h4>
                                                <div class="form-group">
                                                    <label for="mobileNumber">Mobile Number</label>
                                                    <input type="text" name="number" value="<?php echo set_value('phone');if(set_value('phone')==''){echo $account['phone'];} ?>" class="custom-select in-md" minlength="11" maxlength="11"  required="" placeholder="Mobile Number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="emailID">Email ID</label>
                                                    <input type="text" name="email" value="<?php echo set_value('email');if(set_value('email')==''){echo $account['email'];} ?>" class="custom-select in-md"  required="" readonly placeholder="Email ID">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <button class="bt custom-select" type="submit" style="background:green;color:#fff;">Update personal details</button>
 
                                                </div>
                                              
                                                                                                    <br/>
                                                                                            </form>
                                                
                                                                                    </div>
                                            </div>
                                            </section></div>
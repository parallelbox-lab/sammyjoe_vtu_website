<div class="col">

                   <section class="card" style="margin-top:15px;margin-bottom:10px">   
                       <div class="container">  
                           <br/>                   
<h4 class="mb-4">Fund user wallet</h4>
                                           <?php $this->load->view('config/flash'); ?>
                                           
                                            <?php if($error){echo '<div style="color:red;margin-top:0px;border-radius:11px;font-size:14px;" class=" text-center" >'.$error.'</div>'; }?>
                                          
                                                 
                                         <?php if(isset($datas)) { foreach($datas as $row) {?> <form id="sme-data" method="post">
    
                                                <div class="form-group">
                                                    <label for="fullName">Username</label><br/>
                                                    <input readonly="true" type="text" name="name" value="<?php echo set_value($row->fullname);if(set_value($row->fullname)==''){echo $row->fullname;} ?>" class="custom-select" required="" placeholder="user Name">
                                                                                <input type="hidden" value="<?php echo $_GET['id']?>" name="pid"> 
                                                </div>

  <div class="form-group">
                                                    <label for="fullName">User Phone number</label><br/>
                                                    <input readonly="true" type="text" name="phone" value="<?php echo set_value($row->phone);if(set_value($row->phone)==''){echo $row->phone;} ?>" class="custom-select" required="" placeholder="Phone number">
                                                    </div>
            
                                            
                                                      <div class="form-group">
                                       
                                                      <input type="hidden" value="<?php echo $_GET['id']?>" name="pid"> 
                                                </div> 
                                                <div class="form-group">
                                                    <label for="price">Enter amount</label><br/>
                                                    <input type="text" name="price" class="custom-select" maxlength="11"  required="" placeholder="Enter amount">
                                                </div>
                                                
                                               
                                                <div class="form-group">
                                                <button class="bt custom-select" type="submit" style="background:green;color:#fff;">Fund wallet</button>
 
                                                </div>
                                              
                                                                                                    <br/>
                                                <?php } } else { ?>
                                                
                                                <?php } ?>                                             </form>
                                                
                                                                                    </div>
                                            </div>
                                            </section>
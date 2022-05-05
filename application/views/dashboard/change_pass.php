<br>
<div class="col">

<div class="card">
<div class="container">

<?php echo @$error; ?>
<h2>Change Password</h2>
    <?php echo form_open('dashboard/change_pass', array('id' => 'passwordForm'))?>
          
          
            <div class="form-group mt-3">
                <input type="password" name="oldpass" id="oldpass" class="custom-select in-md" placeholder="Old Password" />
                <?php echo form_error('oldpass', '<div class="error" style="color:red">', '</div>')?>
            </div>
            <div class="form-group">
                <input type="password" name="newpass" id="newpass" class="custom-select in-md" placeholder="New Password" />
                <?php echo form_error('newpass', '<div class="error" style="color:red">', '</div>')?>
            </div>
            <div class="form-group">
                <input type="password" name="passconf" id="passconf" class="custom-select in-md" placeholder="Confirm Password" />
                <?php echo form_error('passconf', '<div class="error" style="color:red">', '</div>')?>
            </div>
            <div class="form-group">
                                                    <button class="bt custom-select" type="submit" style="background:green;color:#fff;">Change password</button>
 
                                                </div>
                                             
        <?php echo form_close(); ?>
</div>
</div>
</div>
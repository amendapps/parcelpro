<script>
function validatefields()
{
        if(document.getElementById('UserOldpassword').value=='')
        {
                alert('Please enter your current password');
                document.getElementById('UserOldpassword').focus();
                return false;
        }
        if(document.getElementById('UserPassword').value=='')
        {
                alert('Please enter your new password');
                document.getElementById('UserPassword').focus();
                return false;
        }
        if(document.getElementById('UserPassword2').value=='')
        {
                alert('Please confirm your password');
                document.getElementById('UserPassword2').focus();
                return false;
        }
        var password = document.getElementById('UserPassword').value;
        var password2 = document.getElementById('UserPassword2').value;
        if(password != password2)
        {
                alert('Password do not match please retry with correct password');
                document.getElementById('UserPassword2').value='';
                document.getElementById('UserPassword2').focus();
                return false;
        }
}

</script>

<div>
        <article>
                <header>
                        <h2>Change Password</h2>
                </header>
        </article>

        
        <?php echo $this->Form->create('User', array('name' =>'user','action' => 'admin_changepassword','onSubmit'=>'return validatefields()'));?>
        <?php echo $this->Form->input('id'); ?>
        <fieldset>
                <dl>
                        <dt><label>Current Password <span style="color:red;">*</span></label></dt>
                        <dd><?php echo $this->Form->password('oldpassword',array('class'=>'small','size' => 20)); ?></dd>
                </dl>

                <dl>
                            <dt><label>New Password <span style="color:red;">*</span></label></dt>
                        <dd><?php echo $this->Form->password('password',array('class'=>'small','size' => 20)); ?></dd>
                </dl>

                <dl>
                            <dt><label>Confirm Password <span style="color:red;">*</span></label></dt>
                        <dd><?php echo $this->Form->password('password2',array('class'=>'small','size' => 20)); ?></dd>
                </dl>

        </fieldset>
        <button type="submit">
               Change Password
        </button>

        <?php $this->form->end();?>

</div>






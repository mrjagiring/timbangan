<div class="login-header">
    <h1><?php echo 'Please Login' ;?></h1>
        <div class="login-header-words"><?php echo 'Weight Bridge Report - PT. Gunung Pantara Barisan' ;?></div>
</div>
<?php echo form_open('login/actionForm',array('class'=>'form-1')) ;?>
<?php echo form_error('username') ;?>  
<p class="field">  
<input type="text" name="username" placeholder="Username">
<i class="icon-user icon-large"></i>
</p>
<?php echo form_error('password') ;?>
<p class="field">
        <input type="password" name="password" placeholder="Password">
        <i class="icon-lock icon-large"></i>
</p>
<p class="submit">
<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
</p>
<?php echo form_close() ;?>
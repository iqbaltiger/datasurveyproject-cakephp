
<div id='login_forms'>
	<h4 id="login_form_error" class="text-danger"></h4>
<?php 
	echo $this->Form->create('User', array('id'=>'userlogin','url' => array('controller' => 'pages', 'action' => 'user_login')));
 	echo $this->Form->input('username',array('type'=>'email','label'=>'Email','required'=>true)); 
	echo $this->Form->input('paramiter',array('type'=>'hidden','label'=>'Email','value'=>$this->request->params['action'])); 
 ?>
<br/>

<?php echo $this->Form->input('password',array('type'=>'password','label'=>'Password','required'=>true)); ?>
<br/>

<div class="action_btns">
<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i>Back</a></div>
<div class="one_half last"><?php echo $this->Form->submit('Login',array('class'=>'btn btn_red','label'=>false)); ?></div>
</div>
    <?php 
		echo $this->Form->end()
	?>
<a href="<?php echo $this->base.'/pages/forgot_password'?>" class="forgot_password">Forgot password?</a>
</div>
<div class="user_register">	
	<h4 id="regi_form_error" class="text-danger"></h4>
    <?php
		echo $this->Form->create('User', array('id'=>'UserRegiForm','url' => array('controller' => 'pages', 'action' => 'user_registration')));

	?>
        <?php echo $this->Form->input('Profile.name',array('type'=>'text','label'=>'Name','required'=>true)); ?>
        <?php echo $this->Form->input('paramiter',array('type'=>'hidden','label'=>'Name','value'=>$this->request->params['action'])); ?>
        <br/>

		<?php echo $this->Form->input('username',array('type'=>'email','label'=>'Email','required'=>true)); ?>
        <br/>

		<?php echo $this->Form->input('password',array('type'=>'password','id'=>'password1','label'=>'Password','required'=>true,'placeholder'=>'Enter minimum 5 digit')); ?>
        <br/>
				<?php
	echo $this->Html->image($this->Html->url(array('controller'=>'pages','action'=>'captcha'),true));
					 echo '<br>Enter code shown above:';
					 ?>
                 <br/>
<?php echo $this->Form->input('captcha',array('autocomplete'=>'off','label'=>false,'class'=>'form-control')); ?>
<br/>

        <div class="action_btns">
            <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i>Back</a></div>
            <div class="one_half last"><?php echo $this->Form->submit('Submit',array('class'=>'btn btn_red','label'=>false)); ?></div>
        </div>
    <?php 
		echo $this->Form->end()
	?>
</div>

<?php
echo $this->Form->create
(
	'User',
	array
	(
		'url' => array
		(
			'controller' => 'users',
			'action'	 => 'login'
		),
		'class'			=> 'well',
		'inputDefaults' => array
		(
			'label' => false,
			'error' => false
		)
	)
); 


echo $this->Form->input('username',array('placeholder' => __('Usuário'),'class' => 'span12'));
echo $this->Form->input('password',array('placeholder' => __('Senha'),'type' => 'password', 'class' => 'span12'));

?> 
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary"><i class="icon-play-circle icon-white"></i> Logar</button>      
    </div>
  </div>

  <div class="control-group">
  	<div class="controls">
  		<span><?php echo __('Esqueceu sua senha?') ?><br/> <?php echo $this->Html->link(__('Lembrar minha senha'),array('controller' => 'users', 'action' => 'remember_password')) ?></span>
  	</div>
  </div> 
</form>
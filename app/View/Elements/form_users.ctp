<?php  
echo $this->Form->create
(
	'User',
	array
	(
		'url' => array
		(
			'controller' => 'users',
			'action'	 => $action
		),
		'class'			=> 'well',
		'inputDefaults' => array
		(
			'label' => false,
			'error' => false
		)
	)
); 
?>		
<fieldset>
<legend><?php echo __($label); ?></legend>
<?php
echo $this->Form->input('username',
	array(
		'placeholder' => __('Usuário'),
		'class' => 'span12',
		'value' => !empty( $user['User']['username'] ) ? $user['User']['username'] : ''
	)
);

echo $this->Form->input('password',
	array(
		'type' => 'password', 
		'class' => 'span12',
		'placeholder' => __('Senha')
	)
);

echo $this->Form->input('email',
	array(
		'type' => 'text', 
		'class' => 'span12',
		'placeholder' => __('E-mail')
	)
);

echo $this->Form->input('role', array(
    'options' => array('admin' => __('Admin'), 'author' => __('Author')),
    'selected' => !empty( $user['User']['role'] ) ? $user['User']['role'] : ''
));
?>
</fieldset>
<?php 
$options = array(
	'label' => __('Registrar'),
	'class' => 'btn btn-primary'
);
echo $this->Form->end($options);?>
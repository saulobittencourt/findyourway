<?php echo $this->Session->flash() ?>
<h2><?php echo __('Registrar') ?></h2>
<hr>
<div class="row-fluid">
	<div class="span4">
		<?php echo $this->element('form_users',array('action' => 'register', 'label' => __('Novos usuários'))) ?>		
	</div>
</div>

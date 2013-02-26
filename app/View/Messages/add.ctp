<div class="users form">
<?php echo $this->Form->create('Message'); ?>
	<fieldset>
		<legend><?php echo __('Add Message'); ?></legend>
	<?php
		//echo $this->Form->input('dest_id');
		
		echo $this->Form->input('contenu');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Envoyer')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List User'), array('controller' => 'users','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Boîte mail'), array('action' => 'index')); ?></li>
	</ul>
</div>
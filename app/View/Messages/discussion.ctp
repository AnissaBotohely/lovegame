<div class="messages view">
	<h2><?php echo __('Messages'); ?></h2>
	<?php foreach($messages as $message){ ?>
	<h4><?php echo $this->Html->link($message['Exp']['username'], array('controller' => 'users', 'action' => 'view', $message['Exp']['id'])); ?></h4>
	<dl>
	<dt><?php echo h($message['Message']['contenu']); ?>
	&nbsp;</dt>
	<dd>
	<i><?php echo h($message['Message']['created']); ?></i>
	</dd>
	</dl>
	<br />
	<?php } ?>

	<?php echo $this->Form->create('Message'); ?>
	<fieldset>
		
	<?php		
		echo $this->Form->input('contenu');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Envoyer')); ?>

</div>


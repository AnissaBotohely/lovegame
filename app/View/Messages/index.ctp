
<div class="messages index">
	<h2><?php echo __('Messages'); ?></h2>

	

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('De'); ?></th>
			<th><?php echo $this->Paginator->sort('Message'); ?></th>
			<th><?php echo $this->Paginator->sort('Date'); ?></th>
			
			
			
	</tr>
	<?php foreach ($messages as $message): ?>

	<tr>
		<?php if ($message['Message']['dest_id']==$me['id']): ?>
		<td><?php echo h($message['Message']['id']); ?>&nbsp;</td>
		<td><?php echo h($message['Exp']['username']); ?>&nbsp;</td>
		<td><?php echo h($message['Message']['contenu']); ?>&nbsp;</td>
		<td><?php echo h($message['Message']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Répondre'), array('action' => 'add', $message['Message']['exp_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $message['Message']['id']), null, __('Are you sure you want to delete # %s?', $message['Message']['id'])); ?>
		</td>
		<?php endif ?>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New message'), array('action' => 'add_new')); ?></li>
		<li><?php echo $this->Html->link(__('user message'), array('action' => 'usermessages')); ?></li>
		
	</ul>
</div>
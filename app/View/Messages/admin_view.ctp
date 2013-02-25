<div class="messages view">
<h2><?php  echo __('Message'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($message['Message']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenu'); ?></dt>
		<dd>
			<?php echo h($message['Message']['contenu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Dest'); ?></dt>
		<dd>
			<?php echo h($message['Message']['id_dest']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Exp'); ?></dt>
		<dd>
			<?php echo h($message['Message']['id_exp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($message['Message']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Message'), array('action' => 'edit', $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Message'), array('action' => 'delete', $message['Message']['id']), null, __('Are you sure you want to delete # %s?', $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($message['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Prenom'); ?></th>
		<th><?php echo __('Naissance'); ?></th>
		<th><?php echo __('Style'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Orientation Id'); ?></th>
		<th><?php echo __('Genre Id'); ?></th>
		<th><?php echo __('Message Id'); ?></th>
		<th><?php echo __('Coeur'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Update'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($message['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['nom']; ?></td>
			<td><?php echo $user['prenom']; ?></td>
			<td><?php echo $user['naissance']; ?></td>
			<td><?php echo $user['style']; ?></td>
			<td><?php echo $user['description']; ?></td>
			<td><?php echo $user['photo']; ?></td>
			<td><?php echo $user['orientation_id']; ?></td>
			<td><?php echo $user['genre_id']; ?></td>
			<td><?php echo $user['message_id']; ?></td>
			<td><?php echo $user['coeur']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['update']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

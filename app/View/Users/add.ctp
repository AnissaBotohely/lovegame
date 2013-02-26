<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('naissance');
		echo $this->Form->input('style');
		echo $this->Form->input('description');
		echo $this->Form->input('photo');
		echo $this->Form->input('orientation_id');
		echo $this->Form->input('genre_id');
		echo $this->Form->input('message_id');
		echo $this->Form->input('coeur');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Inscription'); ?></legend>
	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('naissance');
		echo $this->Form->input('username');
		echo $this->Form->input('password');	
		echo $this->Form->input('style');
		echo $this->Form->input('description');
		echo $this->Form->input('photo');
		echo $this->Form->input('orientation_id');
		echo $this->Form->input('genre_id');
	?>
	</fieldset>
	
	
	
<?php echo $this->Form->end(__('Submit')); ?>
</div>

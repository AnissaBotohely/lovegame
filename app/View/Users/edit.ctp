<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Editer mon profil'); ?></legend>
		
		<?php echo $this->Form->input('id');?>
		<?php echo $this->Form->input('nom');?>
		<?php echo $this->Form->input('prenom');?>
		<?php echo $this->Form->input('naissance');?>
		<?php echo $this->Form->input('password');?>
		<?php echo $this->Form->input('email');?>
		<?php echo $this->Form->input('style');?>
		<?php echo $this->Form->input('description');?>
		<?php echo $this->Form->input('photo');?>
		
		<?php echo $this->Form->input('orientation_id');?>
		
		<h2>Mes préférences, je suis seul(e) et je recherche : </h2>
		<?php echo $this->Form->input('genre_id');?>
		<?php echo $this->Form->input('yeux');?>
		<?php echo $this->Form->input('origine');?>
		<?php echo $this->Form->input('cheveux');?>
		<?php echo $this->Form->input('style_love');?>
			
				
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>

	</ul>
</div>

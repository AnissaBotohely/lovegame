<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Mon profil'); ?></legend>
		
		<?php echo $this->Form->input('id');?>
		<?php echo $this->Form->input('nom');?>
		<?php echo $this->Form->input('prenom');?>
		<?php echo $this->Form->input('naissance');?>
		<?php echo $this->Form->input('password');?>
		<?php echo $this->Form->input('email');?>
		
		<?php echo $this->Form->input('style');?>
		<?php echo $this->Form->input('description');?>
		
		<?php echo $this->Form->input('photo');?>
		
			
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Modifier mon image'), array('action' => '',)) ; ?> </li>

		

		<li><?php echo $this->Form->postLink(__('Supprimer mon profil'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Etes vous sûr de vouloir supprimer # %s?', $this->Form->value('User.id'))); ?></li>
	</ul>
</div>

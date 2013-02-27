<div class="users view">
	<h2><?php echo __('Loveuses du jour'); ?></h2>
</div>

<div class="actions">
	<dl>
		<dd>
			<?php echo ($user['User']['username']); ?>&nbsp;
		</dd>
		
		<!--Affichage du nombre de coeurs (elyany)-->
		<div class="nbcoeur">
			Vous avez actuellement <?php echo ($user['User']['coeur']); ?> coeurs
		</div>

		<dd>
			<img src="<?php echo ($user['User']['photo']); ?>" width="100" height="100" />&nbsp;
		</dd>
	<h3><?php echo __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Modifier mon profil'), array('action' => 'edit', $user['User']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Lire mes messages'), array('controller' => 'messages', 'action' => 'index', $user['User']['id'])); ?> </li>
		</ul>
	</dl>
</div>
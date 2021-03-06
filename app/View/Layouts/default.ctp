<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		lovegame:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			
			<h1><?php echo $this->Html->link(__('Lovegame'), array('controller' => 'pages', 'action' => 'home')); ?></h1>

			<div class="new-user">
				<?php echo $this->Html->link(__('Inscription'), array('controller' => 'users', 'action' => 'add')); ?>
			</div>

			<?php if ($me['id']>0): ?> 
			<div class="login">
					<?php echo $this->html->link('Deconnexion','/users/logout') ?>
			</div>
				<?php else: ?>
			<div class="logout">
				<?php echo $this->html->link('Connexion','/users/login') ?>
			</div>
			<?php endif; ?>

			<?php if ($me['id']>0): ?> 
			
			<div class="username">
				Bienvenue <?php echo $me['username']?>
			</div>

<!--Redirection menu "mon plateau de jeu" vers la page users/view/id
author elyany-->
					
				<div class="profil">
					<?php echo $this->html->link('Mon plateau de jeu', array('controller' => 'users', 'action' => 'home')) ?>
				</div>
				<div class="edit_profil">
					<?php echo $this->html->link('Editer mon profil', array('controller' => 'users', 'action' => 'edit', $me['id']))?>
				</div>
				
				<div class="messagerie">
					<?php echo $this->html->link('Voir mes messages','/messages/inbox')?>
				</div>
			<?php else: ?>
		<?php endif; ?>	

		</div>
		
	</div>
		
		<div id="content">
			
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => 'Lovegame', 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

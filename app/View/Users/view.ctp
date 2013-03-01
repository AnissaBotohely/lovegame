<div id="profil">

	
	

		<img src="<?php echo ($user['User']['photo']); ?>" width="200" height="200" />
			&nbsp;

<div id="identite">

			<h2> <?php echo ($user['User']['username']); ?></h2>

			<p> <?php echo ($user['Genre']['name']); ?></p>

			<p> 27 ans </p> 

			<p> Paris </p>

			<div id="cagnotte">

				<img src="http://petitcroissant.p.e.pic.centerblog.net/3s2i2aq8.gif" width="50" height="50" />


				<div class="coeurs"><p> <?php echo ($user['User']['coeur']); ?> </p></div>

				

			</div>

</div>

<div id="action">

<?php $idurl = substr($this->here,21); ?> 

<?php if($me['id']==$idurl): ?>


			<?php echo $this->Html->link(__('Modifier mon profil'), array('controller' => 'users', 'action' => 'edit',  $me['id'])); ?>

			<?php else: ?>

			<?php echo $this->Html->link(__('Lui envoyer un message'), array('controller' => 'messages', 'action' => 'index',  $me['id'])); ?>


			<?php endif; ?>


</div>




	<div id="preferences">

	<p> Orientation : <?php echo ($user['Orientation']['type']); ?></p>


	<p> Son style : <?php echo ($user['User']['style']); ?></p>

</div>

	<div id="description">

	<p> Sa description : </p>

	<p><?php echo ($user['User']['description']); ?></p>

	</div>


				

		




</div>

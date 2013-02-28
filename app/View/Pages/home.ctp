<?php $idurl = substr($this->here,21); ?> 

<?php if($me['id']==$idurl): ?>



	 <div class="board">


		<h2><?php  echo __('Plateau du jour'); ?></h2>




		<div class="pretendant">

			<li><?php echo $this->Html->link(__('Voir mes prétendants'), array('action' => 'search')); ?></li>



		</div>
	</div>

<?php else: ?>

 

<div id="preferences">

	
	<h2>Le profil de <?php echo ($user['User']['username']); ?></h2>

	<p> Sexe : <?php echo ($user['Genre']['name']); ?></p>

	<p> Orientation : <?php echo ($user['Orientation']['type']); ?></p>


	<p> Son style : <?php echo ($user['User']['style']); ?></p>

	<p> Sa description : <?php echo ($user['User']['description']); ?></p>

	

		<?php echo $this->Html->link(__('Lui envoyer un message'), array('controller' => 'messages', 'action' => 'index',  $me['id'])); ?>





</div>

<?php endif; ?>




<div class="profile">
		
	
			<img src="<?php echo ($user['User']['photo']); ?>" width="100" height="100" />
			&nbsp;


			<div id="cagnotte">

				<img src="http://petitcroissant.p.e.pic.centerblog.net/3s2i2aq8.gif" width="80" height="80" />


				<div class="coeurs"><p> <?php echo ($user['User']['coeur']); ?> </p></div>

				

			</div>

			<div id="enveloppe">

				<img src="http://educ73.ac-grenoble.fr/nectar/doucy/image/enveloppe_081217_094306.jpg
" width="90" height="70" />

			<div class="lettres"><p> 3 </p></div>

			</div>


			<?php echo $this->Html->link(__('Voir mon profil'), array('action' => 'view', $me['id'])); ?> 

			


</div>
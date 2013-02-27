<?php $idurl = substr($this->here,21); ?> 

<?php if($me['id']==$idurl): ?>



	 <div class="board">


		<h2><?php  echo __('Plateau du jour'); ?></h2>

		


		<div class="pretendant">
		</div>
	</div>

<?php else: ?>

 

<div id="preferences">

	
	<h2>Le profil de <?php echo ($user['User']['username']); ?></h2>

	<p> Sexe : <?php echo ($user['Genre']['name']); ?></p>

	<p> Orientation : <?php echo ($user['Orientation']['type']); ?></p>


	<p> Son style : <?php echo ($user['User']['style']); ?></p>

	<p> Sa description : <?php echo ($user['User']['description']); ?></p>





</div>

<?php endif; ?>




<div class="profile">
		
	
			<img src="<?php echo ($user['User']['photo']); ?>" width="100" height="100" />
			&nbsp;


			<div id="cagnotte">

				<img src="http://media1.creavea.com/fichesconseils/medias/9_1_l.jpg" width="50" height="50" />

				<div class="coeurs"><p> <?php echo ($user['User']['coeur']); ?> </p></div>

				

			</div>

			


</div>
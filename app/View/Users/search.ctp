<ul>
	<?php foreach ($users as $user): ?>
		<li>
			<div><?php echo $user['User']['username'];?></div>
			<div><?php echo $user['User']['style'];?></div>
			<div><?php echo $user['User']['description'];?></div>
			<div><?php echo $user['User']['photo'];?></div>
			<div><?php echo $user['User']['genre_id'];?></div>

		</li>
	<?php endforeach ?>
</ul>

<hr>


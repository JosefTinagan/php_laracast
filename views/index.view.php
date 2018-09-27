<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- <h1>	
		<?= $greetings ?>
	</h1>

	<ul>
		<?php
			foreach($names as $name){
				echo '<li>'. $name .'</li>';
			}
		?>
	</ul>

	<ul>
		<p>Shorthand Alternate</p>
		<?php foreach ($names as $name) : ?>
			<li><?= $name; ?></li>
		<?php endforeach; ?>
	</ul>

	<ul>
		<p>Favorite Breed of Dogs</p>
		<?php foreach ($breedOfDogs as $breed){
			echo '<li>'. $breed .'</li>';
		}
		?>
	</ul>

	<ul>
		<p>Associative Arrays</p>
		<?php foreach ($person as $feature => $value) : ?>
			<li><strong><?= $feature ?></strong>: <?= $value ?></li>
		<?php endforeach; ?>
	</ul>

	<ul>
		<?php foreach ($task as $key => $value) : ?>
			<li><strong><?= $key ?></strong>: <?= $value ?></li>
		<?php endforeach; ?>
			<li><strong>Status: </strong><?= $task['Completed'] ? 'Completed': 'Incomplete' ?></li>

		<?php
			if($task['Completed']){
				echo '&#9989';
			} else {
				echo 'Incomplete';
			};
		?>

		<?php if($task['Completed']) : ?>
			<span class="icon">&#9989</span>
		<?php else : ?>
			<span class="icon">Incomplete</span>
		<?php endif; ?>
	</ul>


	<ul>
		<?= var_dump($person); ?>
	</ul>
	<ul>
		<?php
			echo '<pre>';
			var_dump($person);
			echo '</pre>';
		?>
	</ul>

	<ul>	
		<?php foreach ($tasks as $task) : ?>
		<li>	
				<?php if ($task->completed) :?>
					<strike>
				<?php endif; ?>
				<?= $task->description ?>

				<?php if($task->completed) : ?>
					</strike>
				<?php endif; ?>
		</li>
		<?php endforeach; ?>
	</ul>

	<ul>
		<p>	Alternative Way:</p>
		<?php foreach($tasks as $task) : ?>
		<li>	
				<?php if($task->completed) : ?>
				  <strike><?= $task->description ?></strike>
				<?php else : ?>
				  <?= $task->description ?>
				<?php endif; ?>
		</li>
		<?php endforeach; ?>
	</ul>
	-->
	<ul>
		<p>PDO</p>
		<?php foreach($tasks as $task) : ?>
		<li>
			<?php if($task->completed) :?>
				<strike><?= $task->description; ?></strike>
				
			<?php else: ?>
				<?= $task->description; ?>

			<?php endif; ?>
		</li>
		<?php endforeach; ?>
	</ul>

	
</body>
</html>
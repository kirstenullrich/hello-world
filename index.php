<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">

	<?php require_once('logic.php'); ?>
	<style>.width{ width:<?=$width?>px;}</style>
	<title>Playtime</title>
	<link href="style.css" rel="stylesheet">
</head>

<html>
	<body>
		<?=$boxes?>

		<br><br>
		<h1>The lotto</h1>
		<form method='POST' action='index.php'>
		    Enter 5 contestants<br>
		    <input type='text' name='contestant1' placeholder='<?php echo $_POST['contestant1'];?>'><br>
		    <input type='text' name='contestant2' placeholder='<?php echo $_POST['contestant2'];?>'><br>
		    <input type='text' name='contestant3' placeholder='<?php echo $_POST['contestant3'];?>'><br>
		    <input type='text' name='contestant4' placeholder='<?php echo $_POST['contestant4'];?>'><br>
		    <input type='text' name='contestant5' placeholder='<?php echo $_POST['contestant5'];?>'><br>
		    <input type='submit' value='Pick a winner!'><br>
		    <input type='submit'>
		</form>

		<?php if($_POST): ?>
				<?php foreach($contestants as $name => $result): ?>
		                <?=$name?> is a <?=$result?>.<br>
		            <?php endforeach; ?>
		    
		<?php endif; ?>


	</body>
</html>
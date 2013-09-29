<?php 
	error_reporting(1);
	
	$width = rand(10,60);

	$time = date('G');

	if ($time > 19 OR $time < 6) {
		$class = "night";
	}

	else {
		$class = "day";
	}
	

	$boxes = "";

	for($i = 1; $i < $width; $i++) {
   		 $boxes = $boxes."<div class='box width $class'>".$i."</div>";
	}

	$lottodraw = rand(1,10);

	if($_POST) {	


			foreach ($_POST as $field => $input){

					$lottopick = rand(1,10);

					if ($lottopick == $lottodraw) {
						$contestants[$input] = "winner";
					}

					else {
						$contestants[$input] = "not a winner and is down $2";
					}
				
			}
		
	}
?>
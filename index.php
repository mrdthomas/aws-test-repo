<?php
	$num = 1;
	
	if($num == 1) {
		$var = "I am number one!";
		echo $var;
	}
	else {
		$var = "I am not number one :(";
		echo $var;
	}	
	
	echo '<br />';
	
	$agestr = ($age < 16) ? 'child' : 'adult';
	echo $agestr;
?>

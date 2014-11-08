<?php
	$num = 2;
	
	if($num == 1) {
		$var = "I am number one!";
		echo $var;
	}
	else {
		$var = "I am not number one :(";
		echo $var;
	}	
	
	echo '<br />';
	
	$agestr = ($num == 1) ? 'child' : 'adult';
	echo $agestr;

	echo "<br />This is an update to test local -> online -> local";
?>

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
	
	$var = ($num = 1) ? echo "I am ternary number one" : echo "I didnt ternary :(";
?>

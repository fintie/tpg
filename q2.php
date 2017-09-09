<?php
	$color = array("Red", "Blue", "Green");
	sort($color);
	$clength = count($color);
	for($a = 0; $a <  $clength; $a++) 
	{
		echo $color[$a];
		echo "\n";
	}
?>
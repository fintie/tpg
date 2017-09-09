<?php
	$string1 = 'football';
	$string2 = 'footboll';
	$pos = strspn($string1 ^ $string2, "\0");

	printf(
	    'First difference at position %d: "%s" vs "%s"',
	    $pos, $string1[$pos], $string2[$pos]
	);
?>
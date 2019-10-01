<?php

function gcd(int $a, int $b){
	echo "$a, $b <br>";
	if($a < $b){
		return gcd($b, $a);
	}
	$r = $a%$b;
	if($r == 0){
		return $b;
	} else {
		return gcd($b, $r);
	}
}

echo gcd(5, 25);
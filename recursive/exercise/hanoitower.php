<?php

function hanoiTower(int $n, string $a, string $b, string$c){
	if($n == 1){
		echo "$a go to $c <br>";
	} else {
		hanoiTower($n-1, $a, $c, $b);
		echo "$a go to $c <br>";
		hanoiTower($n-1, $b, $a, $c);
	}
}

hanoiTower(3, 'A', 'B', 'C');
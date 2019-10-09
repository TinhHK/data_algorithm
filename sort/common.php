<?php

function print_array(array $arr): void
{
	for($i = 0; $i < count($arr); $i++){
		if($i == count($arr) -1){
			echo "$arr[$i] <br>";
		} else {
			echo "$arr[$i] -- ";
		}
	}
}

function createAnArray(int $n, $min = 1, $max = 20): array
{
	for($i = 0; $i < $n; $i++){
		$arr[$i] = rand($min, $max);
	}
	return $arr;
}
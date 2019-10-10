<?php
require "common.php";

function insertion_sort(array $arr): array
{
	// one element is in order
	// loop from n = 1
	for($i = 1; $i< count($arr); $i++){
		$currentEle = $arr[$i];
		// compare with n - 1 from the end of array to find position.
		for($pos = $i; $pos > 0 && $arr[$pos-1] > $currentEle; $pos-- ){
			// move to right
			$arr[$pos] = $arr[$pos -1];
		}
		// suitable position
		$arr[$pos] = $currentEle;
	}
	return $arr;
}
$arr = createAnArray(8);
print_array($arr);
print_array(insertion_sort($arr));
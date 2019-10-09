<?php

require "common.php";

function selection_sort(array $arr) : array
{
	for($i = 0; $i < count($arr)-1; $i++){
		// set first element as min value
		$min = $i;
		for($j = $i+1; $j < count($arr); $j++){
			// find min element
			if($arr[$j] < $arr[$min]){
				$min = $j;
			}
		}
		// swap min element
		if($min != $i){
			$temp = $arr[$min];
			$arr[$min] = $arr[$i];
			$arr[$i] = $temp;
		}
	}
	return $arr;
}

$arr = createAnArray(8);
print_array($arr);
print_array(selection_sort($arr));
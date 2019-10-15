<?php

require "common.php";

function quick_sort(array &$arr, int $left, int $right)
{
	if($left >= $right) {
		return;
	}
	$i = $left;
	$j = $right;
	$pivot = $arr[floor(($right + $left)/2)];
	do {
		// loop till meet the element bigger than pivot
		while($arr[$i] < $pivot) $i++;
		// loop till meet the element smaller than pivot
		while($arr[$j] > $pivot) $j--;
		//die("j = $j");
		if($i <= $j){
			$temp = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $temp;
			//print_array($arr);
			$i++;
			$j--;
		}
	} while ($i < $j);
	//print_array($arr);
	quick_sort($arr, $left, $j);
	quick_sort($arr, $i, $right);
	return $arr;
}

$arr = createAnArray(8);
print_array($arr);
// quick_sort($arr, 0, 7);
// print_array($arr);
print_array(quick_sort($arr, 0, 7));

//print_array(quick_sort($arr, 0, 7));
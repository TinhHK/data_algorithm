<?php

require "../sort/common.php";

function quick(array $arr, int $left, int $right)
{
	if($left >= $right) return;
	$i = $left;
	$j = $right;
	$pivot = $arr[floor(($right + $left)/2)];
	while($i < $j){
		while($arr[$i] < $pivot) $i++;
		while($arr[$j] > $pivot) $j--;
		if($i <= $j){
			$temp = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $temp;
			$i++;
			$j--;
		}
	}
	quick($arr, $left, $j);
	quick($arr, $i, $right);
}
$arr = createAnArray(8);
print_array($arr);
print_array(quick($arr,0, 7));
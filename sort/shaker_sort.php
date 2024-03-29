<?php

require "common.php";

function shaker_sort(array $arr)
{
	print_array($arr);
	$left = 0;
	$right = count($arr)-1;
	$k = $right;
	while($left < $right){
		// move large element to the end of array
		for($i = $left; $i < $right; $i++){
			if($arr[$i] > $arr[$i+1]){
				$temp = $arr[$i];
				$arr[$i] = $arr[$i + 1];
				$arr[$i+1] = $temp;
				$k = $i;
			}
		}
		$right = $k;

		// move min element to the beginning of array
		for($i= $right; $i > $left; $i--){
			if($arr[$i] < $arr[$i-1]){
				$temp = $arr[$i];
				$arr[$i] = $arr[$i-1];
				$arr[$i-1] = $temp;
				$k = $i;
			}
		}
		$left = $k;

	}
	print_array($arr);

}

shaker_sort([1, 6, 3, 9, 2, 10, 7, 8]);
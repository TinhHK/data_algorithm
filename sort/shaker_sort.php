<?php

function print_array(array $arr){
	for($i = 0; $i < count($arr); $i++){
		if($i == count($arr) -1){
			echo "$arr[$i] <br>";
		} else {
			echo "$arr[$i] -- ";
		}
	}
}

function shaker_sort(array $arr)
{
	print_array($arr);
	$left = 0;
	$right = count($arr)-1;
	$k = $right;
	while($left < $right){
		// move max element to last position
		for($i = $left; $i < $right; $i++){
			if($arr[$i] > $arr[$i+1]){
				$temp = $arr[$i];
				$arr[$i] = $arr[$i + 1];
				$arr[$i+1] = $temp;
				$k = $i;
			}
		}
		$right = $k;

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
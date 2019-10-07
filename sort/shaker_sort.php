<?php

function shaker_sort(array $arr)
{
	// for($i = 0; $i < count($arr); $i++){
	// 	echo "$arr[$i] *** ";
	// }
	// echo "<br>";
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
		// for($i = 0; $i < count($arr); $i++){
		// 	echo "$arr[$i] *** ";
		// }
		// echo "<br>";
		$right = $k;


		for($i= $right; $i > $left; $i--){
			if($arr[$i] < $arr[$i-1]){
				$temp = $arr[$i];
				$arr[$i] = $arr[$i-1];
				$arr[$i-1] = $temp;
				$k = $i;
			}
		}
		// for($i = 0; $i < count($arr); $i++){
		// 	echo "$arr[$i] *** ";
		// }
		// echo "<br>";
		$left = $k;

	}
	for($i = 0; $i < count($arr); $i++){
		echo "$arr[$i] *** ";
	}

}

shaker_sort([1, 6, 3, 9, 2, 10, 7, 8]);
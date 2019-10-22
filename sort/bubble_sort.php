<?php

require "common.php";

function basic_bubble(array &$arr)
{
	// loop up to n-1 times
	for($i = 0; $i < count($arr)-1; $i++){
		// loop up to n times to compare a couple of adjacent elements
		for($j = 0; $j < count($arr)-1 -$i; $j++){
			if($arr[$j] > $arr[$j+1]){
				$temp = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $temp;
			}
		}
	}
	return $arr;
}

function another_bubble(array $arr): array
{
	for($i = 0; $i < count($arr)-1; $i++){
		// j chạy từ cuối mảng về đến trưóc vị trí i
		for($j = count($arr) -1; $j > $i; $j--){
			if($arr[$j] < $arr[$j-1]){
				$temp = $arr[$j];
				$arr[$j] = $arr[$j-1];
				$arr[$j-1] = $temp;
			}
		}
	}
	return $arr;
}

$arr = createAnArray(8);
print_array($arr);
print_array(basic_bubble($arr));
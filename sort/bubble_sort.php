<?php

require "common.php";

function bubble_sort(array $arr): array
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
print_array(bubble_sort($arr));
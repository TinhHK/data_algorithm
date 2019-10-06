<?php

function bubble_sort(array $arr)
{
	for($i = 0; $i < count($arr); $i++){
		// j chạy từ cuối mảng về đến trưóc vị trí i
		for($j = count($arr) -1; $j > $i; $j--){
			if($arr[$j] < $arr[$j-1]){
				$temp = $arr[$j];
				$arr[$j] = $arr[$j-1];
				$arr[$j-1] = $temp;
			}
		}
	}
	for($i = 0; $i < count($arr); $i++){
		echo $arr[$i]."<br>";
	}
	//return $arr;
}

bubble_sort([1, 2, 10, 9, 8, 12, 18, 20]);

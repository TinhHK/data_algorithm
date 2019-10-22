<?php

require "../sort/common.php";

function newBuble(array &$arr)
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
$arr = createAnArray(8);
print_array($arr);
print_array(newBuble($arr));
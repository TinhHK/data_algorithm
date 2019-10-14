<?php

require "common.php";

function interchange(array $arr): array
{
	for($i = 0; $i < count($arr) -1; $i++){
		for($j = $i+1; $j < count($arr); $j++){
			if($arr[$i] > $arr[$j]){
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
	}
	return $arr;
}
$arr = createAnArray(8);
print_array($arr);
print_array(interchange($arr));

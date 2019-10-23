<?php
require "common.php";

// merge two arrays
function merge(array &$arr, int $left, int $mid, int $right)
{
	//echo "merge(arr, $left, $mid, $right)<br>";
	// length of 2 arrays
	$n1 = $mid - $left + 1;
	$n2 = $right - $mid;

	// take left array and right array, put them to temporary arrays
	for($i = 0; $i < $n1; $i++){
		$tempA[$i] = $arr[$left + $i];
	}
	for($j = 0; $j < $n2; $j++) {
		$tempB[$j] = $arr[$mid+ 1 + $j];
	}

	// merge two array with order
	$i = 0;
	$j = 0;
	// k must be left because when it run to right halve, index will begin at left.
	$k = $left;
	while($i < $n1 && $j < $n2){
		if($tempA[$i] <= $tempB[$j]){
			$arr[$k++] = $tempA[$i++];
		} else {
			$arr[$k++] = $tempB[$j++];
		}
	}
	// if one of two temporary array still has elements
	while($i < $n1){
		$arr[$k++] = $tempA[$i++];
	}
	while($j < $n2){
		$arr[$k++] = $tempB[$j++];
	}
	//print_array($arr);
}

function merge_sort(array &$arr, int $left, int $right)
{
	if($left >= $right) return;
	$mid = floor(($left + $right)/2);
	merge_sort($arr, $left, $mid);
	merge_sort($arr, $mid+1, $right);
	merge($arr, $left, $mid, $right);
}

$arr = createAnArray(8);
print_array($arr);
merge_sort($arr, 0, 7);
print_array($arr);
//print_array($arr);
<?php
// Tìm phần tử x trong mảng, xuất hiện bao nhiêu lần
// Tìm số chẵn lớn nhất
// Tìm số lẻ nhỏ nhất
function search(array $arr, int $a)
{
	$count = [];
	$maxEven = -1;
	$minOdd = -1;
	for($i = 0; $i < count($arr); $i++){
		// count searching element
		if($arr[$i] == $a){
			$count[$i] = $arr[$i];
		}
		// find max even
		if($arr[$i] % 2 == 0 && $arr[$i] > $maxEven ){
			$maxEven = $arr[$i];
		}
		// find min odd
		if($minOdd == -1 && $arr[$i] % 2 == 1)
			$minOdd = $arr[$i];
		if($arr[$i] % 2 == 1 && $arr[$i] < $minOdd)
			$minOdd = $arr[$i];

	}
	if(count($count) > 0){
		echo "có tìm thấy phần tử $a, xuất hiện ".count($count)." lần<br>";
	} else {
		echo 'Không tìm thấy phần tử<br>';
	}
	// print max event
	if($maxEven){
		echo "Số chẫn lớn nhất là $maxEven<br>";
	} else {
		echo "Không tìm thấy số chẵn<br>";
	}
	// print min odd
	if($minOdd){
		echo "Số lẻ nhỏ nhất là $minOdd<br>";
	} else {
		echo "Không tìm thấy số lẻ nào<br>";
	}
}

 search([13, 5, 3, 9, 7, 2, 9, 9, 10], 9);
<?php
// tìm kiếm tuần tự

function linear($arr, $n)
{
	for($i = 0; $i < count($arr); $i++){
		if($arr[$i] == $n)
			return  "Vị trí thứ $i";
	}
	return "Không tìm thấy";
}

echo linear([1, 8, 9, 10, 5, 6, 12], 100);
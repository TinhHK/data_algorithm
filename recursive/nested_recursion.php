<?php
// giai thuat này chiếm bộ nhớ rất nhanh 
function ackerMan(int $m, int $n)
{
	if($m == 0){
		return $n + 1;
	} else if($n == 0){
		return ackerMan($m-1, 1);
	} else {
		return ackerMan($m-1, ackerMan($m, $n-1));
	}
}

echo ackerMan(2, 1);
<?php
// Sum of 1 + 2 + 3 + ... + n
// - Tìm quy luật
// - Tìm điểm dừng

function sum($n)
{
	if($n == 1)
		return 1;
	return $n + sum($n-1);
}

echo sum(1000);
<?php

// Sum of 1234 = 1 + 2 + 3 + 4; 1x1000 + 2x100 + 3x10 + 4x1
// Tìm quy luật và điểm dừng

function sum($n)
{
	if($n == 0)
		return;
	return $n%10 + sum(floor($n/10));
}
echo sum(12345);
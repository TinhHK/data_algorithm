<?php

// Tính tổng 1^2 + 2^2 + 3^2 + ... + n^2 với n > 0;

function sum_of_serial($n)
{
	if($n ==1 )
		return 1;
	return $n**2 + sum_of_serial($n-1);
}

echo sum_of_serial(2);
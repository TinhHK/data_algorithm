<?php
// xuất đảo ngược số 1234 -> 4321
function inverse_number($n)
{
	if($n == 0)
		return;
	echo $n%10;
	inverse_number(floor($n/10));
}

inverse_number(1234567);
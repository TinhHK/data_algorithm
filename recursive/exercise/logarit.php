<?php
// Tính Log2(n): 2 mũ bao nhiêu thì bằng n.
function logBase2($n)
{
	return ($n > 1)? 1 + logBase2(floor($n/2)) : 0;
}

echo logBase2(6);
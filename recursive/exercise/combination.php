<?php
// tổ hợp chập k của n, following Pascal formula
function combination(int $n, int $k){
	if($k == 0 || $k == $c)
		return 1;
	return combination($c -1, $k) + combination($c-1, $k-1);

}

echo combination(5, 3);
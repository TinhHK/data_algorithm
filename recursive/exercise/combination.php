<?php
// tổ hợp chập k của n.
function combination(int $c, int $k){
	if($k == 0 || $k == $c)
		return 1;
	return combination($c -1, $k) + combination($c-1, $k-1);

}

echo combination(5, 3);
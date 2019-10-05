<?php
// 1, 1, 1+1, 1+(1+1), (1+1+1) +(1+1)

function fibo($n){
	if($n <=2)
		return 1;
	return fibo($n-1) + fibo($n-2);
}
function sum_of_fibo($n){
	$sum = 0;
	for($i = 1; $i<= $n; $i++) {
		$sum += fibo($i);
	}
	return $sum;
}

echo sum_of_fibo(5);
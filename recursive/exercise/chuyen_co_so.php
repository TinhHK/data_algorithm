<?php
/*Chuyển từ cơ số 10 sang cơ số 2
    - Tìm quy luật : chia cho 2 và lấy số dư, đảo ngược lại dãy số dư.
    - Tìm điểm dừng: dừng khi thương là 0 */
function decimalToBinary($n){
	if($n == 0)
		return;
	$remain = $n%2;
	$n = floor($n/2);
	decimalToBinary($n);
	echo $remain;
}
(decimalToBinary(9));
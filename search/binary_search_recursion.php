<?php
// Điều kiện dừng: start > end
// Quy luật: chia đôi liên tục
function search(array $a, int $b, int $start, int $end)
{
	//echo "call search(start = $start, end = $end, mid = $mid)<br>";
	if($start > $end){
		//echo "stopping condition<br>";
		return -1;
	}
	$mid = floor(($start + $end)/2);
	if($b == $a[$mid])
		return $mid;
	if($b > $a[$mid]){
		$start = $mid + 1;
	}
	if($b < $a[$mid]){
		$end = $mid -1;
	}
	return search($a, $b, $start, $end);
}
$time_start = microtime(true);
echo search([1, 2, 3, 6 ,8, 10, 12], 13, 0, 6);
$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start);

//execution time of the script
echo '<br><b>Total Execution Time:</b> '.number_format((float) $execution_time, 10).' seconds';
// if you get weird results, use number_format((float) $execution_time, 10)
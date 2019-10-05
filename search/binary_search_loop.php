<?php

function search(array $a, int $b)
{
	$start = 0;
	$end = count($a) - 1;
	do {
		$mid = floor(($end + $start)/2);
		if($b == $a[$mid]){
			return $mid;
		} else if ($b > $a[$mid]){
			$start = $mid + 1;
		} else {
			$end = $mid - 1;
		}

	} while ($start <= $end);
	return 'Không tìm thấy'; // return -1;
}
$time_start = microtime(true);
echo search([1, 2, 3, 6 ,8, 10, 12], 1);
$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start);

//execution time of the script
echo '<br><b>Total Execution Time:</b> '.number_format((float) $execution_time, 10).' seconds';
// if you get weird results, use number_format((float) $execution_time, 10)
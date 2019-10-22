<?php
// độ phức tạp O(a^n)
function printArray(array $a): void
{
	for($i = 0; $i< count($a); $i++){
		echo $a[$i]. ' ';
	}
	echo '<br>';
}
// start with $i end with $n in array $a
function printPermutation(array &$a, int $n, int $i)
{
	printArray($a);
	for( $j = $i + 1; $j < $n; $j++){
		if($a[$i] > $a[$j]) {
			//echo "------------> a[i] = $a[$i], a[j] = $a[$j] <br>";
			$swap = $a[$i];
			$a[$i] = $a[$j];
			$a[$j] = $swap;
		}
		//echo "-------------->> i = $i, j = $j <br>";
		printPermutation($a, $n, $i+1);
	}
}
$a = [10, 2, 5];
printPermutation($a, 3, 0);
printArray($a);
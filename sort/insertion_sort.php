<?php
require "common.php";

function insertion_sort(array $arr): array
{
	// one element is in order
	// loop from n = 1
	// compare with n - 1 from the end of array to find position.
}
$arr = createAnArray(8);
print_array($arr);
print_array(insertion_sort($arr));
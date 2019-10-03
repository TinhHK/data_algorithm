<?php

function isEvent($n): bool
{
	if($n == 0){
		return true;
	} else {
		return isOdd($n-1);
	}
}
function isOdd($n): bool
{
	return !isEvent($n);
}

var_dump(isEvent(6));
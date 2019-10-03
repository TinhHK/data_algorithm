<?php

function fibonacy($n)
{
	if($n <=2)
		return 1;
	return fibonacy($n-1) + fibonacy($n-2);
}
echo fibonacy(3);
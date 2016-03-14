<?php

function fibonacci($batas)
{
	return ($batas <= 1)? 1 : fibonacci($batas - 2) + fibonacci($batas -1);
}

$fibo = fibonacci(5);
echo "bilangan fibonacci ke 5 adalah $fibo";

?>
<?php

$num = 100;
$fact = 1;
$cont = 1;

while ($cont <= $num){
		$fact = $fact * $cont;
		echo "\n".$cont."! = ".$fact;
		$cont++;
}
<?php
use Classes\NumberHumanoid;

include_once('./autoload.php');

// For Million CHeck
$num = new NumberHumanoid(1020221, 2);
echo $num->out. "\t" .$num->amt. "\t" .$num->exp. "\r\n";

//For thousands check
$ab = new NumberHumanoid(999991, 2);
echo $ab->out. "\t" .$ab->amt. "\t" .$ab->exp;
exit;
?>
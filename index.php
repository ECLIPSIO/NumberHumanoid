<?php
use Classes\NumberHumanoid;

include_once('./autoload.php');

// For Million CHeck
$num = new NumberHumanoid(1000221, 4);
echo $num->out. "\t" .$num->amt. "\t" .$num->exp. "\r\n";

//For thousands check
$ab = new NumberHumanoid(1010, 2);
echo $ab->out. "\t" .$ab->amt. "\t" .$ab->exp;
exit;
?>
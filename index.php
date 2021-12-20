<?php
use Classess\NumberHumanoid;

include_once('./autoload.php');

$num = new NumberHumanoid(1000221, 4);
echo $num->out. "\t" .$num->amt. "\t" .$num->exp. "\r\n";

$ab = new NumberHumanoid(1010, 2);
echo $ab->out. "\t" .$ab->amt. "\t" .$ab->exp;
exit;
?>
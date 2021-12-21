<?php
use Classes\NumberHumanoid;

include_once('./autoload.php');

//For thousands check
$ab = new NumberHumanoid(999991, 2);
echo $ab->out. "\t" .$ab->amt. "\t" .$ab->exp;
exit;
?>
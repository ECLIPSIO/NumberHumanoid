<?php
use Classes\NumberHumanoid;

include_once('./autoload.php');

//Test a number
// out - Number with Identifier
// amt - Number after conversion
// exp - Range Identifier
$ab = new NumberHumanoid(999991, 2);
echo $ab->out. "\t" .$ab->amt. "\t" .$ab->exp;
exit;
?>
<?php
$a=5;
$b=30;
$c=3;
if($a%3==0  && $a%5==0)
{
echo("$a is greatest and divisible by 3&5");
}
elseif($b%3==0 && $b%5==0)
{
echo("$b is greatest and divisible by 3&5");
}
elseif($c%3==0 && $c%5==0)
{
echo("$c is greatest and divisible by 3&5");
}
else
{
echo("Invalid!");
}
?>
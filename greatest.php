<?php
$a=3;
$b=5;
$c=9;
if($a>$b && $a>$c)
{
echo("$a is greatest");
}
elseif($b>$a && $b>$c)
{
echo("$b is greatest");
}
elseif($c>$a && $c>$b)
{
echo("$c is greatest");
}
else
{
echo("Invalid!");
}
?>
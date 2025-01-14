<?php

function add($n1,$n2)
{
    $result=$n1+$n2;
    echo "<br><br>Result Add: ".$result;

}
$num1=10;
$num2=20;
add($num1,$num2);


function subtract($n1,$n2=50)
{
    $result=$n1-$n2;
    echo "<br><br>Result Subtract: ".$result;
}

$num1=10;
$num2=20;
subtract($num1,$num2);

function Multiply($n1,$n2)
{
    $result=$n1*$n2;
    return $result;
}
$num1=10;
$num2=20;
$resulMultiply = Multiply($num1,$num2);
echo "<br><br>Result Multiply: ".$resulMultiply;

function Divide($n1,$n2,&$result)
{
    $result=$n1/$n2;
    
}
$num1=10;
$num2=20;
$resulDevide=0;
Divide($num1,$num2,$resulDevide);
echo "<br><br>Result Devide: ".$resulDevide;


?>
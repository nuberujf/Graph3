<?php

function Align($Align){

$x=0;
$y=0;

$a = array($x,$y);
$b = array($x,$y);
$c = array($x,$y);


$a[0]=$_POST['ax'];
$a[1]=$_POST['ay'];
$b[0]=$_POST['bx'];
$b[1]=$_POST['by'];
$c[0]=$_POST['cx'];
$c[1]=$_POST['cy'];

echo "<pre>Post: ";
print_r($a);
print_r($b);
print_r($c);
echo "</pre>";


$f1=$b[0]-$a[0];
$f2=$c[0]-$b[0];
$f3=$b[1]-$a[1];
$f4=$c[1]-$b[1];

if (($f1>0) && ($f2>0)){
    $f5=$f1/$f2;
    if (($f3>0) && ($f4>0)){
        $f6=$f3/$f4;
        if ($f5 == $f6){
         $Align="Alineados";
            }else{
             $Align="No alineados";
            }

    }else {
       $Align="No Alineados";
    }

}else {
    $Align="No Alineados";
}
return $Align;
echo "<pre>";
print_r($Align);
echo "</pre>";
}






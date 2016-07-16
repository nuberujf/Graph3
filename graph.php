<?php
echo "<pre>Post: ";
print_r($_POST);
echo "</pre>";

require_once "align.php";
$Align="";
$Align=Align($Align);
echo "<pre>Alineados: ";
print_r($Align);
echo "</pre>";


// probando
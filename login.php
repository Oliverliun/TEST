<?php
$input = $_GET['username'];
echo "THE INPUT IS:  ".$input;

include("testfunction3.php");
//$add=add("Adobe Acrobat and Reader 2018.011.20040"); 
$add=add($input); 

?>

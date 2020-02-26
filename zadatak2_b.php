<?php

$str ='The quick brown fox jumps over the lazy dog';
$novi = 'Obuka '; 
$position = '40'; 
  
echo substr_replace( $str, $novi, $position, 0 ); 
echo '<br>';
echo ucwords("$str");

?>
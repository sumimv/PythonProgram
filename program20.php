<?php 
$cha='k'; 
$next_cha=++$cha; 
if(strlen($next_cha)>1) 
{ 
$next_cha=$next_cha[0]; 
} 
echo "The next character is $next_cha"."\n"; 
?>

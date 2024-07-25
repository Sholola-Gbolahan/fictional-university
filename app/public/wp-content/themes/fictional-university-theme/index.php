<?php 
// 1. Creating an array of names
$name = array('Brad','Tosin', 'Jane','Adebato','Gideon');
$count = 0;

// Looping through the array using while loop nad dertermin the array length with count() function
while( $count < count($name)){
    echo "<li>Hi, my name is $name[$count]</li>";
    $count++;
}

?>
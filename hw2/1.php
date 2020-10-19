<?php
$a = rand(-10, 10);
$b = rand(-10, 10);
echo $a." ".$b."<br>";

if($a >= 0 && $b >= 0){
    if($a > $b){
        echo  $x = $a - $b;
    } 
    else {
        echo  $x = $b - $a;
           }
}
else if($a<0 && $b<0) {
    echo  $x = $a * $b;
}
else {
    echo  $x = $a + $b;
}
?>
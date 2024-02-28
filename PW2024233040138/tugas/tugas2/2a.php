<?php 
$d = "Fernanda";
$a = "Aminullah";

for($n = 1; $n <= 100; $n++) {

    if( $n % 3 === 0 & $n % 5 === 0 ) {
    echo "$d $a <br>";
    } else if ( $n % 3 === 0 ) {
    echo "$d <br>";
    } else if ( $n % 5 === 0 ) {
    echo "$a <br>";
    } else {
    echo "$n <br>";
    }
}
?>
<?php

// $x = 40;
// $y = 30;

// if($x > $y){
//     echo "x is a big number";
// }else{
//     echo "x is a small number";
// }

// echo "\n";
// echo "\n";


$n = 10;

if($n % 2 === 0){
    echo "This is even number";
}else{
    echo "This is odd number";
}


echo "\n";
echo PHP_EOL;

if ($n % 2 == 0):
    echo "Even number";
    echo PHP_EOL;
    echo "Some text here";
else: 
    echo "Odd number";
    echo PHP_EOL;
    echo "Some text here ++";
endif;






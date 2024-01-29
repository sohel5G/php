<?php 


// function isEven($x){

//     return $x % 2 == 0 ? "{$x} is a even number" : "{$x} is a odd number";

// }

// echo isEven(12);


// $y = "23";
// echo gettype($y);



function sum(int ...$i):int{

    $result = 0;
    for($x = 0; $x < count($i); $x++){
        $result += $i[$x];
    }

    return $result;

}


echo sum(23, 12, 43, 56, 87, 12);














?>



<?php

// $arrName = [2, 5, "abc", 7, 98];

// // var_dump( $arrName );

// echo count($arrName);



// ৩.২ - অ্যারে ম্যানিপুলেশন

$students = ['Araf', 'Arif'. 'Jamal', 'Kmal', 'Mosthofa'];

$student = array_pop($students);
// array_shift();
// array_unshift();
// array_push();

echo ($student);

// Associative array 

$foods = [
    'drink' => 'water, milk, mango juce',
    'vegitable' => 'lau, begun, flower'
];


echo( $foods['drink'] );
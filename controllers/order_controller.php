<?php

$Lines = ([1 => '../img/order/walking1.png' , 2 => '../img/order/walking2.png' , 3  => '../img/order/walking3.png' , 4 => '../img/order/walking4.png' , 5 => '../img/order/walking5.png']);

$front_back = rand(1,2);
$random = rand(1,5);

$answer = $front_back  + $random;
if($front_back == 1 ){
    $number = $answer - 1;
}elseif($front_back == 2 ){

    if($answer == 7){
        $number = 1;

    }if($answer == 6){
        $number = 2;

    }if($answer == 5){
        $number = 3;

    }if($answer == 4){
        $number =4;

    }if($answer == 3){
        $number = 5;
    }
}

include('../views/order.php');

<?php

$Lines = ([1 => '../img/order/walking1.png' , 2 => '../img/order/walking2.png' , 3  => '../img/order/walking3.png' , 4 => '../img/order/walking4.png' , 5 => '../img/order/walking5.png']);

$front_back = rand(1,2);
$random_human =rand(1,5);

if($random_human == 1){
    $front_back =2;
    $random = rand(1,4);
    $answer = $random_human + $random ;
}
elseif($random_human == 2){
    if($front_back == 1){
        $random = 1;
        $answer = $random_human -1;
    }else{
        $random = rand(1,3);
        $answer = $random_human + $random ;
    }
}
elseif($random_human == 3){
    if($front_back ==1){
        $random = rand(1,2);
        $answer = $random_human - $random ;
    }else{
        $random = rand(1,2);
        $answer = $random_human + $random ;
    }
}
elseif($random_human == 4){
    if($front_back ==1){
        $random = rand(1,3);
        $answer = $random_human - $random;
    }else{
        $random = 1;
        $answer = $random_human + $random ;
    }
}
elseif($random_human == 5){
    $front_back = 1;
    $random = rand(1,4);
    $answer = $random_human - $random ;
    }





include('../views/order-random.php');

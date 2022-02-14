<?php
$oneLines = ([0=>'',1=>'../img/direction/car.png' , 0=>'',]);
$twoLines = ([4=>'../img/direction/ten.png', 0=>'../img/direction/tree.png' , 2=>'../img/direction/koinobori.png',]);
$threeLines = ([0=>'', 3=>'../img/direction/cow.png' , 0=>'',]);

$random = rand(1,4);

if($random == 1){
    $direction ='上（うえ）';
}elseif($random == 2){
    $direction ='右（みぎ）';
}elseif($random ==3 ){
    $direction = '下（した）';
}elseif($random == 4){
    $direction = '左（ひだり）';
}


include('../views/left-right-top-down.php');

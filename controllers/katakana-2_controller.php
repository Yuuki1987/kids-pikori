<?php
include('../util.php');

$oneLines = (['ワ'=>44,'ラ'=>39,'ヤ'=>36,'マ'=>31,'ハ'=>26,'ナ'=>21,'タ'=>16,'サ'=>11,'カ'=>6,'ア'=>1]);
$twoLines = (['ヲ'=>45,'リ'=>40,'','ミ'=>32,'ヒ'=>27,'ニ'=>22,'チ'=>17,'シ'=>12,'キ'=>7,'イ'=>2]);
$threeLines = (['ン'=>46,'ル'=>41,'ユ'=>37,'ム'=>33,'フ'=>28,'ヌ'=>23,'ツ'=>18,'ス'=>13,'ク'=>8,'ウ'=>3]);
$fourLines = (['','レ'=>42,'','メ'=>34,'ヘ'=>29,'ネ'=>24,'テ'=>19,'セ'=>14,'ケ'=>9,'エ'=>4]);
$fiveLines = (['','ロ'=>43,'ヨ'=>38,'モ'=>35,'ホ'=>30,'ノ'=>25,'ト'=>20,'ソ'=>15,'コ'=>10,'オ'=>5]);
$random =rand(1,46);

$arr = preg_split("//u", "アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲン");
$random =rand(1,14);
if($random ==1 ){
    $answer = 'サル';
    $answer_json = json_encode($answer);
}
if($random ==2 ){
    $answer = 'ウシ';
    $answer_json = json_encode($answer);
}
if($random ==3 ){
    $answer = 'ネコ';
    $answer_json = json_encode($answer);
}
if($random ==4 ){
    $answer = 'シカ';
    $answer_json = json_encode($answer);
}
if($random ==5 ){
    $answer = 'タコ';
    $answer_json = json_encode($answer);
}
if($random ==6 ){
    $answer = 'イエ';
    $answer_json = json_encode($answer);
}
if($random ==7 ){
    $answer = 'クマ';
    $answer_json = json_encode($answer);
}
if($random ==8 ){
    $answer = 'トリ';
    $answer_json = json_encode($answer);
}
if($random ==9 ){
    $answer = 'カサ';
    $answer_json = json_encode($answer);
}
if($random ==10 ){
    $answer = 'ハナ';
    $answer_json = json_encode($answer);
}
if($random ==11){
    $answer = 'クツ';
    $answer_json = json_encode($answer);
}
if($random ==12 ){
    $answer = 'コマ';
    $answer_json = json_encode($answer);
}
if($random ==13 ){
    $answer = 'イカ';
    $answer_json = json_encode($answer);
}
if($random ==14 ){
    $answer = 'ウマ';
    $answer_json = json_encode($answer);
}

include('../views/katakana/katakana-2.php');

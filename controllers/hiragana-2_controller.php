<?php
include('../util.php');

$oneLines = (['わ'=>44,'ら'=>39,'や'=>36,'ま'=>31,'は'=>26,'な'=>21,'た'=>16,'さ'=>11,'か'=>6,'あ'=>1]);
$twoLines = (['を'=>45,'り'=>40,'','み'=>32,'ひ'=>27,'に'=>22,'ち'=>17,'し'=>12,'き'=>7,'い'=>2]);
$threeLines = (['ん'=>46,'る'=>41,'ゆ'=>37,'む'=>33,'ふ'=>28,'ぬ'=>23,'つ'=>18,'す'=>13,'く'=>8,'う'=>3]);
$fourLines = (['','れ'=>42,'','め'=>34,'へ'=>29,'ね'=>24,'て'=>19,'せ'=>14,'け'=>9,'え'=>4]);
$fiveLines = (['','ろ'=>43,'よ'=>38,'も'=>35,'ほ'=>30,'の'=>25,'と'=>20,'そ'=>15,'こ'=>10,'お'=>5]);

$random =rand(1,14);
if($random ==1 ){
    $answer = 'さる';
    $answer_json = json_encode($answer);
}
if($random ==2 ){
    $answer = 'うし';
    $answer_json = json_encode($answer);
}
if($random ==3 ){
    $answer = 'ねこ';
    $answer_json = json_encode($answer);
}
if($random ==4 ){
    $answer = 'しか';
    $answer_json = json_encode($answer);
}
if($random ==5 ){
    $answer = 'たこ';
    $answer_json = json_encode($answer);
}
if($random ==6 ){
    $answer = 'いえ';
    $answer_json = json_encode($answer);
}
if($random ==7 ){
    $answer = 'くま';
    $answer_json = json_encode($answer);
}
if($random ==8 ){
    $answer = 'とり';
    $answer_json = json_encode($answer);
}
if($random ==9 ){
    $answer = 'かさ';
    $answer_json = json_encode($answer);
}
if($random ==10 ){
    $answer = 'はな';
    $answer_json = json_encode($answer);
}
if($random ==11){
    $answer = 'くつ';
    $answer_json = json_encode($answer);
}
if($random ==12 ){
    $answer = 'こま';
    $answer_json = json_encode($answer);
}
if($random ==13 ){
    $answer = 'いか';
    $answer_json = json_encode($answer);
}
if($random ==14 ){
    $answer = 'うま';
    $answer_json = json_encode($answer);
}





include('../views/hiragana/hiragana-2.php');

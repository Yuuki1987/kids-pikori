<?php
include('../util.php');

$oneLines = (['ワ'=>44,'ラ'=>39,'ヤ'=>36,'マ'=>31,'ハ'=>26,'ナ'=>21,'タ'=>16,'サ'=>11,'カ'=>6,'ア'=>1]);
$twoLines = (['ヲ'=>45,'リ'=>40,'','ミ'=>32,'ヒ'=>27,'ニ'=>22,'チ'=>17,'シ'=>12,'キ'=>7,'イ'=>2]);
$threeLines = (['ン'=>46,'ル'=>41,'ユ'=>37,'ム'=>33,'フ'=>28,'ヌ'=>23,'ツ'=>18,'ス'=>13,'ク'=>8,'ウ'=>3]);
$fourLines = (['','レ'=>42,'','メ'=>34,'ヘ'=>29,'ネ'=>24,'テ'=>19,'セ'=>14,'ケ'=>9,'エ'=>4]);
$fiveLines = (['','ロ'=>43,'ヨ'=>38,'モ'=>35,'ホ'=>30,'ノ'=>25,'ト'=>20,'ソ'=>15,'コ'=>10,'オ'=>5]);
$random =rand(1,46);

$arr = preg_split("//u", "アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲン");


include('../views/katakana/katakana.php');
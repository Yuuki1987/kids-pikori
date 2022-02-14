<?php
include('../util.php');

$random =rand(1,10);
$random1 =rand(1,10);
$onelines = range(0, 9);

$answer = $random + $random1;
$answer_json = json_encode($answer);




include('../views/number/number-calculation.php');

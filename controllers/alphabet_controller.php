<?php
include('../models/alphabet_model.php');
include('../util.php');


$oneLines = (['A' => 1, 'B' => 2 , 'C' => 3 , 'D' => 4 , 'E' => 5, 'F' => 6 ,'G' => 7 , 'H' => 8, ' I' => 9,'J' => 10, 'K' => 11, 'L' => 12, 'M' => 13]);
$twoLines = (['N' => 14, 'O' => 15 , 'P' => 16 , 'Q' => 17 , 'R' => 18, 'S' => 19 ,'T' => 20 , 'U' => 21, 'V' => 22, 'W' => 23, 'X' => 24, 'Y' => 25, 'Z' => 26]);

$random = rand(0,25);
$a = range('A', 'Z');




include('../views/alphabet/alphabet.php');

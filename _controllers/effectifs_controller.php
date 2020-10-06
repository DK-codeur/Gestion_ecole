<?php
// $allStudent = Student::getAllStudent();
$allStudent = Student::getAllStudentR();

//Count effectif Like niveau
$count_6eme = Student::countEffectifLikeNiveauR('6eme');
$count_5eme = Student::countEffectifLikeNiveauR('5eme');
$count_4eme = Student::countEffectifLikeNiveauR('4eme');
$count_3eme = Student::countEffectifLikeNiveauR('3eme');
$count_2nd = Student::countEffectifLikeNiveauR('2nd');
$count_1ere= Student::countEffectifLikeNiveauR('1ereA');
$count_Tle = Student::countEffectifLikeNiveauR('Tle');

//effectif Like niveau
$effectif_6eme = Student::effectifLikeNiveauR('6eme');
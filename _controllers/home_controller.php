<?php
isLogged();
    // $latestStudent = Student::getLatestStudent();
    $latestStudent = Student::getLatestStudentR();
    $countAllStudents = Student::countAllStudent();
    $countAllMen = Student::countAllMen();
    $countAllWomen = Student::countAllWomen();
    $countAllClasse = Classe::countAllClasse();
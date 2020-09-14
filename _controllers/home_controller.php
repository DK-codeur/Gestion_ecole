<?php
isLogged();
    $latestStudent = Student::getLatestStudent();
    $countAllStudents = Student::countAllStudent();
    $countAllMen = Student::countAllMen();
    $countAllWomen = Student::countAllWomen();
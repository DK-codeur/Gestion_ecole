<?php
    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $id = str_secure($_GET['id']);
    }

    

    $foundStudent = Student::verifStudentId($id);
    
    if($foundStudent) {

        $studentById = Student::getStudentByIdR($id);

    } else {
        header('location:home');
        exit();
    }
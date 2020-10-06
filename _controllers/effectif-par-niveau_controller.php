<?php
    if(isset($_GET['niv']) && !empty($_GET['niv'])) {
        $niv = str_secure($_GET['niv']);
        // debug($niv);
        // exit();
    }
    
    $effectifLikeNiveau = Student::effectifLikeNiveauR($niv);
    

    // $foundStudent = Student::verifStudentId($id);
    
    // if($foundStudent) {

    //     $studentById = Student::getStudentByIdR($id);

    // } else {
    //     header('location:home');
    //     exit();
    // }
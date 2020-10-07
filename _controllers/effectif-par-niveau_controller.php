<?php
    if(isset($_GET['niv']) && !empty($_GET['niv'])) {
        $niv = str_secure($_GET['niv']);
        // debug($niv);
        // exit();
    }
    
    $VerifyNiveau = Student::effectifLikeNiveauR($niv);
    

    // $foundStudent = Student::verifStudentId($id);
    
    if($VerifyNiveau) {

        $effectifLikeNiveau = Student::effectifLikeNiveauR($niv);

    } else {
        header('location:home');
        exit();
    }
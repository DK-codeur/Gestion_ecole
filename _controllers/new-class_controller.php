<?php

    $niveauError = $numError = $error = "";
    $niveau = $num = '';
    $isSuccess = false;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST))
        {

            $niveau = verifInput($_POST['niveau']);
            $num = verifInput($_POST['numerotation']);

            $isSuccess = true;

            if(empty($niveau))
                {
                    $niveauError = 'Selectionnez le niveau';
                    $isSuccess = false;
                }

            if(empty($num))
                {
                    $numError = 'Numeroté la classe';
                    $isSuccess = false;
                }

            //------------------
            if($isSuccess)
                {   
                    $fdClasse = Classe::findClasse($niveau.$num);

                    if($fdClasse) {
                        $error = $niveau.$num.':  Cette classe existe déja';
                    } else {
                        # code...
                        $classe = Classe::insertClasse($niveau.$num);
    
                        echo '<script language="javascript">';
                        echo 'alert("Classe ajoutée avec succès")';
                        echo '</script>';
    
                        $niveau = $num = '';
                    }
                    

                }

            
        }
<?php
$allCommune = Commune::getAllCommune();
$countAllCommune = Commune::countAllCommune();

    $communeError = $error = "";
    $commune = '';
    $isSuccess = false;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST))
        {

            $commune = verifInput($_POST['commune']);

            $isSuccess = true;

            if(empty($commune))
                {
                    $communeError = 'Saisissez un nom';
                    $isSuccess = false;
                }


            //------------------
            if($isSuccess)
                {   
                    $fdCommune = Commune::findCommune($commune);

                    if($fdCommune) {
                        $error = $commune.':  Cette Commune existe déja';
                    } else {
                        # code...
                        $classe = Commune::insertCommune($commune);
    
                        echo '<script language="javascript">';
                        echo 'alert("commune ajoutée avec succès")';
                        echo '</script>';
    
                        $commune = '';

                        header('refresh:2;');
                    }
                    

                }

            
        }
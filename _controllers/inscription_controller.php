<?php
isLogged();
    $allCommune = Commune::getAllCommune();
    $allClasse = Classe::getAllClasse();

    $nom = $prenoms = $naissance = $sexe  = $matricule  = $telephone = $id_classe = $id_commune = "";
    $nomError = $prenomsError = $naissanceError = $sexeError = $classeError = $matriculeError = $communeError = $telephoneError = $error = "";
    $isSuccess = false;

    if( isset($_POST) && !empty($_POST))
        {
            $nom        = verifInput($_POST['nom']);
            $prenoms    = verifInput($_POST['prenoms']);
            $naissance  = verifInput($_POST['naissance']);
            $sexe       = verifInput($_POST['sexe']);
            $matricule  = verifInput($_POST['matricule']);
            $telephone  = verifInput($_POST['telephone']);
            $id_classe  = verifInput($_POST['classe']);
            $id_commune = verifInput($_POST['commune']);

            $isSuccess = true;

            if(empty($nom))
                {
                    $nomError = 'Entrer un nom';
                    $isSuccess = false;
                }

            if(empty($prenoms))
                {
                    $prenomsError = 'Entrer un prenoms';
                    $isSuccess = false;
                }

            if(empty($naissance))
                {
                    $naissanceError = 'Saisissez la date de naissance';
                    $isSuccess = false;
                }

            if(empty($sexe))
                {
                    $sexeError = 'Choisissez le genre';
                    $isSuccess = false;                 
                }

           

            if(empty($matricule))
                {
                    $matriculeError = 'Saisissez le matricule';
                    $isSuccess = false;                 
                }



            if(!verifPhone($telephone))
                {
                    $telephoneError = 'numero incorrect';
                    $isSuccess = false;
                }

            if(strlen($telephone) < 8 )
                {
                    $telephoneError = 'numero trop court';
                    $isSuccess = false;
                }

            if(empty($id_classe)) {
                $classeError = 'Choisissez la classe';
                $isSuccess = false;                 
            }

                
            if(empty($id_commune)) {
                $communeError = 'Entrer la commune';
                $isSuccess = false;                 
            }


            //----------------------------

            if($isSuccess)
                {
                    $req = Student::insertStudent($nom, $prenoms, $naissance, $sexe, $matricule, $telephone, $id_classe, $id_commune); 
                    
                    echo '<script language="javascript">';
                    echo 'alert("Inscription effectuée Avec succès")';
                    echo '</script>';
                    $nom = $prenoms = $naissance = $sexe  = $matricule  = $telephone = $id_classe = $id_commune = "";
                    header('refresh:1;');
                }

        }



?>
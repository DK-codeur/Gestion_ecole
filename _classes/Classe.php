<?php

    class Classe
        {
            public $id;
            public $nom;

            function __construct($id)
                {
                    global $db;
                    $id = str_secure($id);

                    $req = $db->prepare('SELECT * FROM classe WHERE id_commune = ?');
                    $req->execute([$id]);
                    $data = $req->fetch();

                    $this->id = $id;
                    $this->nom = $data['nom'];
                }
               
            //get all classe    
            static function getAllClasse() {
                global $db;

                $req = $db ->prepare('SELECT * 
                                      FROM classe 
                                      ORDER BY nom 
                                      DESC
                                    ');
                $req->execute([]);
                return $req->fetchAll();
            }

            //insert classe
            static function insertClasse($nom) {
                global $db;
                
                $req = $db->prepare('INSERT INTO `classe`(`nom`)
                                        VALUES(?)      
                                    ');
                $req->execute([$nom]); 
                
            }

            //find classe
            static function findClasse($nom) {
                global $db;
                $req = $db->prepare('SELECT * FROM classe WHERE nom = ?');
                $req->execute([$nom]);
                return $req->fetch();
            }
        }

?>
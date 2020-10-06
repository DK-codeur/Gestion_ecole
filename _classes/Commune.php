<?php

    class Commune
        {
            public $id;
            public $nom;

            function __construct($id)
                {
                    global $db;
                    $id = str_secure($id);

                    $req = $db->prepare('SELECT * FROM commune WHERE id_commune = ?');
                    $req->execute([$id]);
                    $data = $req->fetch();

                    $this->id = $id;
                    $this->nom = $data['nom'];
                }

            static function getAllCommune() {
                global $db;

                $req = $db ->prepare('SELECT * FROM commune ORDER BY nom ASC');
                $req->execute([]);
                return $req->fetchAll();
            }


             //find classe
             static function findCommune($nom) {
                global $db;
                $req = $db->prepare('SELECT * FROM commune WHERE nom = ?');
                $req->execute([$nom]);
                return $req->fetch();
            }

            //count all commune    
            static function countAllCommune() {
                global $db;

                $req = $db ->prepare('SELECT count(*) AS total_commune FROM commune');
                $req->execute([]);
                return $req->fetch();
            }

              //insert comunne
              static function insertCommune($nom) {
                global $db;
                
                $req = $db->prepare('INSERT INTO `commune`(`nom`)
                                     VALUES(?)      
                                    ');
                $req->execute([$nom]); 
                
            }
        }

?>
<?php

    class Student {
        public $id;
        public $nom;
        public $prenoms;
        public $naissance;
        public $sexe;
        public $matricule;
        public $telephone;
        public $id_classe;
        public $id_commune;

        function __construct($id) {
            global $db;
            $id = str_secure($id);

            $req = $db->prepare('SELECT stds.*, cl.nom AS classe, com.nom AS commune 
                                FROM students stds
                                INNER JOIN classe cl ON cl.id_classe = stds.id_student
                                INNER JOIN commune com ON com.id_commune = stds.id_student
                                WHERE stds.id_student = ?
                                ');
            $req->execute([$id]);
            $data = $req->fetch();

            $this->id         = $id;
            $this->nom        = $data['nom'];
            $this->prenoms    = $data['prenoms'];
            $this->naissance  = $data['naissance'];
            $this->sexe       = $data['sexe'];
            $this->matricule  = $data['matricule'];
            $this->telephone  = $data['telephone'];
            $this->id_classe  = $data['id_classe'];
            $this->id_commune = $data['id_commune'];
        }

        // static function getAllStudent() {
        //     global $db;
        //     $req = $db->prepare('SELECT pu.*, us.nom, us.prenoms, cat.nom AS categorie, com.nom AS commune, of.nom AS offre  
        //                             FROM pubs pu
        //                             INNER JOIN categories cat ON cat.id_categorie = pu.id_categorie
        //                             INNER JOIN offres of ON of.id_offre = pu.id_offre
        //                             INNER JOIN users us ON us.id_user = pu.id_user
        //                             INNER JOIN communes com ON com.id_commune = pu.id_commune
        //                         ');
        //     $req->execute([]);
        //     return $req->fetchAll();
        // }

        //get all student
        static function getAllStudent() {
            global $db;
            $req = $db->prepare('SELECT stds.*, cl.nom AS classe, com.nom AS commune 
                                FROM students stds
                                INNER JOIN classe cl ON cl.id_classe = stds.id_student
                                INNER JOIN commune com ON com.id_commune = stds.id_student
                                ');
            $req->execute([]);
            return $req->fetchAll();
        }


        //get student by id
        static function getStudentById($id) {
            global $db;
            $id = str_secure($id);
            $req = $db->prepare('SELECT stds.*, cl.nom AS classe, com.nom AS commune 
                                FROM students stds
                                INNER JOIN classe cl ON cl.id_classe = stds.id_student
                                INNER JOIN commune com ON com.id_commune = stds.id_student
                                WHERE stds.id_student = ?
                                ');
            $req-> execute([$id]);
            return $req->fetch();
    
        }

         //get latest student
         static function getLatestStudent() {
            global $db;
            $req = $db->prepare('SELECT stds.*, cl.nom AS classe, com.nom AS commune 
                                 FROM students stds
                                 INNER JOIN classe cl ON cl.id_classe = stds.id_student
                                 INNER JOIN commune com ON com.id_commune = stds.id_student
                                 ORDER BY id_student DESC
                                 LIMIT 5
                                ');
            $req->execute([]);
            return $req->fetchAll();
        }

        //verify student id
        static function verifStudentId($id) {
            global $db;
            $id = str_secure($id);

            $req = $db->prepare('SELECT * FROM students WHERE id_student = ?');
            $req->execute([$id]);
            return $req->fetch();
        }

          //count all student
          static function countAllStudent() {
            global $db;

            $req = $db->prepare('SELECT count(*) AS total_student FROM students');
            $req->execute([]);
            return $req->fetch();
        }

         //count all MEN
         static function countAllMen() {
            global $db;

            $req = $db->prepare('SELECT count(*) AS total_men 
                                 FROM students
                                 WHERE sexe="M"
                                ');
            $req->execute([]);
            return $req->fetch();
        }

        
         //count all Wommen
         static function countAllWomen() {
            global $db;

            $req = $db->prepare('SELECT count(*) AS total_women 
                                 FROM students
                                 WHERE sexe="F"
                                ');
            $req->execute([]);
            return $req->fetch();
        }


         //Effectif like Niveau
         static function effectifLikeNiveau($likeClasse) {
            global $db;
            $likeClasse = str_secure($likeClasse);
            $req = $db->prepare('SELECT stds.*, cl.nom AS classe, com.nom AS commune 
                                 FROM students stds
                                 INNER JOIN classe cl ON cl.id_classe = stds.id_student
                                 INNER JOIN commune com ON com.id_commune = stds.id_student
                                 WHERE classe LIKE ?%
                                 ORDER BY stds.nom ASC
                                ');
            $req->execute([$likeClasse]);
            return $req->fetchAll();
        }

        //insert student
        static function insertStudent($nom, $prenoms, $naissance, $sexe, $matricule, $telephone, $id_classe, $id_commune) {
            global $db;
            $req = $db->prepare('INSERT INTO `students`(`nom`, `prenoms`, `naissance`, `sexe`, `matricule`, `telephone`, `id_classe`, `id_commune`)
                                    VALUES(?,?,?,?,?,?,?,?)
                                ');
            $req->execute([$nom, $prenoms, $naissance, $sexe, $matricule, $telephone, $id_classe, $id_commune]);
        }
        
                
    }
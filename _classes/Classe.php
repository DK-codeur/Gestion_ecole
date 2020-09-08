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

            static function getAllClasse()
                {
                    global $db;

                    $req = $db ->prepare('SELECT * FROM classe');
                    $req->execute([]);
                    return $req->fetchAll();
                }
        }

?>
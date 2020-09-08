<?php

    class User {
        public $id;
        public $nom;
        public $email;
        public $regAt;
        public $isBlock;
        public $pass;

        function __construct($id) {
            global $db;
            $id = str_secure($id);

            $req = $db->prepare('SELECT * FROM users WHERE id_user = ?');
            $req->execute([$id]);
            $data = $req->fetch();

            $this->id       = $id;
            $this->nom      = $data['nom'];
            $this->prenoms  = $data['prenoms'];
            $this->email    = $data['email'];
            $this->regAt    = $data['regAt'];
            $this->isBlock  = $data['isBlock'];
            $this->pass  = $data['pass'];
        }

        static function getUser($id) {
            global $db;
            $id = str_secure($id);

            $req = $db->prepare('SELECT * FROM users WHERE id_user = ?');
            $req->execute([$id]);
            return $req->fetch();
        }

        static function getEmail($email) {
            global $db;
            $req = $db->prepare('SELECT * FROM users WHERE email = ?');
            $req->execute([$email]);
            return $req->fetch();
        }

        static function getEmailPass($email, $pass) {
            global $db; 
            $req = $db->prepare('SELECT * FROM  users WHERE email = ? AND pass = ?');
            $req->execute([$email,$pass]);  
            return $req->fetch();

        }
                
    }
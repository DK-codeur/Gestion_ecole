<?php
class Database
    {
        private static $dbHost = "localhost"; // 
        private static $dbName = "ges_ecole"; //c1443803c_ges_ecole
        private static $dbUser = "root"; //gesecole_u
        private static $dbPass = ""; //XMlyrE[4oOLU

        private static $connection = null;

        public static function connect()
            {
                if(self::$connection == null)
                {
                    try
                        {
                            self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUser, self::$dbPass );
                        }

                    catch(PDOException $e)
                        {
                            die($e->getMessage());
                        }
                }
                return self::$connection;
            }

        public static function disconnect()
            {
                self::$connection = null;
            }
    }

    $db = Database::connect();

?>
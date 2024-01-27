<?php
class DbManager
{
    public static function Connect($dbname)
    {
        $dsn = "mysql:dbname={$dbname};host=sql11.freesqldatabase.com";
        try {
            $pdo = new PDO($dsn, 'sql11679910', 'AuxF2fPWZe');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $exception) {
            die("connection failed: " . $exception->getMessage());
        }
    }

}
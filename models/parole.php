<?php

require_once __DIR__ . "/../connection/DbManager.php";
class Parole
{
    private $id;
    private $valore;

    public function setValore($valore)
    {
        $this->valore = $valore;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getValore()
    {
        return $this->valore;
    }

    public static function Find($valore)
    {
        $pdo = self::Connect();
        $daRicercare = $valore->getValore();
        $stmt = $pdo->prepare("SELECT * FROM Parole WHERE valore LIKE '%daRicercare%';");
        $stmt->bindParam(":valore", $daRicercare);
        $stmt->execute();
        return $stmt->fetchALL(PDO::FETCH_CLASS,'Parole');
    }

    public static function Connect()
    {
        return DbManager::Connect("sql11679910");
    }




}
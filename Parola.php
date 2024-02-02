<?php
require_once "DBManager.php";

class Parola
{
    private $id;
    private $parola;

    public function getId()
    {
        return $this->id;
    }

    public function getParola()
    {
        return $this->parola;
    }

    public function setParola($parola)
    {
        $this->parola = $parola;
    }

    public static function QuerySuggest($str)
    {
        $pdo = self::Connect();
        $stmt = $pdo->prepare("SELECT * FROM Parola WHERE Parole LIKE :string");
        $stmt->bindValue(":string", $str . '%', PDO::PARAM_STR);

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_COLUMN, 1);
        } else {
            return false;
        }
    }

    static function Connect()
    {
        return DBManager::Connect("daniel_targa_Parole");
    }
}
?>

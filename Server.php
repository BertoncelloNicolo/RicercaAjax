<?php
require_once "DBManager.php";
require_once "Parola.php";

$str = $_GET['Papa'];
$ListaParole = Parola::QuerySuggest($str);

if ($ListaParole !== false) {
    echo json_encode($ListaParole);
} else {
    echo "Errore durante la query di suggerimenti.";
}
?>

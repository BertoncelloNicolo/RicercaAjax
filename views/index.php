<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricerca</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to bottom, #efc738 0%, #000000 100%);
        }

        h1 {
            text-align: center;
        }

        label {
            text-align: center;
            display: block;
            margin-bottom: 10px;
            color: #000000;
        }

        input[type="text"] {
            padding: 10px;
            width: 300px;
            border: 1px solid rgba(68, 66, 66, 0.91);
            border-radius: 4px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            padding: 10px 15px;
            background-color: #efc738;
            color: #000000;
            transition-duration: 0.3s;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #000000;
            color: #efc738;
        }
    </style>
</head>
<body>




<form action="../action/search.php" method="get">
    <label for="search">Inserisci il termine di ricerca:</label>
    <input type="text" id="search" name="search" placeholder="Cerca qualcosa...">
    <input type="submit" value="Cerca">
</form>

<?php
if (isset($ricercato)) {
    $ricercato = $_GET['search'];
    echo "<h2>Risultati della ricerca per '$ricercato'</h2>";
}
?>

</body>
</html>


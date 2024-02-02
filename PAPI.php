<!DOCTYPE html>
<html lang="en">
<script src = "suggerimenti.js"></script>
<head>
    <meta charset="UTF-8">
    <title>PAPI</title>
</head>
<body>
<form action="Server.php" method="POST">
    <input id="ricerca" type="text" name="Papa" placeholder="Nome Papa" onkeyup="ShowSuggerimenti(this.value)">
</form>


Suggerimenti:
<ul id="suggerimenti"></ul>


</body>
</html>

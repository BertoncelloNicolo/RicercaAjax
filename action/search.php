<?php

require_once __DIR__ . "/../models/parole.php";

$parola = $_POST["parola"];

Parole::Find($parola);



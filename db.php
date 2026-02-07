<?php

$username = "root";
$password = "";
$host = "MySQL - 8.0";
$pdo = new PDO('mysql:host=MySQL-8.0;dbname=monolith', $username, $password);

return $pdo;
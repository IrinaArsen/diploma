<?php
$user = 'root';
$password = 'root';
$db = 'diplom';
$host = 'localhost';

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $password);


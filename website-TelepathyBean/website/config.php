<?php
define('DB_SERVER', 'studmysql01.fhict.local');
define('DB_USERNAME', 'dbi427502');
define('DB_PASSWORD', 'Wum3H-OzX0');
define('DB_NAME', 'dbi427502');

try
{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    die("ERROR: Could not connect. " . $e->getMessage());
}

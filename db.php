<?php
$config = require("./config.php");
$DBHost = $config["DB"]["host"];
$DBUser = $config["DB"]["user"];
$DBPass = $config["DB"]["pass"];
$DBName = $config["DB"]["database"];

try {
  $conn = new PDO("mysql:host=$DBHost;dbname=$DBName", $DBUser, $DBPass);
  echo "Conexión Exitosa";
} catch (Exception $ex) {
  echo $ex->getMessage();
}

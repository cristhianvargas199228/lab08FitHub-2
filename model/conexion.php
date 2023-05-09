<?php
$host = 'containers-us-west-150.railway.app';
$dbname = 'railway';
$username = 'root';
$password = 'NPahukgd1Eaw8snyqPcA';

try {
  $bd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Error al conectarse a la base de datos: " . $e->getMessage();
  die();
}
?>
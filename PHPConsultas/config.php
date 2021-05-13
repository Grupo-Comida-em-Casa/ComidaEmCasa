<?php
$host = 'localhost';
$dbname = 'comida_casa';
$user = 'root';
$pass = '';

try{
  $pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
  //echo "Conexão ok";

}catch(PDOException $e){
  die("Erro: " . $e->getMessage());

}
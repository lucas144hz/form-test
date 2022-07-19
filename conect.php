<?php

$host = "localhost";
$banco = "stmonica";
$usuario = "postgres";
$senha = "lucaslucas";

$endereço = "pgsql:host=$host;dbname=$banco;user=$usuario;password=$senha";
try{
  $conexao = new PDO($endereço);

  if(!$conexao){
    echo "deu certo";
  }
}
catch (PDOException $e){
 
  echo $e->getMessage();
 }

 ?>

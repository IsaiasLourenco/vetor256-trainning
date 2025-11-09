<?php
// BANCO DE DADOS LOCAL
$banco = 'trainning';
$servidor = 'localhost';
$usuario = 'root';
$senha = '';

date_default_timezone_set('America/Sao_Paulo');

try{
    $pdo = new PDO("mysql:dbname=$banco;
                          host=$servidor;
                          charset=utf8",
                          "$usuario",
                          "$senha");
} catch(Exception $e) {
    echo 'Não conectado ao banco de dados! <br>' . $e;
}

?>
<?php 
    $servidor = 'localhost';
    $usuario = 'root';
    $banco = 'bdlojaroupas';
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, '');
?>
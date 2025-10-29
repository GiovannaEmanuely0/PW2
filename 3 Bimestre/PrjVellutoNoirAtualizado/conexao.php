<?php 
    $servidor = 'localhost';
    $usuario = 'root';
    $banco = 'bdvellutonoir';
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, '');
?>
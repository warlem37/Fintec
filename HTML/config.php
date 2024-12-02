<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dpPassowrd = '';
    $dbName = 'cadastro';

    $conexao = new mysqli($dbHost,$dbUsername, $dpPassowrd, $dbName);

    //if ($conexao->connect_error) {
    //    echo "Erro";
    //}
    //else{
    //    echo"Conexão efetuada co suceso";
    //}
?>
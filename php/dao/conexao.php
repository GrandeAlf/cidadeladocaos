<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "cidadeladocaos";

    $mysqli = new mysqli($host, $usuario, $senha, $database);
    
    if($mysqli->connect_errno){
        echo "Falha na Conexão: (".$mysqli->connect_errno. ") ".$mysqli->connect_error;
    }
    /*else{
    	echo "conectou";
    }*/
?>
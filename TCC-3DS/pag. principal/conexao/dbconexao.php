<?php

    $host = "localhost";
    $_dbName = "cardapio";
    $_Username = "root";
    $_dbPassword = "Cruz3iro_2013!";
    
    $mysql = mysqli_connect($host, $_Username, $_dbPassword, $_dbName);

	if (!$mysql) {
		  echo "Falha no conexão: (" . $mysql_error() . ")";
    }
?>
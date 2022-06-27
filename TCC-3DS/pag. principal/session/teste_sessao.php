<?php

    session_start();

    echo "<pre>";    

    if (isset($_SESSION["lanche"])) {

        $arrSession = $_SESSION["lanche"];

        $id = 5;    // ToDo: deve vir da página do cardápio;
        $qtd = 20;  // ToDo: deve vir da página do cardápio;

        $arrLanche = array (
            $id => $qtd
        );
        array_merge($arrSession, $arrLanche);

        $_SESSION["lanche"] = $arrSession;        

    } else {
        $id = 5;    // ToDo: deve vir da página do cardápio;
        $qtd = 20;  // ToDo: deve vir da página do cardápio;
        $arrLanche = array (
            $id => $qtd
        );
        $_SESSION["lanche"] = $arrLanche;
    }
        
    print_r($_SESSION);    

    session_destroy();

?>
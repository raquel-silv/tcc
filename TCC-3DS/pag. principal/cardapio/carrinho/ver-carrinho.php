<?php
   //   echo "<pre>";
      //print_r($_SESSION);
    //  die("session: " . session_status());

	$statusSessaoAtiva = 2;
	if (session_status() != $statusSessaoAtiva) {
		//header('Location: https://www.w3schools.com');
		echo "Você não adicionou nenhum produto";
        die;
	}else {

        echo "<pre>";
        print_r($_SESSION);
        die;
    }

?>

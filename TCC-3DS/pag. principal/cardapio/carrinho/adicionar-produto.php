<?php

// Essa página pega o que foi selecionado na tela e joga dentro da cesta (carrinho), porém só pode ser selecionado um por vez e não varios itens :(

	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		echo "<h1>" . $_GET["nome"] . "</h1>";
		echo "<p>" . $_GET["qtd"] . "</p>";}

	$statusSessaoAtiva = 2;
	if (session_status() != $statusSessaoAtiva) {
		header('Location: http://localhost/TCC-3DS/pag.%20principal/cardapio/cardapio-listar.php?hasError=1&msg="Sessão Inativa"');
	}

	$idProduto = isset($_GET["idProduto"])		?	$_GET["idProduto"] 	: null;
	if (is_null($idProduto)) {
		// Retornar para a página do cardápio
		header('Location: http://localhost/TCC-3DS/pag.%20principal/cardapio/cardapio-listar.php?hasError=1&msg="Produto Ausente"');
	} else {
		$nome = isset($_GET["nome"])				?	$_GET["nome"] 			: null;			
		$categoria = isset($_GET["categoria"])		?	$_GET["categoria"] 		: null;
		$qtd = isset($_GET["qtd"])					?	$_GET["qtd"] 			: null;	

		$_SESSION["nome"]=$nome;
		$_SESSION["idProduto"]=$idProduto;
		$_SESSION["categoria"]=$categoria;
		$_SESSION["qtd"]=$qtd;
		

/*
		echo $_SESSION["idProduto"];
		echo "<br />";
		echo $_SESSION["categoria"];
		echo "<br />";
		echo $_SESSION["qtd"];
*/
/*
		if (is_null($categoria) || is_null($qtd)) {
			header('Location: http://localhost/TCC-3DS/pag.%20principal/cardapio/cardapio-listar.php?hasError=1&msg="Info faltante"');
		} else {
			if (isset($_SESSION[$categoria])) {
				$arrSession = $_SESSION[$categoria];
				$arrLanche = array (
						$idProduto => $qtd
				);
				array_merge($arrSession, $arrLanche);
				$_SESSION[$categoria] = $arrSession;        		
			} else {
				$arrLanche = array (
					$idProduto => $qtd
				);
				$_SESSION[$categoria] = $arrLanche;
			}
			*/

			//Esse 'header' retorna para a pagina do cardapio após o cliente clicar em adicionar os produtos
			header('Location: http://localhost/TCC-3DS/pag.%20principal/cardapio/cardapio-listar.php?hasError=1&msg="Adicionado com sucesso"');

		/*
		}
		*/
	}
?>
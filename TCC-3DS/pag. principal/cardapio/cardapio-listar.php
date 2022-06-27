<?php
	session_start();
	//print_r($_SESSION);

	//Aqui é a Página que contém todos os lanches!
?>
<html>
	<head>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
	<link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style-geral.css"> <!-- custom CSS -->	
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cardápio</title>
	</head>
	<body>
	    <!-- IMG 30% OFF NA PRIMEIRA COMPRA -->
		<img src="img/off.jpg" class="img-fluid"><br><br>
	
		<a class="carrinho" href="carrinho/cesta/cesta-carrinho.php" >
			<center><img class="carrinho" src="img/carrinho.png" width="380px"; height="180px";></center>
		</a>
		<br><br>

	<?php

		$temCategoria = isset($_GET["categoria"]) 	? 	$_GET["categoria"]	: null;
		$sqlCategoria = null;
		if (!is_null($temCategoria)) {
			$sqlCategoria =  " where lower(categoria) = '" . $temCategoria . "' ";
		}

		include ("..\conexao\dbconexao.php");

		$sql = "SELECT * from produto" . $sqlCategoria;

		$result = $mysql->query($sql);
		if ($result->num_rows > 0) {
			$i = 0;			
			while($row = $result->fetch_assoc()) {
				$k = 0;				
				if ($i % 2 == 0) {
					$k++;
	?>
		
	    <main class="cards">	
	<?php
			}
	?>
			<article class="card" id=<?php echo $row["id"] ?>>
				<form id=<?php echo $i; ?> action="carrinho/adicionar-produto.php" method="GET">
					<h2 class="categorias" ><?php echo $row["nome"] ?></h2>
					<input type="hidden" name="idProduto" value=<?php echo $row["id"] ?> >
					<input type="hidden" name="nome" value=<?php echo $row["nome"] ?> >
					<input type="hidden" name="categoria" value=<?php echo $temCategoria ?> >
						<img class="img" src="<?php echo $row["caminho_foto"] ?>">
					<div class="chip">
						<?php echo "R$ " . $row["valor"]?>  
						<p>
						<p class="txt">	<?php echo $row["descricao"]?></p>
					</div> 

					<div class="quantidade">
						<center><label for="fname">Selecione a quantidade aqui!</label></center>
						<input type="number" name="qtd" min="1" max="15" value="0"/>				
					</div> 
					<br>
					<button  class="button" type="submit" id="button1" onclick="alert('Confirme o seu pedido na carrinho antes de fazer outra compra')">Adicionar ao carrinho &#128722;</button>
					<br>
				</form>
			</article>
		<br>
	<?php
	  if ($k == 2) {
	?>
	        <br />
			</main>
					
	<?php
				}
	?>

	<?php	
			$i++;			
			}
		} else {
			echo "0 results";
		}
		$mysql->close();			
		
	?>	
	<br>
</body>
<script type="text/javascript"></script> 
<script src="preloader.js"></script>
</html>
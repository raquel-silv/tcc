<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cesta</title>
  <link rel="stylesheet" href="css/cesta.css"> <!-- custom CSS -->
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<?php
session_start();
?>
  <!-- CARROSSEL -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/a1.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/a2.jpg" class="d-block w-100">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>

<br>

<center>
      <h4 class="texto1">Iten: <?php echo $nome = $_SESSION["nome"]; ?></h4>
      <h5 class="texto1">Quantidade: <?php echo $qtd = $_SESSION["qtd"]; ?></h5>
      <input class="button" type="button" onclick="alert('Pedido Enviado Com Sucesso!')" value="Confirmar Pedido">
      <p class="texto2">Categoria: <?php echo $categoria = $_SESSION["categoria"]; ?></p> <br>
      <div class="texto2-3">
      <label for="exampleFormControlTextarea1" class="texto2">Deixe aqui alguma sugestão</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div><br>
      <a class="texto2" href="http://localhost/TCC-3DS/pag.%20principal/">Voltar para o cardápio</a>
</center>
<br>



<?php
    // Esta pág. mostra o que esta dentro da cesta de compras.
//$qtd = $_SESSION["qtd"];
//$idProduto = $_SESSION["idProduto"];
//$categoria = $_SESSION["categoria"];
//$nome = $_SESSION["nome"];

$idSession = session_id();

//testa para saber se os campos estão vazios
if (empty($categoria) or empty($qtd));
exit;  
?>

    <!--Esse botão não está aparecendo na tela-->
</body>
</html>

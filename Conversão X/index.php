<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- SEO e mate tags -->
	<title>Conversão Real</title>
	<meta charset="utf-8">
	<meta name="author" content="Arthur">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Aplicação para conversão da moeda real para dólar, euro e bitcoin">
	<meta name="keywords" content="Conversão, real, dólar, euro, bitcoin, economia">
	<script src="https://kit.fontawesome.com/a7cf753026.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<!-- Header e navbar da aplicação -->

<header>
	<div class="container">
		
		<div class="logo">
			<img src="images/alpha.png">
			<h2>ALPHA.CASTT</h2>
		</div><!--logo-->

		<div class="title-convert">
			<i class="fas fa-search-dollar"></i>
			<p>Conversão Alpha</p>
		</div><!--title-convert-->

	</div><!--container-->
</header>

<!-- Fim header e navbar da aplicação -->

<!-- Aqui começa a aplicação -->

<div class="welcome">
	<h2>Bem-vindo ao sistema de conversão Alpha Castt!<i class="far fa-laugh-beam"></i></h2>
	<div class="line"></div>
</div>

<main>
	<div class="painel">
		<h2>Instruções</h2>
			<div class="conteudo-painel">
				<p>Esta aplicação tem como finalidade converter a moeda real para dólar, euro e bitcoins!</p>
				<p>O valor de cada moeda hoje a cada R$ 1,00 é:</p>
				<ul>
					<li><b>Dólar: R$ 5,36</b></li>
					<li><b>Euro: R$ 6,37</b></li>
					<li><b>Bitcoin: R$ 82.915,67</b></li>
				</ul>
				<div class="mods">
					<a href="https://pt.wikipedia.org/wiki/D%C3%B3lar_dos_Estados_Unidos" target="_blank"><i class="fas fa-dollar-sign"></i></a>
					<a href="https://pt.wikipedia.org/wiki/Euro" target="_blank"><i class="fas fa-euro-sign"></i></a>
					<a href="https://foxbit.com.br/o-que-e-bitcoin/" target="_blank"><i class="fab fa-bitcoin"></i></a>
				</div><!--mods-->
			</div>
	</div>

	<div class="painel">
			<h2>Cálculo da conversão (R$) em dólar, euro e bitcoin</h2>
			<div class="conteudo-painel">
				<form action="calculo.php" method="POST">
					<label for="real">Digite o valor a ser convertido em Dólar, Euro e BitCoin:</label>
					<input type="number" class="campoTexto"  name="real" placeholder="Digite um valor em real.." required/>
					<button class="botao" type="submit">Calcular</button>
				</form>
			<div class="today">
				<a href="https://www.xe.com/pt/currency/brl-brazilian-real" target="_blank">Real Hoje - BRL</a>
			</div><!--today-->
		</div>
</main>

<!-- Fim da Conversão -->

<!-- Footer -->
	<footer>
		<p>Alpha Castt 2020 - Todos os direitos reservados</p>
	</footer>
<!-- Footer -->

<footer>

</footer>

</body>


</html>
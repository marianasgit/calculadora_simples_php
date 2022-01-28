<?php

$valor1 = (float) 0;
$valor2 = (float) 0;
$resultado = (float) 0;

if (isset($_POST['btncalc'])) {
	$valor1 = $_POST['txtn1'];
	$valor2 = $_POST['txtn2'];

	if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "") {
		echo ('verificar se todos os valores foram preenchidos');
	} else {
		if (!is_numeric($valor1) || !is_numeric($valor2)) {
			echo ('Todos os valores digitados devem ser números válidos!');
		} else {
			if ($_POST['rdocalc'] == "somar") {
				$resultado = ($valor1 + $valor2);
			} elseif ($_POST['rdocalc'] == "subtrair") {
				$resultado = ($valor1 - $valor2);
			} elseif ($_POST['rdocalc'] == "multiplicar") {
				$resultado = ($valor1 * $valor2);
			} else {
				$resultado = ($valor1 / $valor2);
			}
		}
	}
}


?>
<html>

<head>
	<title>Calculadora - Simples</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<div id="conteudo">
		<div id="titulo">
			Calculadora Simples
		</div>

		<div id="form">
			<form name="frmcalculadora" method="post" action="index.php">
				Valor 1:<input type="text" name="txtn1" value="<?= ($valor1); ?>"> <br>
				Valor 2:<input type="text" name="txtn2" value="<?= ($valor2); ?>"> <br>
				<div id="container_opcoes">
					<input type="radio" name="rdocalc" value="somar" <?= ($operacao == "somar") ? "checked" : '' ?>>Somar <br>
					<input type="radio" name="rdocalc" value="subtrair" <?= ($operacao == "subtrair") ? "checked" : '' ?>>Subtrair <br>
					<input type="radio" name="rdocalc" value="multiplicar" <?= ($operacao == "multiplicar") ? "checked" : '' ?>>Multiplicar <br>
					<input type="radio" name="rdocalc" value="dividir" <?= ($operacao == "dividir") ? "checked" : '' ?>>Dividir <br>
					$operacao = (string) $_POST['rdocalc'];
					<input type="submit" name="btncalc" value="Calcular">

				</div>
				<div id="resultado">
					O resultado é: <?= ($resultado); ?>
				</div>

			</form>
		</div>

	</div>


</body>

</html>
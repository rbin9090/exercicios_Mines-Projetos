
<main>


<?php

$dividendo = $_GET['d1'] ?? 0;
$divisor = $_GET['d2'] ?? 1;

//7:57
?>

<form method="GET">
	<label for="d1" name="d1" id="d1">Dividendo</label>
	<input type="number" name="d1" id="d1" value="<?=$dividendo?>">
	<label>Divisor</label>
	<input type="number" name="d2" id="d2" value="<?=$divisor?>">
	<input type="submit" name="analisar" value="Analizar">
</form>
<section>
	<h2>ESTRUTURA DA DIVISÃO</h2>



</section>
</main>
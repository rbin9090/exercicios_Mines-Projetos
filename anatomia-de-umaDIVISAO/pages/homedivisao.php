
<main>


<?php

$dividendo = $_GET['d1'] ?? 0;
$divisor = $_GET['d2'] ?? 1;

//7:57
?>

<form method="GET">
	<label for="d1" name="d1" id="d1">Dividendo</label>
	<input type="number" name="d1" id="d1" min="0" value="<?=$dividendo?>">
	<label>Divisor</label>
	<input type="number" name="d2" id="d2" min="1"value="<?=$divisor?>">
	<input type="submit" name="analisar" value="Analizar">
</form>
<section>
	<h2>ESTRUTURA DA DIVISÃO</h2>
<?php

$quociente = intdiv($dividendo, $divisor);
$resto = $dividendo % $divisor;



?>
<table class="divisao">
	<tr>
		<td><?=$dividendo?></td>
		<td><?=$divisor?></td>
	</tr>
	<tr>
		<td><?=$resto?></td>
		<td><?=$quociente?></td>
	</tr>
</table>

</section>
</main>

<?php include '../config_site.php';?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=TITULO_HEADER?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php

$minimo = 1_320.00;



?>

<main>
	
<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
	<label for="sal">Salário (R$)</label>
	<input type="number" name="sal" id="sal" value="" step="0.01">
	<input type="submit" value="calcular">
<p>Considerando o salario minimo de R$ <?=number_format($minimo,2,",",".")?></p>

</form>




</main>







</body>
</html>
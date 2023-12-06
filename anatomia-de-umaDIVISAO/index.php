<?php


if (file_exists('pages/homedivisao.php')) {
	include('tamplates/header.php');
	include 'pages/homedivisao.php';
	include('tamplates/footer.php');
}else{
	die('arquivo não encontrado');
}




?>
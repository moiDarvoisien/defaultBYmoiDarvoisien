<?php
if(isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'home';
}
ob_start();
if($p === 'home') {
	require 'asset/page/public/home.php';
}elseif ($p === '*****') {
	require 'asset/page/php/*****.php';
}
$content = ob_get_clean();
require 'asset/page/template/default.php';
?>
<meta charset="UTF-8">

<?php 
require_once('banco.php');
require_once('tabelas.php');

 $id = intval($_GET['id']);
 $sql = "DELETE FROM `tb_usuario` WHERE id_usuario=$id";
 function executar_sql($sql) {
 	global $conn;
 	$sth = $conn->prepare($sql);
 	$sth->execute();
	
 }
 executar_sql($sql);
header('Location: dados.php');

var_dump($_GET)


?>
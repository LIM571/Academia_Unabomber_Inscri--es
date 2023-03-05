<?php 
require_once('banco.php');
require_once('tabelas.php');




$Nome = $_POST['nome'];
$Idade = $_POST['idade'];
$Apelido = $_POST['apelido'];
$Peso = $_POST['peso'];
$Email = $_POST['email'];
$Turno = $_POST['turno'];
$Fone = $_POST['fone'];

$n = 1;

$sql = "INSERT INTO `tb_usuario`(`id_usuario`, `nome_usuario`, `Idade_usuario`, `apelido_usuario`, `peso_usario`, `email_contanto`, `id_turno_usario`, `cell_usario`) VALUES (null,'$Nome',$Idade,'$Apelido',$Peso,'$Email',$Turno,'$Fone')";

function executar_sql($sql) {
	global $conn;
	$sth = $conn->prepare($sql);
	$sth->execute();
	
}


executar_sql($sql);

header('Location: dados.php');

?>

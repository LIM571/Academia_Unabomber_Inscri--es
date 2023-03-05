<?php

function select_tb_turnos() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM tb_turnos");
	$sth->execute();
	return $sth->fetchAll();
}

?>

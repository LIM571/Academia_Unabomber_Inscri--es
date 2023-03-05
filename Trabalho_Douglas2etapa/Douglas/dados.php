<?php 

require_once("banco.php");
function executar_sql($sql) {
	global $conn;
	$sth = $conn->prepare($sql);
	$sth->execute();
    return $sth->fetchAll();
}

$sql = "SELECT * FROM `tb_usuario` INNER JOIN `tb_turnos`  WHERE tb_usuario.id_turno_usario=tb_turnos.id_turnos";

$select = executar_sql($sql);

$i = 0;



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>

<body>
    <div>
        <table border="2">
            <tr>
                <td>ID</td>
                <td>nome</td>
                <td>idade</td>
                <td>apelido</td>
                <td>peso</td>
                <td>email</td>
                <td>turno</td>
                <td>cell</td>
                <td>Deletar</td>
               
            </tr>


            <?php
            foreach ($select as $dado) {
            ?>



                <tr>
                    <td><?php echo $dado['id_usuario'] ?></td>
                    <td><?php echo $dado['nome_usuario'] ?></td>
                    <td><?php echo $dado['Idade_usuario'] ?></td>
                    <td><?php echo $dado['apelido_usuario'] ?></td>
                    <td><?php echo $dado['peso_usario'] ?></td>
                    <td><?php echo $dado['email_contanto'] ?></td>
                    <td><?php echo $dado['nome_turnos'] ?></td>
                    <td><?php echo $dado['cell_usario'] ?></td>
                    
                    <td><a href="del.php?id=<?php echo $dado['id_usuario'] ?>"> Deletar </a>
                    
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

</body>

</html>
<?php 
require_once('banco.php');
require_once('tabelas.php');
?>




<!doctype html>
<html lang="en">

<head>
  <title>Formulario</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <style>
    div {
      margin: 26px;

    }

    body {
      background-color: #DAA520;
    }
  </style>
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main class="mx-auto" style="width: 60%" ; >
  <form class="form-floating"  action="form.php" method="post">
    <div>
      <label for="floatingInputValue">Digite seu Nome:</label>
      <input type="text" class="form-control" id="floatingInputValue" placeholder="nome" value="" name="nome">
    </div>

    <div>

      <label for="floatingInputValue">Digite sua idade:</label>
      <input type="number" class="form-control" id="floatingInputValue" placeholder="idade" value="" name="idade">

    </div>


    <div>
      <label for="floatingInputValue">Digite seu Nome de Luta</label>
      <input type="text" class="form-control" id="floatingInputValue" placeholder="nome de lutador" value="" name="apelido">
    </div>


    <div>
      <label for="floatingInputValue">Digite seu peso</label>
      <input type="floating" class="form-control" id="floatingInputValue" placeholder="digite seu peso" value="" name="peso">
    </div>


    <div>
      <label for="floatingInputValue">Digite o Email para contato</label>
      <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com"
        value="" name="email">

    </div>



    <div class="form-floating">
      <label for="floatingSelect"></label>
      <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="turno">
        <option selected>Escolha seu turno</option>
        <?php
            $turnos = select_tb_turnos();
            foreach ($turnos as $turno ) {
            echo "<option value=\"{$turno['id_turnos']}\">{$turno['nome_turnos']}</option>";
            }
        ?>
        </select>
    </div>






    <div>
      <label for="floatingInputValue">Digite seu Telefone</label>
      <input type="tell" class="form-control" id="floatingInputValue" placeholder="984684257" value="" name="fone">
    </div>


    <div class="col-12">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    </form>










  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>






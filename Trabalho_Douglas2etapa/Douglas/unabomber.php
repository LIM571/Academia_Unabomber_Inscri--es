<?php 
    $Usuario = $_POST['usuario'];
    $Senha = $_POST['senha'];
     
    $Usuario_Correto = '1234';
    $Senha_Correta = 1234;

    
    
    if ($Usuario == $Usuario_Correto and $Senha == $Senha_Correta){
        header("location:unabomber.html");
    }
    



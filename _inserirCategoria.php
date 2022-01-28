<?php

   include_once 'conexao.php';


    // Recebe o valor do atributo
    
     $categoria = $_POST['categoria'];    

     $sql = "INSERT INTO `categoria`(`categoria`) VALUES ('$categoria')";
     $inserir = mysqli_query($conexao, $sql);
    

       ?>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
              integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
              crossorigin="anonymous">
        <div class ="container" style ="width: 500px;margin-top: 20px ">
            <div class="col-md-12 text-center">
        <h4> Categoria adicionada com sucesso!</h4>
        <div style="padding-top: 20px">
            <a href="index.php" role="button" class ="btn btn-sm btn-warning">Voltar</a>
            <div class="col-md-12 text-center">
        </div>
        </div> 

 
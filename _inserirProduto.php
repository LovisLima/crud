    <?php

    include_once 'conexao.php';


    $nroproduto = $_POST['nroproduto']; // Recebe o valor do atributo
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];


      $sql = "INSERT INTO `estoque`( `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ('$nroproduto','$nomeproduto','$categoria',$quantidade,'$fornecedor')";
     $inserir = mysqli_query($conexao, $sql);
    

    ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
              integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
              crossorigin="anonymous">
        <div class ="container" style ="width: 500px;margin-top: 20px ">
            <div class="col-md-12 text-center">
        <h4> Produto adicionado com sucesso!</h4>
        <div style="padding-top: 20px">
            <a href="adicionarProduto.php" role="button" class ="btn btn-sm btn-primary">Cadastrar novo Item</a>
            <div class="col-md-12 text-center">
        </div>
        </div>









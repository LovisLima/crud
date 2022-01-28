<?php

include 'conexao.php';


$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset ="utf-8">
    <title>Formulario de Cadastro</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
          crossorigin="anonymous">

    <style type = "text/css" >
    #tamanhoContainer{
        width :500px;
    }
    #botao{
        background-color: #C24062; /*cor fundo*/
        color: #ffffff; /*cor letra*/
        font-weight: bold;
    }
    </style>
</head>
<body>
<div class ="container" id="tamanhoContainer" style= "margin-top:40px" >
    <h4>Formulario Cadastro</h4>
    <form  action ="_atualizarProduto.php" method= "post" style="margin-top: 20px">
        <?php
        $sql = "SELECT * FROM `estoque`  WHERE id_estoque = $id";
        $buscar = mysqli_query($conexao,$sql);
        while($array = mysqli_fetch_array($buscar)){
            $id_estoque = $array['id_estoque'];
            $nroproduto = $array['nroproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['fornecedor'];

        ?>
        <div class="form-group">
            <label >Nro Produto</label>
            <input type="number" class="form-control" name="nroproduto"  value="<?php echo $nroproduto ?>" disabled>
             <input type="number" class="form-control" name="id"  value="<?php echo $id ?>" style ="display: none;">

        </div>
        <div class="form-group">
            <label >Nome Produto</label>
            <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
        </div>

        <div class="form-group">
            <label >Categoria</label>
            <select class="form-control" name="categoria" >
                <option>Perifericos</option>
                <option>Hardware</option>
                <option>Softwares</option>
                <option>Celulares</option>
                <option>Headset</option>
            </select>
        </div>
        <div class="form-group">
            <label >Quantidade</label>
            <input type="number" class="form-control"  name ="quantidade" value ="<?php echo $quantidade ?>">
        </div>

        <div class="form-group" >
            <label >Fornecedor</label>
            <select class="form-control" name="fornecedor" >
                <option>Fornecedor A</option>
                <option>Fornecedor B</option>
                <option>Fornecedor C</option>
            </select>
        </div>
        <div style="text-align: right;" >
            <button type="submit" id=  "botao" class="btn btn-sm">Atualizar</button>
        </div>
        <?php } ?>
    </form>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

</body>
</html>



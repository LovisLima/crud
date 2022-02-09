<!DOCTYPE html>
<html>
<head>
    <meta charset ="utf-8">
    <title>Formulario de Cadastro</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
          crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/4c5260c39c.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" style ="margin-top: 40px; width:500px">
    <br>
<h3>Lista de Produtos</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nome Categoria</th>
            <th scope="col">Ação</th>
        </tr>
        </thead>


                <?php
                    include 'conexao.php';
                    $sql = "SELECT * FROM `categoria`";
                
                    $busca = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($busca)){
                    $id_categoria = $array['id_categoria'];
                    $nome_categoria= $array['categoria'];

                ?>
                    
                <td><?php echo $nome_categoria ?> </td>
                
                <td><a class="btn btn-warning btn-sm" href="editarCategoria.php?id=<?php echo
                $id_categoria ?>"role="button"><i class="far fa-edit"></i>&nbsp;&nbsp;Editar</a>


                <a class="btn btn-danger btn-sm" href="_deletarCategoria.php?id=<?php echo
                $id_categoria ?>"role="button"><i class="far fa-trash-alt"></i>&nbsp;&nbsp;Excluir</a></td>
                </td>

            </tr>
                <?php } ?>

    </table>

</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</body>
/<html>


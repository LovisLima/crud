<!DOCTYPE html>
<html>

<head>
    </html>
    <meta charset ="utf-8">
    <title>Formulario de Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">
        #tamanhoContainer{
            width:  500px;
        }

        #botao{
            background-color: #FD6E8A; 
            color: #ffffff; 
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class ="container" id = "tamanhoContainer" style="margin-top: 40px;">
        <h4>Formulario de Cadastro</h4>

        <form  action ="_inserirProduto.php" method= "post" style = "margin-top: 20px"; >
            <div class ="form-group">
                <label>Nro produto</label>
                <input type ="number" class ="form-control" name="nroproduto" placeholder ="Insira o numero do produto" required>
            </div>
            <div class = "form-group">
                <label>Nome produto</label>
                <input type ="text" class ="form-control" name ="nomeproduto" placeholder ="Insira o nome do produto required">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name ="categoria">

                  <?php
                  include 'conexao.php';
                  $sql = "SELECT * FROM categoria order by categoria ASC";
                  $buscar = mysqli_query($conexao, $sql);
                  
                  while ($array = mysqli_fetch_array ($buscar)) {

                      $id_categoria = $array ['id_categoria'];
                      $nome_categoria = $array['categoria'];


                  ?>
                  <option><?php echo $nome_categoria ?> </option>
                  
                  <?php } ?>

              </select>
          </div>
          <div class ="form-group">
            <label>Quantidade</label>
            <input type ="number" class ="form-control" name="quantidade" placeholder ="Insira o nome do produto" required>
        </div>
        <div class ="form-group">
             <label >Fornecedor</label>
                <select class="form-control" name="nome_fornecedor">
                <?php
                include 'conexao.php';
                $sql2 = "SELECT * FROM fornecedor";
                $buscar2 = mysqli_query($conexao,$sql2);

                while ($array2 = mysqli_fetch_array($buscar2)){

                    $id_fornecedor =$array2['id_fornecedor'];
                    $fornecedor=$array2['nome_fornecedor'];

                ?>
                  <option><?php echo $fornecedor ?></option>
                <?php } ?>  
                
              </select>
        </div>
        <div style="text-align: right;">
        <button type ="submit" id ="botao" class ="btn btn-sm">Cadastrar</button>
    </form>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
crossorigin="anonymous">

</div>


</body>
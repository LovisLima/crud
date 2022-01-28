<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <style type = "text/css" >
  #tamanhoContainer{
    width :500px;
  }
  #botao{

    color: #ffffff; /*cor letra*/
    font-weight: bold;
  }
</style>

</head>
<body>
  <div class="container" style="margin-top:100px">
   <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Adicionar Produto</h5>
          <p class="card-text">Opção para adicionar produtos no estoque.</p>
          <a href="adicionarProduto.php" id= "botao" class="btn btn-primary">Cadastrar Produto</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Lista de Produtos</h5>
          <p class="card-text">Visualizar, editar e excluir produtos.</p>
          <a href="listarProdutos.php" id = "botao" class="btn btn-primary">Produto</a>
        </div>
      </div>
      <br>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Adicionar Categoria</h5>
          <p class="card-text">Opção para adicionar nova Categoria.</p>
          <a href="adicionarCategoria.php" id= "botao" class="btn btn-primary">Cadastrar Categoria</a>
        </div>
      </div>
    </div>
     <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Adicionar Fornecedor</h5>
          <p class="card-text">Opção para adicionar novo Fornecedor.</p>
          <a href="adicionarCategoria.php" id= "botao" class="btn btn-primary">Cadastrar Fornecedor</a>
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
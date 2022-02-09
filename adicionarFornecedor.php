<!DOCTYPE html>
<html>
<head>
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


	
	<title>Adicionar Fornecedor</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

 <div class ="container"  style= "margin-top:40px; width: 500px;" >
  <h4>Cadastro Fornecedor</h4>
  <form action ="_inserirFornecedor.php" method="post" style="margin-top: 20px">
      <label>Fornecedor</label>
      <div class="form-group">
				<input type ="text" name="nome_fornecedor" class="form-control" placeholder="Digite o nome do Fornecedor" autocomplete="off">      	
      </div>
      <div style="text-align:right">
      	<button type ="submit" id = "botao" class="btn btn-sm">Cadastrar</button>
      </div>

      <div style = "text-align: right; margin-top: 10px">
         <a href ="index.php" role ="button" class ="btn btn-sm btn-primary">Voltar</a> 
       </div>

  </form>
</body>
</html>
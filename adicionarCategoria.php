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

<title>Menu</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <div class ="container"  style= "margin-top:40px; width: 500px;" >

    <h4>Cadastro Categoria</h4>
    <form action ="_inserirCategoria.php" method="post" style="margin-top: 20px">
      <label>Categoria</label>
      <div class="form-group">
        <label >Nome Categoria</label>
        <input type="text" class="form-control" name ="categoria" placeholder="Digite o nome da Categoria" autocomplete="off" required>

        <div style="text-align: right; margin-top: 20px " >
          <button type="submit" id ="botao" class="btn btn-sm">Cadastrar</button>
        </div>
        
        <div style = "text-align: right; margin-top: 10px">
         <a href ="index.php" role ="button" class ="btn btn-sm btn-primary">Voltar</a> 
       </div>

     </div>
   </form>
 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
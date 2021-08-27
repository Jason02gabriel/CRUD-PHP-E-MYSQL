<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Alteração de Cadastro</title>
    <style>
      body{
        color: white;
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(32,74,124,1) 48%, rgba(41,97,151,1) 63%, rgba(66,25,87,1) 78%, rgba(0,212,255,1) 100%);
      }
    </style>
  </head>
  <body>
    <?php 
    include "conexao.php";
    $id = $_GET['id'] ?? ' ';
    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";
    
    $dados = mysqli_query($conn , $sql);
    $linha =  mysqli_fetch_assoc($dados);
    ?>
    <div class ='container'>
      <div class = 'row'>
        <div class = 'col'>
            <h1>Casdastro</h1>
            <form action="edit_script.php" method="POST">
              <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control" name = 'nome' required value="<?php echo $linha['nome'];?>">
              </div>
              <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name = 'endereco' required value="<?php echo $linha['endereco'];?>">
              </div>
              <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name = 'telefone' required value="<?php echo $linha['telefone'];?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name = 'email' required value="<?php echo $linha['email'];?>">
              </div>
              <div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" class="form-control" name = 'data_nascimento' required value="<?php echo $linha['data_nascimento'];?>"> 
              </div>
              <br>
              <div class="form-group">
                <input type="submit" class="btn btn-success" value="salvar alterações">
                <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa'];?>">
              </div>
            </form>
              
            
        </div>
      </div>
    </div>
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php include ("../../includes/cabecalho/cabecalho.php"); ?>
  
  <body>    
    <?php include ("../../includes/navbar/menu.php"); ?>

  <div class="container">


    <div class="col-md-4"></div>
    <div class="col-md-4">
    <br><br>
      <h3><center>Olá viajante, insira seus dados para começarmos!</h3></center>
      <br>
      <form method="post" action="../model/registro.php" id="formCadastrarse" enctype = "multipart/form-data">
        <div class="form-group">
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="requiored">
        </div>


        <div class="form-group">
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
        </div>

        <button type="submit" class="btn btn-danger form-control">Acesse sua Jornada</button>
      </form>
    </div>
    <div class="col-md-4"></div>

    <div class="clearfix"></div>
    <br />
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>

  </div>


  </div>
</body>

</html>

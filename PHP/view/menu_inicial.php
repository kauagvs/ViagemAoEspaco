<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>


      </div>

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="view/inscrevase.php">Cadastre-se</a></li>
        <li class=" <?= $erro == 1 ? 'open' : '' ?> ">
          <a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
    <ul class="dropdown-menu" aria-labelledby="entrar">
      <div class="col-md-12">
          <p>Você possui uma conta?</h3>
          <br />
        <form method="post" action="model/validar_acesso.php" id="formLogin">
          <div class="form-group">
            <input type="text" class="form-control" id="campo_email" name="email" placeholder="E-mail" />
          </div>

          <div class="form-group">
            <input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
          </div>

          <button type="buttom" class="btn btn-danger" id="btn_login">Entrar</button>

        </form>
        <?php
        if ($erro ==1) {
          echo "Usuário ou Senha Invalido(s)";
        }
        ?>
      </form>
      </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

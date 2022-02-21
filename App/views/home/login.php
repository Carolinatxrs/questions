<!--Contenedor General-->
<div class="container">
  <?php
  if (!empty($data['messagem'])) {
    echo "<script>";
    foreach ($data['messagem'] as $m) {
      echo $m;
    }
    echo "</script>";
  }
  ?>
  <div class="row">
    <div class="col s8 offset-s2 m6 offset-m3 ">
      <div class="card center-align">
        <div class="card-image">
          <!-- https://blog.flaviarita.com/wp-content/uploads/2020/10/studying-concept-illustration_114360-1107.jpg 
        REAOLVER O TAMANHO DA IMAGEM NO CARD-->
          <img class="activator" src="https://dhg1h5j42swfq.cloudfront.net/2017/11/17031951/mas-30-cursos-onlie-gratuitos-diciembre.jpg">
        </div>
        <div class="card-tabs">
          <ul class="tabs tabs-fixed-width">
            <li class="tab"><a href="#test4"><span class="blue-text"><strong>Login</strong></span></a></li>
            <li class="tab"><a href="#test6"><span class="blue-text"><strong>Cadastre-se</strong></span></a></li>
          </ul>
        </div>
        <div class="card-content grey lighten-4">
          <div id="test4">
            <div class="row">
              <form action="/home/login" method="post" autocomplete="off">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input placeholder="exemplo@dominio.com" id="email" name="email" type="email" class="validate" required>
                  <label for="email">E-mail</label>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">lock_outline</i>
                  <input placeholder="Digite sua senha" id="senha" name="senha" type="password" class="validate" maxlength="20" required>
                  <a href="/home/redefinir" class="right">Esqueci minha senha</a>
                  <label for="senha">Senha</label>
                </div>

                <div>
                  <!--  -->
                  <button type="submit" class="waves-effect waves-light btn" name="entrar"><i class="material-icons right">arrow_forward</i>Entrar</button>
                </div>
              </form>
            </div>
          </div>
          <div id="test6">
            <div class="row">
              <form action="/users/cadastrar" method="post" autocomplete="off">
                <div class="input-field col s12">
                  <i class="material-icons prefix">create</i>
                  <input placeholder="Digite seu nome e sobrenome" id="nome" name="nome" type="text" class="validate" minlength="3" maxlength="50" title="Coloque no mínimo 3 letras." required>
                  <label for="nome">Nome</label>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input placeholder="exemplo@dominio.com" id="email" name="email" type="email" class="validate" required>
                  <label for="email">E-mail</label>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">lock_outline</i>
                  <input placeholder="Digite sua senha" id="senha" name="senha" type="password" class="validate" minlength="8" maxlength="20" title="Coloque no mínimo 8 caracteres" required>
                  <label for="senha">Senha</label>
                </div>
                <div>
                  <!--  -->
                  <button type="submit" class="waves-effect waves-light btn" name="cadastrar"><i class="material-icons right">arrow_forward</i>Cadastrar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
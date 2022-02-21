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
            <li class="tab"><a href="#test4"><span class="blue-text"><strong>Nova Senha</strong></span></a></li>
          </ul>
        </div>
        <div class="card-content grey lighten-4">
          <div id="test4">
            <div class="row">
              <form action="/home/password" method="post" autocomplete="off">
                <input id="email" name="email" type="hidden" value="<?php echo $_SESSION['email']; ?>">
                <div class="input-field col s12">
                  <i class="material-icons prefix">lock_outline</i>
                  <input placeholder="Digite sua nova senha" id="senha" name="senha" type="password" class="validate" minlength="8" maxlength="20" title="Coloque no mínimo 8 caracteres" required>
                  <label for="senha">Senha</label>
                </div>
                <div>
                  <button type="submit" class="waves-effect waves-light btn" name="enviar"><i class="material-icons right">arrow_forward</i>Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
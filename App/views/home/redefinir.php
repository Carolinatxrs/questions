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
            <li class="tab"><a href="#test4"><span class="blue-text"><strong>Redefinir Senha</strong></span></a></li>
          </ul>
        </div>
        <div class="card-content grey lighten-4">
          <div id="test4">
            <div class="row">
              <form action="/home/redefinir" method="post" autocomplete="off">
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input placeholder="exemplo@dominio.com" id="email" name="email" type="email" class="validate" required>
                  <label for="email">E-mail</label>
                </div>
                <div>
                  <button type="submit" class="waves-effect waves-light btn" name="buscar"><i class="material-icons right">arrow_forward</i>Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
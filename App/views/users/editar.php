<div class="container">
  <br>
  <?php
  if (!empty($data['messagem'])) {
    echo "<script>";
    foreach ($data['messagem'] as $m) {
      echo $m;
    }
    echo "</script>";
  }
  ?>
  <div class="section">
    <h3>Editar usuário</h3>
    <div class="row">
      <ul class="collection">
        <li class="collection-item">
          <form action="/users/editar/<?php echo $data['registros']['id']; ?>" method="post" class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <input id="nome" type="text" value="<?php echo $data['registros']['nome']; ?>" name="nome" readonly>
                <label for="nome">Título</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" value="<?php echo $data['registros']['email']; ?>" name="email" class="validate" required>
                <label for="email">E-mail</label>
              </div>
            </div>
            <div class="row">
              <button class="waves-effect waves-light btn" name="atualizar">Atualizar</button>
              <a class="waves-effect waves-light btn orange" href="/users/visualizar/<?php echo $data['registros']['id']; ?>">Cancelar</a>
            </div>
          </form>
        </li>
      </ul>
    </div>
  </div>
</div>
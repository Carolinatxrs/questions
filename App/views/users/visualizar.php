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
    <h3>Perfil do usuário</h3>
    <div class="row">
      <ul class="collection">
        <li class="collection-item"><strong>Nome: </strong> <?php echo $data['registros']['nome']; ?></li>
        <li class="collection-item"><strong>E-mail: </strong><?php echo $data['registros']['email']; ?></li>
        <li class="collection-item">
          <!-- Modal estrutura -->
          <div id="confirmacao-id- <?php echo $data['registros']['id']; ?>" class="modal">
            <div class="modal-content">
              <h4>Confirmação</h4>
              <p>Tem certeza que deseja excluir?</p>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
              <a class="waves-effect waves-light btn red" href="/users/remover/<?php echo $data['registros']['id']; ?>">Excluir</a><br>
            </div>
          </div>

          Deseja alterar seus dados ou excluir sua conta?
          <a class="waves-effect waves-light btn-small" href="/users/editar/<?php echo $data['registros']['id']; ?>">Editar</a>
          <a class="waves-effect waves-light btn-small modal-trigger red" href="#confirmacao-id- <?php echo $data['registros']['id']; ?>">Excluir</a>
        </li>
      </ul>
    </div>
  </div>
</div>
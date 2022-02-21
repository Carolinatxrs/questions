<div class="row container">
  <br>
  <?php
  $i = 0;
  if (!empty($data['messagem'])) {
    echo "<script>";
    foreach ($data['messagem'] as $m) {
      echo $m;
    }
    echo "</script>";
  }
  ?>
  <?php foreach ($data['registros'] as $question) { ?>
    <div class="row">
      <h3> <a href="/questios/visualizar/<?php echo $question['cod_q']; ?> "><?php echo $question['tema']; ?></a></h3>
      <p><?php echo $question['disciplina']; ?></p>
      <p><?php echo $question['ano']; ?></p>
      <p> <strong>Questão:</strong><?php echo $question['descricao']; ?></p>
      <p><strong>Opção a:</strong> <?php echo $question['op_a']; ?></p>
      <p><strong>Opção b:</strong> <?php echo $question['op_b']; ?></p>
      <p><strong>Opção c:</strong> <?php echo $question['op_c']; ?></p>
      <p><strong>Opção d:</strong> <?php echo $question['op_d']; ?></p>
      <p><strong>Opção e:</strong> <?php echo $question['op_e']; ?></p>
      <!-- Modal estrutura -->
      <div id="confirmacao-id- <?php echo $question['cod_q']; ?>" class="modal">
        <div class="modal-content">
          <h4>Confirmação</h4>
          <p>Tem certeza que deseja excluir?</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
          <a class="waves-effect waves-light btn red" href="/questios/remover/<?php echo $question['cod_q']; ?>">Excluir</a><br>
        </div>
      </div>

      <a class="waves-effect waves-light btn orange" href="/questios/editar/<?php echo $question['cod_q']; ?>">Editar</a>
      <a class="waves-effect waves-light btn modal-trigger red" href="#confirmacao-id- <?php echo $question['cod_q']; ?>">Excluir</a>
    </div>
  <?php } ?>
</div>
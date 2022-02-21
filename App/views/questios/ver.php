<div class="container">
  <br>
  <?php
  $i = 1;
  if (!empty($data['messagem'])) {
    echo "<script>";
    foreach ($data['messagem'] as $m) {
      echo $m;
    }
    echo "</script>";
  }
  ?>
  <div class="section">
    <h3>Visualizar questões</h3>
    <div class="row">
      <div class="divider"></div>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Tema</th>
            <th>Disciplina</th>
            <th>Questão</th>
            <th>Ano</th>
            <th>Ação</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($data['registros'] as $question) { ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $question['tema']; ?></td>
              <td><?php echo $question['disciplina']; ?></td>
              <td><?php echo $question['descricao']; ?></td>
              <td><?php echo $question['ano']; ?></td>
              <td>
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
                <!-- more -->
                <a class="waves-effect waves-light btn-small green" href="/questios/visualizar/<?php echo $question['cod_q']; ?> "><i class="material-icons" title="Visualizar Questão">more_horiz</i></a><br><br>
                <a class="waves-effect waves-light btn-small" href="/questios/editar/<?php echo $question['cod_q']; ?>"><i class="material-icons" title="Editar Questão">edit</i></a><br><br>
                <a class="waves-effect waves-light btn-small modal-trigger red" href="#confirmacao-id- <?php echo $question['cod_q']; ?>"><i class="material-icons" title="Remover Questão">delete</i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
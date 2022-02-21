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
    <h3>Editar questão</h3>
    <div class="row">
      <ul class="collection">
        <li class="collection-item">
          <form action="/questios/editar/<?php echo $data['registros']['cod_q']; ?>" method="POST" class="col s12" enctype="multipart/form-data">
            <div class="row">
              <div class="input-field col s12">
                <textarea id="trumbowyg-editor" class="materialize-textarea" name="descricao" placeholder="Digite a questão" required><?php echo $data['registros']['descricao']; ?></textarea>
                <label for="descricao">Descrição da questão</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="editor1" class="materialize-textarea" name="op_a" placeholder="Digite a alternativa A" required><?php echo $data['registros']['op_a']; ?></textarea>
                <label for="op_a">Opção A</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="editor2" class="materialize-textarea" name="op_b" placeholder="Digite a alternativa B" required><?php echo $data['registros']['op_b']; ?></textarea>
                <label for="op_b">Opção B</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="editor3" class="materialize-textarea" name="op_c" placeholder="Digite a alternativa C" required><?php echo $data['registros']['op_c']; ?></textarea>
                <label for="op_c">Opção C</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="editor4" class="materialize-textarea" name="op_d" placeholder="Digite a alternativa D" required><?php echo $data['registros']['op_d']; ?></textarea>
                <label for="op_d">Opção D</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="editor5" class="materialize-textarea" name="op_e" placeholder="Digite a alternativa E" required><?php echo $data['registros']['op_e']; ?></textarea>
                <label for="op_e">Opção E</label>
              </div>
            </div>
            <div class="row">
              <button class="waves-effect waves-light btn" name="atualizar">Atualizar</button>
              <a class="waves-effect waves-light btn orange" href="/questios/ver">Cancelar</a>
            </div>
          </form>
        </li>
      </ul>
    </div>
  </div>
</div>
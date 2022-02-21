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
    <h3>Cadastrar questão</h3>
    <div class="row">
      <ul class="collection">
        <li class="collection-item">
          <form action="/questios/cadastrar" method="POST" class="col s12" enctype="multipart/form-data">
            <div class="row">
              <div class="input-field col s12">
                <select name="tema" class="validate" required>
                  <option value="" disabled selected>Selecione o tema</option>
                  <option value="Linguagens, Códigos e suas Tecnologias">Linguagens, Códigos e suas Tecnologias</option>
                  <option value="Matemática e suas Tecnologias">Matemática e suas Tecnologias</option>
                  <option value="Ciências da Natureza e suas Tecnologias">Ciências da Natureza e suas Tecnologias</option>
                  <option value="Ciências Humanas e suas Tecnologias">Ciências Humanas e suas Tecnologias</option>
                </select>
                <label for="tema">Escolha o tema</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s10">
                <input id="disciplina" type="text" name="disciplina" class="validate" required>
                <label for="disciplina">Disciplina</label>
              </div>
              <div class="input-field col s2">
                <input id="ano" type="number" min="1999" max="2021" name="ano" class="validate" required>
                <label for="ano">Ano</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="trumbowyg-editor" class="materialize-textarea" name="descricao" placeholder="Digite a questão" title="Digite a questão" required></textarea>
                <label for="descricao">Descrição da questão</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="editor1" class="materialize-textarea" name="op_a" placeholder="Digite a alternativa A" required></textarea>
                <label for="op_a">Opção A</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="editor2" class="materialize-textarea" name="op_b" placeholder="Digite a alternativa B" required></textarea>
                <label for="op_b">Opção B</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="editor3" class="materialize-textarea" name="op_c" placeholder="Digite a alternativa C" required></textarea>
                <label for="op_c">Opção C</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="editor4" class="materialize-textarea" name="op_d" placeholder="Digite a alternativa D" required></textarea>
                <label for="op_d">Opção D</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="editor5" class="materialize-textarea" name="op_e" placeholder="Digite a alternativa E" required></textarea>
                <label for="op_e">Opção E</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <select name="resposta" class="validate" required>
                  <option value="" disabled selected>Selecione a resposta</option>
                  <option value=0>A</option>
                  <option value=1>B</option>
                  <option value=2>C</option>
                  <option value=3>D</option>
                  <option value=4>E</option>
                </select>
                <label for="resposta">Escolha a resposta</label>
              </div>
            </div>
            <div class="row">
              <button class="waves-effect waves-light btn" name="cadastrar">Cadastrar</button>
              <a class="waves-effect waves-light btn orange" href="/home/index">Cancelar</a>
            </div>
          </form>
        </li>
      </ul>
    </div>
  </div>
</div>
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
    <h3>Home</h3>
  </div>
  <div class="divider"></div>
  <div class="section">
    <h5>Sobre o ENEM</h5>
    <p>O Exame Nacional do Ensino Médio é uma prova de admissão à educação superior realizada pelo Instituto Nacional de Estudos e Pesquisas Educacionais Anísio Teixeira, autarquia vinculada ao Ministério da Educação do Brasil. Foi criada em 1998 inicialmente para avaliar a qualidade do ensino médio no país.</p>
  </div>
  <div class="divider"></div>
  <div class="section">
    <h5>Matrizes de Referência</h5>
    <p>Os participantes fazem provas de quatro áreas de conhecimento: </p>
    <ul>
      <ol>Linguagens, códigos e suas tecnologias;</ol>
      <ol>Ciências humanas e suas tecnologias;</ol>
      <ol>Ciências da natureza e suas tecnologias;</ol>
      <ol>Matemática e suas tecnologias</ol>
    </ul>

    <p> Para mais informações, acesse <a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem" target="_blank"><i class="material-icons left">open_in_new</i><strong>Enem — Inep</strong></a>.</p>
  </div>
</div>
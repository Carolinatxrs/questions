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
    <h3>Informações da questão</h3>
    <div class="row">
      <ul class="collection">
        <li class="collection-item center"><strong>Tema: </strong> <?php echo $data['registros']['tema']; ?></li>
        <li class="collection-item"><strong>Disciplina: </strong><?php echo $data['registros']['disciplina']; ?> <span class="right"><strong>Ano: </strong><?php echo $data['registros']['ano']; ?></span></li>
        <li class="collection-item"><strong>Questão: </strong><?php echo $data['registros']['descricao']; ?></li>
        <li class="collection-item"><strong>Alternativa A: </strong><?php echo $data['registros']['op_a']; ?></li>
        <li class="collection-item"><strong>Alternativa B: </strong><?php echo $data['registros']['op_b']; ?></li>
        <li class="collection-item"><strong>Alternativa C: </strong><?php echo $data['registros']['op_c']; ?></li>
        <li class="collection-item"><strong>Alternativa D: </strong><?php echo $data['registros']['op_d']; ?></li>
        <li class="collection-item"><strong>Alternativa E: </strong><?php echo $data['registros']['op_e']; ?></li>
      </ul>
    </div>
  </div>



</div>
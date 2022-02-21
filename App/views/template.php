<!-- menu -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo URL_BASE; ?>/materialize/css/materialize.min.css">
  <link type="text/css" rel="stylesheet" href="<?php echo URL_BASE; ?>/materialize/css/login.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>/dist/ui/trumbowyg.min.css">
  <!-- <link rel="stylesheet" href="<?php echo URL_BASE; ?>/dist/plugins/mathml/ui/trumbowyg.mathml.min.css"> -->
  <script type="text/javascript" src="<?php echo URL_BASE; ?>/materialize/js/materialize.min.js"></script>
  <title>ENEM Questions</title>
</head>

<body>

  <!-- <img src="<?php echo URL_BASE; ?>/images/mvc.png"> -->
  <?php if (isset($_SESSION['logado'])) { ?>
    <div class="navbar-fixed">
      <nav class="blue">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo">ENEM Questions</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger left">
            <i class="material-icons">menu</i>
          </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/">Home</a></li>
            <li><a href="/users/visualizar/<?php echo $_SESSION['userId']; ?>">Perfil</a></li>
            <li><a href="/questios/cadastrar">Cadastrar questão</a></li>
            <li><a href="/questios/ver">Visualizar questões</a></li>

            Olá, <?php echo $_SESSION['userNome']; ?>
            <li><a href="/home/logout">Logout</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- Menu mobile -->
    <ul class="sidenav" id="mobile-demo">
      <li><a href="/">Home</a></li>
      <li><a href="/users/visualizar/<?php echo $_SESSION['userId']; ?>">Perfil</a></li>
      <li><a href="/questios/cadastrar">Cadastrar questão</a></li>
      <li><a href="/questios/ver">Visualizar questões</a></li>
      <li><a href="/home/logout">Logout</a></li>
    </ul>
  <?php } ?>


  <?php require_once '../App/views/' . $view . '.php'; ?>


  <!--JavaScript at end of body for optimized loading-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
        }
      });
    });
  </script>
  <script src="//rawcdn.githack.com/RickStrahl/jquery-resizable/0.35/dist/jquery-resizable.min.js"></script>
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML"></script> -->
  <script src="<?php echo URL_BASE; ?>/dist/trumbowyg.min.js"></script>
  <script type="text/javascript" src="<?php echo URL_BASE; ?>/dist/langs/pt_br.min.js"></script>
  <script src="<?php echo URL_BASE; ?>/dist/plugins/upload/trumbowyg.upload.min.js"></script>
  <script src="<?php echo URL_BASE; ?>/dist/plugins/resizimg/trumbowyg.resizimg.min.js"></script>
  <!-- <script src="<?php echo URL_BASE; ?>/dist/plugins/mathml/trumbowyg.mathml.min.js"></script> -->
  <!-- inicialização de todos os js -->
  <script>
    M.AutoInit();
  </script>
  <!-- config do puglin de MathJax do editor -->
  <!-- <script>
    MathJax.Hub.Config({
      tex2jax: {
        inlineMath: [
          ['$', '$'],
          ['\\(', '\\)']
        ]
      }
    });
  </script> -->
  <!-- configuração do editor -->
  <script>
    $('#trumbowyg-editor, #editor1, #editor2, #editor3, #editor4, #editor5').trumbowyg({
      lang: 'pt_br',
      btns: [
        ['undo', 'redo'], // Only supported in Blink browsers
        ['strong', 'em'],
        ['superscript', 'subscript'],
        ['insertImage'],
        ['upload'],
        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['fullscreen']
      ],
      plugins: {
        upload: {
          serverPath: '<?php echo URL_BASE; ?>/dist/upload.php',
          fileFieldName: 'image',
          headers: {
            'Authorization': 'Client-ID xxxxxxxxxxxx'
          },
          urlPropertyName: 'file'
        },
        resizimg: {
          minSize: 64,
          step: 16,
        }
      },
      autogrow: true,
    });
  </script>
</body>

</html>
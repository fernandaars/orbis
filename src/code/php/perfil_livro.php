<?php 
include "../php/base_livros.php";
$b = new Base(5);
$l = $b->retornaLivroISBN($_GET['ISBN']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Orbis: Perfil do Livro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- styles -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <link href="../assets/css/colors.css" rel="stylesheet">
  <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="../assets/css/docs.css" rel="stylesheet">
  <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300|Open+Sans:400,300,300italic,400italic" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/color/success.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="../assets/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
  <header>
    <?php include("../html/menu.html"); ?>
  </header>
  <?php include("../html/pesquisa.html"); ?>

  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <?php 
            $path = "../../img/book_covers/".$l->getISBN().".jpg";
            echo "<img src='".$path."' class='img-fluid' alt='Responsive image'>";
        ?>
        <br>
      </div>
      <div class="span9">



        <!-- Download
        ================================================== -->
        <section id="general-template" class="doc">
          <div class="page-header first">
            <?php 
            echo "<h2><b>".$l->getTitulo()."<b></h2>";
            ?>
          </div>
          <?php
            echo "<p>".$l->getDescricao()."<b></h2>";
          ?>
        <h3>Faixa Etária:
        <?php
            switch ($l->getFaixa_Etaria()) {
              case 1:
                  echo "Livre";
                  break;
              case 2:
                  echo "Maiores de 6 anos";
                  break;
              case 3:
                  echo "Maiores de 10 anos";
                  break;
          }
        ?>
        </h3>
        <br>
        <?php
          echo "<li class='pink'><a href=abrir_livro.php?ISBN=".$l->getISBN()."><i class='icon-chevron-right'></i> Abrir</a></li>";
        ?>
          <li class="purple"><a href="#file-structure"><i class="icon-chevron-right"></i> Favoritar</a></li>
          <li class="turquoise"><a href="#contents"><i class="icon-chevron-right"></i> Avaliar</a></li>
          <li class="yellow"><a href="#html-template"><i class="icon-chevron-right"></i> Mais Informações</a></li>
          <li class="orange"><a href="#what-next"><i class="icon-chevron-right"></i> Livros Parecidos</a></li>
        </section>
      </div>
    </div>

  </div>

  <?php include("../html/footer.html"); ?>

  <script src="../assets/js/jquery-1.8.2.min.js"></script>
  <script src="../assets/js/jquery.easing.1.3.js"></script>
  <script src="../assets/js/google-code-prettify/prettify.js"></script>
  <script src="../assets/js/modernizr.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/jquery.elastislide.js"></script>
  <script src="../assets/js/jquery.prettyPhoto.js"></script>
  <script src="../assets/js/application.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="../assets/js/custom.js"></script>

</body>

</html>

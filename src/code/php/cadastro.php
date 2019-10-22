<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Orbis: Cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- styles -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
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
  <!-- =======================================================
    Theme Name: Scaffold
    Theme URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
  <header>
    <?php include("../html/menu.html"); ?>
  </header>

  <?php include("../html/pesquisa.html"); ?>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span4">
          <aside>
            <div class="widget">
              <h4 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapdown m-icon-white"></i></span>&nbsp;&nbsp;Cadastro</h4>
              <ul>
                <li><label><strong>O Cadastro é Simples </strong></label>
                  <p>Só precisamos de algumas informações.</p>
                </li>
                <li><label><strong>O Cadastro é Anônimo </strong></label>
                  <p>Seus dados e dos seu filho não serão divulgados.</p>
                </li>
                <li><label><strong>O Cadastro é Seguro </strong></label>
                  <p>Nenhuma informação particular será coletada.</p>
                </li>
              </ul>
            </div>
          </aside>
        </div>
        <div class="span8">
          <div class="well">
            <img src="../../img/family.jpg" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen>
          </div>
          <div class="spacer30"></div>

          <form action="action.php" method="post" role="form" class="form-inline">
            <div class="row">
              <div class="form-group">
                <input type="text" name="name" class="input-block-level" id="name" placeholder="Nome da Criança" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <br>
              <div class="form-group">
                <input type="email" class="input-block-level" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <br>
              <div class="form-group">
                <input type="password" class="input-block-level" name="email" id="password" placeholder="Senha" data-rule="password" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <br>
              <div class="form-group">
                <input type="text" class="input-block-level" name="age" id="age" placeholder="Idade da Criança"/>
                <div class="validation"></div>
              </div>
              <br>
              <div class="span8 form-group">
                  <label class="img_avatar">
                    <input type="radio" name="gato" value="small" checked>
                    <img src="../../img/avatars/avatar_gato.png">
                  </label>
                  <label class="img_avatar">
                    <input type="radio" name="raposa" value="small" checked>
                    <img src="../../img/avatars/avatar_raposa.png">
                  </label>
                  <label class="img_avatar">
                    <input type="radio" name="vaca" value="small" checked>
                    <img src="../../img/avatars/avatar_vaca.png">
                  </label>
                  <label class="img_avatar">
                    <input type="radio" name="pinguim" value="small" checked>
                    <img src="../../img/avatars/avatar_pinguim.png">
                  </label>
                  <label class="img_avatar">
                    <input type="radio" name="porco" value="small" checked>
                    <img src="../../img/avatars/avatar_porco.png">
                  </label>
                  <label class="img_avatar">
                    <input type="radio" name="panda" value="small" checked>
                    <img src="../../img/avatars/avatar_panda.png">
                  </label>
                  <label class="img_avatar">
                    <input type="radio" name="sapo" value="small" checked>
                    <img src="../../img/avatars/avatar_sapo.png">
                  </label>
                  <label class="img_avatar">
                    <input type="radio" name="test" value="small" checked>
                    <img src="../../img/avatars/avatar_urso.png">
                  </label>
                  <label class="img_avatar">
                    <input type="radio" name="coelho" value="small" checked>
                    <img src="../../img/avatars/avatar_coelho.png">
                  </label>
              </div>
              <div class="form-group">
                <div style="text-align: center;">
                  <button class="btn btn-big btn-success" type="submit">Cadastrar!</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer
 ================================================== -->
 <?php include("../html/footer.html"); ?>

  <script src="../assets/js/jquery-1.8.2.min.js"></script>
  <script src="../assets/js/jquery.easing.1.3.js"></script>
  <script src="../assets/js/google-code-prettify/prettify.js"></script>
  <script src="../assets/js/modernizr.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/jquery.elastislide.js"></script>
  <script src="../assets/js/jquery.prettyPhoto.js"></script>
  <script src="../assets/js/application.js"></script>
  <script src="../assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="../assets/js/portfolio/setting.js"></script>
  <script src="../assets/js/hover/jquery-hover-effect.js"></script>
  <script src="../assets/js/hover/setting.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="../assets/js/custom.js"></script>

</body>

</html>

<?php 
include "usuario.php";
$nome = $_POST['name'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$foto = null;
$u = new Usuario($nome, $email, $senha, $foto, $idade, null, null);
?>

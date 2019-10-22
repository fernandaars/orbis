<?php 
include "../php/base_livros.php";
$b = new Base(5);
$l = $b->retornaLivroISBN($_GET['ISBN'])
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
        <img src="../../img/book_covers/volta_ao_mundo_em_80_dias.jpg" class="img-fluid" alt="Responsive image">
        <ul class="nav nav-list bs-docs-sidenav">
          <li class="pink"><a href="#general-template"><i class="icon-chevron-right"></i> General</a></li>
          <li class="purple"><a href="#file-structure"><i class="icon-chevron-right"></i> File structure</a></li>
          <li class="turquoise"><a href="#contents"><i class="icon-chevron-right"></i> What's included</a></li>
          <li class="yellow"><a href="#html-template"><i class="icon-chevron-right"></i> HTML template</a></li>
          <li class="orange"><a href="#what-next"><i class="icon-chevron-right"></i> What next?</a></li>
        </ul>
      </div>
      <div class="span9">



        <!-- Download
        ================================================== -->
        <section id="general-template" class="doc">
          <div class="page-header first">
            <h2><b> por Julio Verne<b></h2>
          </div>
          <p>Phileas Fogg, um inglês pacato, calmo, metódico e solitário, cumpria todos os dias a mesma rotina. Misterioso, nunca compartilhava sua intimidade com ninguém. Mas tudo mudou quando apostou com alguns sócios do clube metade de sua fortuna, afirmando que daria a volta ao mundo em 80 dias! Era o ano de 1872, e ele e seu novo criado, Passepartout, embarcaram em uma aventura que nenhum dos dois imaginava como seria o seu fim!
          </p>
          <button type="button" class="btn btn-primary">Primary</button>
        </section>



        <!-- File structure
        ================================================== -->
        <section id="file-structure" class="doc">
          <div class="page-header">
            <h3>2. File structure</h3>
          </div>
          <p>Within the download you'll find the following file structure and contents, logically grouping common ../assets and providing both compiled and minified variations.</p>
          <p>Once downloaded, unzip the compressed folder to see the structure of (the compiled) Scaffold template. You'll see something like this:</p>
          <pre class="prettyprint">

  scaffold_template_v.1.0.0/
  ├── Template/
  |   ├── ../assets/
  │   │   ├── color/
  │   │   │   ├── orange.css
  │   │   ├── css/
  │   │   │   ├── bootstrap.css
  │   │   │   ├── bootstrap-responsive.css
  │   │   │   ├── docs.css
  │   │   │   ├── style.css
  │   │   ├── ico/
  │   │   │   ├── bootstrap.css
  │   │   │   ├── bootstrap-responsive.css
  │   │   │   ├── docs.css
  │   │   ├── img/
  │   │   │   ├── dummies/
  │   │   │   ├── icons/
  │   │   │   └── template images..
  │   │   └── js/
  │   │       ├── jquery.js
  │   │       ├── google-code-prettify/prettify.js
  │   │       ├── bootstrap.js
  │   │       └── custom.js
  │   │
  |   ├── index.html
  │   ├── index_alt1.html
  │   ├── index_alt2.html
  │   ├── overview.html
  │   ├── scaffolding.html
  │   ├── base-css.html
  │   ├── components.html
  │   ├── javascript.html
  │   ├── overview.html
  │   ├── portfolio-alt1-2cols.html
  │   ├── portfolio-alt1-3cols.html
  │   ├── portfolio-alt1-4cols.html
  │   ├── portfolio-alt2-2cols.html
  │   ├── portfolio-alt2-3cols.html
  │   ├── portfolio-alt2-4cols.html
  │   ├── portfolio-alt3.html
  │   ├── portfolio-detail.html
  │   ├── blog_left_sidebar.html
  │   ├── blog_right_sidebar.html
  │   ├── post_left_sidebar.html
  │   ├── post_right_sidebar.html
  │   ├── about.html
  │   ├── services.html
  │   ├── faq.html
  │   ├── fullwidth.html
  │   ├── pricing_table.html
  │   ├── 404.html
  │   └── contact.html
  │
  ├── PSD/
  │   ├── logo.psd
  │   └── .....psd
  │
  │
  └── Documentation/
      └── index.html [template documentation]

</pre>
          <p>This is the most basic form of Bootstrap: compiled files for quick drop-in usage in nearly any web project. We provide compiled CSS and JS (<code>bootstrap.*</code>), as well as compiled and minified CSS and JS (<code>bootstrap.min.*</code>).
            The image files are compressed using <a href="http://imageoptim.com/">ImageOptim</a>, a Mac app for compressing PNGs.</p>
          <p>Please note that all JavaScript plugins require jQuery to be included.</p>
        </section>



        <!-- Contents
        ================================================== -->
        <section id="contents" class="doc">
          <div class="page-header">
            <h3>3. What's included</h3>
          </div>
          <p>Scaffold template comes equipped with HTML, CSS, and JS for all sorts of things also some PSD elements with template documentation to guide you when use this template. Otherwise all things already summarized with a handful of categories visible
            at the top of the <a href="overview.html">Scaffold overview</a>.</p>

          <h5>Bootstrap and Scaffold overview</h5>
          <h6><a href="scaffolding.html">Scaffolding</a></h6>
          <p>Global styles for the body to reset type and background, link styles, grid system, and two simple layouts.</p>
          <h6><a href="base-css.html">Base CSS</a></h6>
          <p>Styles for common HTML elements like typography, code, tables, forms, and buttons. Also includes <a href="http://glyphicons.com">Glyphicons</a>, a great little icon set.</p>
          <h6><a href="components.html">Components</a></h6>
          <p>Basic styles for common interface components like tabs and pills, navbar, alerts, page headers, and more.</p>
          <h6><a href="javascript.html">JavaScript plugins</a></h6>
          <p>Similar to Components, these JavaScript plugins are interactive components for things like tooltips, popovers, modals, and more.</p>

          <h5>List of components</h5>
          <p>Together, the <strong>Components</strong> and <strong>JavaScript plugins</strong> sections provide the following interface elements:</p>
          <ul>
            <li>Button groups</li>
            <li>Button dropdowns</li>
            <li>Navigational tabs, pills, and lists</li>
            <li>Navbar</li>
            <li>Labels</li>
            <li>Badges</li>
            <li>Page headers and hero unit</li>
            <li>Thumbnails</li>
            <li>Alerts</li>
            <li>Progress bars</li>
            <li>Modals</li>
            <li>Dropdowns</li>
            <li>Tooltips</li>
            <li>Popovers</li>
            <li>Accordion</li>
            <li>Carousel</li>
            <li>Typeahead</li>
          </ul>
        </section>



        <!-- HTML template
        ================================================== -->
        <section id="html-template" class="doc">
          <div class="page-header">
            <h3>4. Basic HTML template</h3>
          </div>
          <p>With a brief intro into the contents out of the way, we can focus on putting Bootstrap to use. To do that, we'll utilize a basic HTML template that includes everything we mentioned in the <a href="#file-structure">File structure</a>.</p>
          <p>Now, here's a look at a <strong>typical HTML file</strong>:</p>
          <pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;
    &lt;script src="http://code.jquery.com/jquery-latest.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>
          <p>To make this <strong>a Bootstrapped template</strong>, just include the appropriate CSS and JS files:</p>
          <pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;link href="css/bootstrap.min.css" rel="stylesheet" media="screen"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;
    &lt;script src="http://code.jquery.com/jquery-latest.js"&gt;&lt;/script&gt;
    &lt;script src="js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>
          <p><strong>And you're set!</strong> With those two files added, you can begin to develop any site or application with Bootstrap.</p>
        </section>




        <!-- Next
        ================================================== -->
        <section id="what-next" class="doc">
          <div class="page-header">
            <h3>What next?</h3>
          </div>
          <p>Read scaffold documentation file that included in the download package and enjoy the template! For template support please send email via <a href="http://themeforest.net/user/iWebStudio">our profile contact form</a>.</p>
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

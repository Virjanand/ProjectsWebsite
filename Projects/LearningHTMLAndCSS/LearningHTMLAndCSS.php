<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Vir's Projects">
  <meta name="author" content="Virjanand Panday">

  <title>Projects</title>
  <link rel="shortcut icon" href="../../images/favicon.ico">

  <!-- Bootstrap Core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="../../assets/stylesheets/simple-sidebar.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Own CSS -->

  <link rel="stylesheet" href="../../assets/stylesheets/main.css">
</head>
<body>
  <div id="wrapper">
    <header class="container group">
      <section>
        <h1 class="logo">
          <a href="../../index.html">Vir's Projects</a>
        </h1>
        <a href="#menu-toggle" class="btn btn-default glyphicon
          glyphicon-menu-hamburger glyphicon-large" id="menu-toggle"></a>
      </section>

      <h3 class="tagline">Follow the wild plans I am concocting!</h3>
    </header>

    <!--Navigation -->
    <?php include("../../includes/navigation.html");?>

  <div class="container">
  <!--Learning HTML & CSS-->
  <h2>Learning HTML and CSS</h2>
  <p>Started: December 2015 <br />
    Following this roadmap: <br />
    <a href="http://www.webdesigndegreecenter.org/learn-to-code/">
      "Learn to code from scratch - A web development roadmap for beginners"</a><br />
    <ul>
      <li><a href="http://learn.shayhowe.com/html-css/">
        Learn to code HTML &amp; CSS by Shay Howe</a> <br />
        Started: 27 December 2015 <br />

      </li>
      <li><a href="https://www.codecademy.com/learn/web">
        Codecademy</a> <br />
        Started: 16 August 2015 <br />
        Finished: 31 August 2015
      </li>
    </ul>
  </p>
  <!--Specifications -->
        <h3>Specifications</h3>

        <p>Learning HTML and CSS will allow me to understand and debug websites
           created in, for example, Mendix, but also to create them from the
           ground up. Especially the CSS part will be useful when creating larger
           web applications. Eventually I want to include learning HTML5 games in
           this project.
           <br/>

           For next steps check the next steps below:
        </p>

  <!--Next steps -->
        <h3>Next steps</h3>

        <ul>
          <li><a href="http://learn.shayhowe.com/html-css/">
            Complete the tutorial by Shay Howe</a></li>
          <li>Find more resources on CSS and finish those</li>
          <li>Find more resources on HTML5 maybe with a focus on creating games
          </li>
        </ul>
        <br/>

  <!--Finished products -->
        <h3>Finished products</h3>

        <p>

          <ul>
            <li><a href="FinishedProducts/ShayHowe/styles-conference/index.html">
               Styles conference from tutorial by Shay Howe</a>
            </li>

          </ul>

        </p>
      </div>

    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>

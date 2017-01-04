<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vir's Projects">
    <meta name="author" content="Virjanand Panday">

    <title>Projects</title>
    <link rel="shortcut icon" href="images/favicon.ico">

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
          <a href="index.php">Vir's Projects</a>
        </h1>
        <a href="#menu-toggle" class="btn btn-default glyphicon
          glyphicon-menu-hamburger glyphicon-large" id="menu-toggle"></a>
      </section>

      <h3 class="tagline">Follow the wild plans I am concocting!</h3>
    </header>

    <!--Navigation -->
    <?php include("../../includes/navigation.html");?>


    <div class="container">
      <hr />
      <section class="image-me">This is me before chocolate: <br />
        <img src="../../images/virjanand.jpg" width="300" /> <br />
      </section>
      <section class="image-me">This is me after chocolate: <br />
        <img src="../../images/panda.jpg" width="300" /> <br />
      </section>


      <section class="video-me">Let's just say I like chocolate,<br />
        <iframe
         src="https://www.youtube.com/embed/OQCQnARnKbc" frameborder="0"
         allowfullscreen></iframe> <br />
      </section>

      <section class="video-me">but I still don't know what the fox says. <br />
        <iframe
        src="https://www.youtube.com/embed/jofNR_WkoCE"
        frameborder="0" allowfullscreen></iframe> <br />
      </section>

      <section class="end-note group">
        I'm learning how to align stuff with CSS! <br />
        So there is no more need for me to rickroll you
        <a href="https://www.youtube.com/watch?v=oHg5SJYRHA0">!</a>
      </section>
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

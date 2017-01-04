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
  <!--Learning Android -->
  <h2>Learning Android</h2>
  <p>Started: Feb 2016 <br />
    <ul>
      <li><a href="https://www.udemy.com/the-complete-android-developer-course/learn/#/">
        Udemy course by Rob Percival</a> <br />
        Started: 22 February 2016 <br />

      </li>
    </ul>
  </p>
  <!--Specifications -->
        <h3>Specifications</h3>

        <p>I am learing Android development to be able to make apps for my own
           phone and to brush up on my basic Java skills.
           <br/>

           For more specific goals check the next steps below:
        </p>

  <!--Next steps-->
        <h3>Next steps</h3>

        <ul>
          <li><a href="https://www.udemy.com/the-complete-android-developer-course/learn/v4/content">
            Complete the Android course on Udemy by Rob Percival</a></li>
        </ul>
        <br/>

  <!--Sources -->
        <h3>Finished products</h3>
        <p>

          <ul>
            <li><a href="FinishedProducts/GuessTheCelebrity.png">
                Guess the Celebrity</a> <br />
                Finished: 28 July 2016
            </li>
            <li><a href="FinishedProducts/BrainTrainer.png">
                Brain Trainer</a> <br />
                Finished: 14 June 2016
            </li>
            <li><a href="FinishedProducts/EggTimer/EggTimer.png">
                EggTimer</a> <br />
                Finished: 25 May 2016
            </li>
            <li><a href="FinishedProducts/Connect3/Connect3.png">
                Connect 3 (Tic tac toe)</a> <br />
                Finished: 21 March 2016
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

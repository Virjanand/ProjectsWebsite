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
  <!--Learning Unreal -->
  <h2>Learning Unreal</h2>
  <p>Started: May 2016 <br />
    <ul>
      <li><a href="https://www.udemy.com/unrealcourse/learn/v4/overview">
        Udemy course by Ben Tristem</a> <br />
        Started: 2 May 2016 <br />

      </li>
    </ul>
  </p>
  <!--Specifications -->
        <h3>Specifications</h3>

        <p>I am learning Unreal and C++ programming to eventually make games
           for virtual reality. The first steps are learning C++ and the Unreal
           Engine. Then slowly learn more about C++ and create a few games.
           <br/>

           For more specific goals check the next steps below:
        </p>

  <!--Next steps-->
        <h3>Next steps</h3>

        <ul>
          <li><a href="https://www.udemy.com/unrealcourse/learn/v4/overview">
            Complete the Learn to Code by Making Games course on Udemy by Ben Tristem</a></li>
        </ul>
        <br/>

  <!--Sources -->
        <h3>Finished products</h3>
        <p>

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

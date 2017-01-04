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
      <h2>What kind of person am I?</h2>
      <p>A friend once told me that he was no longer surprised by things
         I said, not because he expected me to say what I did, but because
         now he expects the unexpected from me. I liked that. It's important
         to me to do things differently. I enjoy surprising people and making
         myself think about alternative ways and ideas.
      </p>

      <h2>What can I do?</h2>
      <p>
        <ul>
          <li>Learn</li>
          <li>Teach</li>
          <li>Think</li>
          <li>Analyse</li>
          <li>Solve</li>
          <li>Reflect</li>
        </ul>
      </p>

      <h2>What do I need to perform optimally?</h2>
      <p>
        <ul>
          <li>Autonomy</li>
          <li>Input on or shared control over what I should be working on</li>
          <li>Control over how I work, e.g. some tasks I do best while
              distracted by watching TV shows or music, others require
              absolute silence, then some require me to talk to other people</li>
          <li>Challenging tasks interspersed with quickly completed tasks</li>
          <li>Colleagues (and supervisors) that try to understand what I say
              and discuss opposing ideas till resolution</li>
        </ul>
      </p>

      <h2>What do I want to do?</h2>
      <p>
        Ideally, I would work 3 days in a team of nice and smart people. Then
        have 4 days to learn and work on my own projects. Every day there should
        be enough time left to spend in a relaxed atmosphere with my wife
        and two children. I would prefer not to commute every day, but instead
        work from home and only travel after rush hour (by public transport) to
        attend important meetings. Most communication can be done over email or
        Skype. The work would be part solving difficult problems that require
        some research and some coding, part thinking about and improving work
        processes and part building an end product to show off how great the
        team is.
      </p>

      <h2>What jobs have I done?</h2>
      <p>
        <ul>
          <li>2015 - Present: Senior Mendix developer at Adoptiq</li>
          <li>2015 - 2015: Mendix consultant at Appronto</li>
          <li>2014 - 2015: Developer at NCIM</li>
          <li>2010 - 2014: PhD candidate at Free University of Amsterdam</li>
          <li>2008 - 2010: Physics teacher at secondary school</li>
        </ul>
      </p>

      <h2>What studies have I completed?</h2>
      <p>
        <ul>
          <li>2014 Java Associate and Programmer certificates</li>
          <li>2014 PhD thesis: Interaction between length and curvature in
              haptic shape perception</li>
          <li>2009 Master Physics teacher</li>
          <li>2009 Master Astrophysics</li>
          <li>2006 Bachelor Physics</li>
          <li>2006 Bachelor Mathematics</li>
          <li>2003 Master Biomedical Imaging</li>
          <li>2001 Bachelor Biomedical Engineering</li>
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

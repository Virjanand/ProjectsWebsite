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
  <!--Learning Webdevelopment-->
  <h2>Learning Webdevelopment</h2>
  <p>Started: December 2015 <br />
    <ul>
      <li><a href="https://www.udemy.com/complete-web-developer-course/learn/#/">
        Udemy course by Rob Percival</a> <br />
        Started: 1 January 2016 <br />

      </li>
    </ul>
  </p>
  <!--Specifications -->
        <h3>Specifications</h3>

        <p>Learning webdevelopment is an ongoing project to learn all the aspects
           of webdevelopment: from HTML and CSS, Javascript, PHP to Ruby on Rails
           and python with Django. In this project I will not go into details of
           each language or framework, but instead focus on the first step of each
           of these. If I decide to go deeper into one of the elements, as I have
           already done for HTML, CSS and Javascript, I will create separate
           learning projects for those.
           <br/>

           For next steps check the next steps below:
        </p>

  <!--Next steps -->
        <h3>Next steps</h3>

        <ul>
          <li><a href="https://www.udemy.com/complete-web-developer-course/learn/#/">
            Complete the Udemy course on webdevelopment by Rob Persival</a></li>
          <li><a href="https://www.udemy.com/web-developer-course/learn/#/">
            Complete the Udemy course on webdevelopment by Brad Hussey</a></li>
          <li><a href="https://www.udemy.com/the-complete-ruby-on-rails-developer-course/learn/#/">
            Complete the Udemy course on Ruby on Rails by Rob Persival</a></li>
          <li>Find a good tutorial on/introduction  Python</li>
          <li>Find a good tutorial on /introduction to Django</li>
        </ul>
        <br/>

  <!--Finished products -->
        <h3>Finished products</h3>

        <p>

          <ul>
            <li><a href="sources/UdemyRob/5_Bootstrap/landingPage.html">Created a
              landing page with bootstrap</a><br />
              Finished: 1 June 2016
            </li>
            <li><a href="sources/UdemyRob/4_jQuery/CodePlayer/index.html">
              HTML-CSS-(JS)-interpreter<a><br />
              Finished: 2 May 2016
            </li>
            <li><a href="sources/UdemyRob/3_Javascript/index.html">Reaction time
              game with javascript<a><br />
              Finished: 15 March 2016
            </li>
            <li><a href="sources/UdemyRob/2_CSS/bbc.html">Recreation of BBC with
              HTML and CSS</a><br />
              Finished: 3 March 2016
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

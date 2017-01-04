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
  <!--(Re)learning Mendix -->
        <h2>(Re)learning Mendix</h2>
        <p>Started: January 2016 <br />
           Paused: April 2016
          <ul>
            <li><a href="https://www.mendix.com/blog/creating-custom-widgets-mendix/">
              Mendix Widgets</a> <br />
              Started: 5 March 2016 <br />
              Paused: 15 April 2016
            </li>
            <li><a href="https://gettingstarted.mendixcloud.com/index.html">
              Mendix Introduction Course</a> <br />
              Started: 14 January 2016 <br />
              Finished: 4 March 2016
            </li>
            <li><a href="https://gettingstarted.mendixcloud.com/index.html">
              Mendix Getting Started</a> <br />
              Started: 11 January 2016 <br />
              Finished: 14 January 2016
            </li>
          </ul>
        </p>
  <!--Specifications -->
        <h3>Specifications</h3>

        <p>By (re)learning Mendix I want to be better able to do my job as a
           Mendix developer and in the future do complete projects in Mendix
           on my own.<br/>

           For more specific goals check the list below:
        </p>

        <p>
          <ul>
            <li>Basics of the modeler and the web portal</li>
            <li>How to build widgets in javascript and Adobe brackets</li>
            <li>How to customize syling</li>
            <li>How to optimize performance</li>
            <li>How to access the database with OQL</li>
            <li>Know how to use most modules/widgets in the app store</li>
          </ul>
        </p>

  <!--Story backlog -->
        <h3>Next steps</h3>

        <ul>
          <li>Follow the tutorial for widgets and follow up posts: <br />
            <a href="https://www.mendix.com/blog/creating-custom-widgets-mendix/">
              Creating custom widgets</a> <br />
              <a href="https://world.mendix.com/display/howto50/Custom+Widget+Development">
                Custom widget development</a> <br />
                <strong>First get basic JavaScript knowledge on a higher level</strong>
          </li>
          <li>Follow tutorial or webinar about styling.
          </li>
          <li>Follow tutorial or webinar about performance.
          </li>
          <li>Find tutorial or webinar about OQL.
          </li>
          <li>Play around with things found in the app store.
          </li>
        </ul>
        <br/>

  <!--Finished products -->
        <h3>Finished products</h3>

        <p>

          <ul>
            <li><a href="https://simplehrm131.mxapps.io/index.html">
                Human resources app</a> <br />
                Login required: not open for public. <br />
                Finished: 14 January 2016
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

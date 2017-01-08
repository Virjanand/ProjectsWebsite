<!DOCTYPE html>
<html>

<!--Header -->
<?php include("../../includes/header.html");?>

<body>
  <div id="wrapper">

    <!--Content Header -->
    <?php include("../../includes/content_header.html");?>

    <!--Navigation -->
    <?php include("../../includes/navigation.html");?>

<div class="container">
  <!--Learning Java -->
  <h2>Learning Java</h2>
  <p>Started: Apr 2016 <br />
    <ul>
      <li><a href="https://www.udemy.com/learn-java-by-building-projects/learn/v4/overview">
        Udemy course by Eduonix Learning Solutions</a> <br />
        Started: 13 Apr 2016 <br />

      </li>
    </ul>
  </p>
  <!--Specifications -->
        <h3>Specifications</h3>

        <p>I am learning Java, because it is one of the most widely used programming
           languages, especially in business applications. I have a long history
           with Java starting in 1998, but now I want to get a good grasp on this
           language and build some bigger applications with it.
           <br/>

           For more specific goals check the next steps below:
        </p>

  <!--Next steps-->
        <h3>Next steps</h3>

        <ul>
          <li><a href="https://www.udemy.com/learn-java-by-building-projects/learn/v4/overview">
            Complete the Projects in Java course on Udemy by Eduonix Learning Solutions</a></li>
          <li>Learn more on Java servlets</li>
          <li>Learn more on JDBC and databases</li>
          <li>Learn more on Java EE</li>
          <li>Develop a full fledged Java EE application</li>
        </ul>
        <br/>

  <!--Sources -->
        <h3>Finished products</h3>
        <p>

          <ul>
            <li><a href="FinishedProducts/AkkaProject.png">
                Akka project for calculating prime numbers with concurrent threads/actors</a> <br />
                Finished: 26 June 2016
            </li>
            <li><a href="FinishedProducts/DatabaseConnector.png">
                Database connector with select and update queries</a> <br />
                Finished: 11 June 2016
            </li>
            <li><a href="FinishedProducts/ChatServerAndClient.png">
                Chat Server and Client</a> <br />
                Finished: 25 May 2016
            </li>
            <li><a href="FinishedProducts/BlockBreaker.png">
                BlockBreaker game</a> <br />
                Finished: 7 May 2016
            </li>
            <li><a href="FinishedProducts/MediaPlayer.png">
                MediaPlayer</a> <br />
                Finished: 23 April 2016
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

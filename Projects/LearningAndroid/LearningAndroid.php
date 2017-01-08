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

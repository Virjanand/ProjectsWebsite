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
  <!--Learning Unity 3D -->
  <h2>Learning Unity 3D</h2>
  <p>Started: December 2015 <br />
    <ul>
      <li><a href="http://unity3d.com/learn/tutorials/projects/procedural-cave-generation-tutorial">
        Cave generator</a> <br />
        Started: 28 April 2016 <br />
        Finished: 6 July 2016
      </li>
      <li><a href="http://unity3d.com/learn/tutorials/projects/2d-roguelike-tutorial">
        Scavanger</a> <br />
        Started: 26 March 2016 <br />
        Finished: 27 April 2016
      </li>
      <li><a href="http://unity3d.com/learn/tutorials/projects/tanks-tutorial">
        Tanks</a> <br />
        Started: 3 March 2016 <br />
        Finished: 25 March 2016
      </li>
      <li><a href="http://unity3d.com/learn/tutorials/projects/mini-projects">
        Mini-projects</a> <br />
        Started: 27 January 2016 <br />
        Finished: 3 March 2016
      </li>
      <li><a href="http://unity3d.com/learn/tutorials/projects/survival-shooter-project">
        Survival shooter</a> <br />
        Started: 12 January 2016 <br />
        Finished: 27 January 2016
      </li>
      <li><a href="http://unity3d.com/learn/tutorials/projects/space-shooter-tutorial">
        Space shooter</a> <br />
        Started: 10 December 2015 <br />
        Finished: 12 January 2016
      </li>
      <li><a href="http://unity3d.com/learn/tutorials/projects/roll-ball-tutorial">
        Roll a ball</a> <br />
        Started: 7 December 2015 <br />
        Finished: 10 December 2015
      </li>
    </ul>
  </p>
  <!--Specifications -->
        <h3>Specifications</h3>

        <p>By learning Unity 3D I want to be able to implement game ideas
           and potentially work for a game company. Another goal is to learn
           C# and perhaps eventually how to create art work and music for games.
           <br/>

           For more specific goals check the next steps below:
        </p>

  <!--Next steps -->
        <h3>Next steps</h3>

        <ul>
          <li><a href="http://unity3d.com/learn/tutorials">
            Complete the Unity 3D tutorials</a></li>
          <li><a href="http://www.amazon.com/Introduction-Game-Design-Prototyping-Development/dp/0321933168/ref=pd_sim_14_2?ie=UTF8&dpID=51a1H7sco8L&dpSrc=sims&preST=_AC_UL160_SR118%2C160_&refRID=15W9NEMMK3HB1Y6X2MPP">
            Complete the Unity 3D book</a></li>
          <li><a href="http://docs.unity3d.com/Manual/index.html">
            Read the Unity 3D manual</a></li>
          <li>Recreate a simple game from the ground up</li>
          <li>Create a simple game I designed myself</li>
        </ul>
        <br/>

  <!--Finished products -->
        <h3>Finished products</h3>

        <p>

          <ul>
            <li><a href="FinishedProducts/CaveGeneration/CaveGeneration.html">
                Random cave generator</a> <br />
                Finished: 6 July 2016
            </li>
            <li><a href="FinishedProducts/Scavenger_WebPlayer/Scavenger_Android.apk">
                Scavanger game, avoid the zombies!(Android)</a> <br />
                Finished: 29 April 2016
            </li>
            <li><a href="FinishedProducts/Scavenger_WebPlayer/Scavenger_WebPlayer.html">
                Scavanger game, avoid the zombies!(Web, Firefox)</a> <br />
                Finished: 27 April 2016
            </li>
            <li><a href="FinishedProducts/Tanks_WebPlayer/Tanks_WebPlayer.html">
                Build a tanks multiplayer game(Web, Firefox)</a> <br />
                Finished: 25 March 2016
            </li>
            <li><a href="FinishedProducts/JewelMining_Web/JewelMining_Web.html">
                Build a jewel mining game using only Unity game objects(Web, Firefox)</a> <br />
                Finished: 3 March 2016
            </li>
            <li><a href="FinishedProducts/Breakout_WebPlayer/Breakout_WebPlayer.html">
                Build a breakout game using only Unity game objects(Web, Firefox)</a> <br />
                Finished: 15 February 2016
            </li>
            <li><a href="FinishedProducts/BasicPlatformer-Web/BasicPlatformer-Web.html">
                Simple platformer with some imported sprites (Web, Firefox)</a> <br />
                Finished: 8 February 2016
            </li>
            <li><a href="FinishedProducts/CouchWars-Web/CouchWars-Web.html">
                Adding multiplayer (one pc) to platformer (Web, Firefox)</a> <br />
                Finished: 30 January 2016
            </li>
            <li><a href="FinishedProducts/SurvivalShooter/SurvivalShooter_WebMine/SurvivalShooter_WebMine.html">
                Survival shooter (Web, Firefox)</a> <br />
                Finished: 27 January 2016
            </li>
            <li><a href="FinishedProducts/SpaceShooter/Space_Shooter_Android.apk">
                Space shooter (Android)</a> <br />
                Finished: 12 January 2016
            </li>
            <li><a href="FinishedProducts/SpaceShooter/Space_Shooter_Web.html">
                Space shooter (Web, Firefox)</a> <br />
                Finished: 12 January 2016
            </li>
            <li><a href="FinishedProducts/RollABall.app">
                Roll a ball (Mac)</a> <br />
                Finished: 10 December 2015
            </li>
            <li><a href="FinishedProducts/RollABall.zip">
                Roll a ball (PC)</a> <br />
                Finished: 10 December 2015
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

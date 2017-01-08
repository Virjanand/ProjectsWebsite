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
  <!--Learning Javascript -->
  <h2>Learning Javascript</h2>
  <p>Started: November 2015 <br />
    Following these two roadmaps: <br />
    <a href="http://code.tutsplus.com/tutorials/the-best-way-to-learn-javascript--net-21954">
      "The best way to learn Javascript"</a><br />
    <a href="http://sixrevisions.com/javascript/learning-javascript-for-free/">
      "A Roadmap to Learning JavaScript for Free"</a><br />
    <ul>
      <li><a href="http://eloquentjavascript.net/">
        Eloquent Javascript</a> <br />
        Started: 4 January 2016 <br />

      </li>
      <li><a href="https://www.codeschool.com/courses/javascript-road-trip-part-1">
        Codeschool</a> <br />
        Started: 27 December 2015 <br />
        Finished: 30 December 2015
      </li>
      <li><a href="https://www.codecademy.com/learn/javascript">
        Codecademy</a> <br />
        Started: 29 November 2015 <br />
        Finished: 27 December 2015
      </li>
    </ul>
  </p>
  <!--Specifications -->
        <h3>Specifications</h3>

        <p>Javascript is extremely versatile and widely used in both Mendix
           application and all other web applications. The goal is to be so
           confident in Javascript that I can solve problems by using Javascript.
           Eventually, it would be really cool to be able to create these data
           visualisation things and interactive maps. Then I will be satisfied...
           really I will be...
           <br/>

           For more specific goals check the next steps below:
        </p>

  <!--Next steps-->
        <h3>Next steps</h3>

        <ul>
          <li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide">
          MDN Javascript Guide</a></li>
          <li><a href="https://github.com/getify/You-Dont-Know-JS#you-dont-know-js-book-series">
          You don't know Javascript</a></li>
          <li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/A_re-introduction_to_JavaScript">
          A re-introduction to Javascript</a></li>
          <li><a href="http://bonsaiden.github.io/JavaScript-Garden/">
          Javascript Garden</a></li>
          <li><a href="http://bonsaiden.github.io/JavaScript-Garden/">
          Javascript Garden</a></li>
          <li><a href="http://shichuan.github.io/javascript-patterns/">
          Javascript Patterns</a></li>
          <li><a href="https://www.youtube.com/watch?v=v2ifWcnQs6M&list=PL5586336C26BDB324">
          Javascript Trilogy videos</a></li>
        </ul>
        <br/>

  <!--Finished products -->
        <h3>Finished products</h3>

        <p>

          When viewing the pages below, to see anything interesting open the
          developer tools and check the console.
          <ul>
            <li><a href="EloquentJavascript/_Introduction/index.html">
                Eloquent Javascript Introduction</a> <br />
            </li>
            <li><a href="EloquentJavascript/Ch1ValuesTypesOperators/index.html">
                Eloquent Javascript Ch1: Values, types, operators</a> <br />
            </li>
            <li><a href="EloquentJavascript/Ch2ProgramStructure/index.html">
                Eloquent Javascript Ch2: Program structure</a> <br />
            </li>
            <li><a href="EloquentJavascript/Ch3Functions/index.html">
                Eloquent Javascript Ch3: Functions</a> <br />
            </li>
            <li><a href="EloquentJavascript/Ch4DataStructures/index.html">
                Eloquent Javascript Ch4: Data structures</a> <br />
            </li>
            <li><a href="EloquentJavascript/Ch5HigherOrderFunctions/index.html">
                Eloquent Javascript Ch5: Higher order functions</a> <br />
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

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

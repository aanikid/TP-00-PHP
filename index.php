<?php
//include du ficher config
include_once('./config/config.php');
//include de header.php
include_once HEADER_PATH;
?>
<!--===============================================================================================================================-->





  <!-- 
        Gérer ici tous les elements a integrer avant de découper la page en component
        ex: header.php, footer.php
    -->


  <!-- header -->
  <header>
    <!-- navbar -->
    <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-light shadow">
      <a class="navbar-brand" href="#"> <img src="assets/img/newsup-logo.png" alt="logo"></a>
      <!-- toggle button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- end of toggle button -->
      <!-- navbar items -->
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto ">
          <a class="nav-link active " href="#">Acceuil<span class="sr-only">(current)</span></a>
          <a class="nav-link " href="#">Articles</a>
          <a class="nav-link" href="#">Inscription</a>
          <a class="nav-link" href="#">Login</a>
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </div>
      </div>
      <!-- end of navbar items -->
    </nav>
    <!-- end navbar -->


    <!-- image header -->
    <figure>
      <img src="assets/img/newsup-banner.jpg" alt="image article sur le covid">
    </figure>
    
    <!-- end image header -->

  </header>
  <!-- end header -->

  <!-- main -->
  <main>

    <!-- carousel -->
    <!-- end carousel -->

    <!-- exemple article -->
    <!-- end exemple article -->

    <!-- formulaire register -->
    <!-- end formulaire register -->

  </main>
  <!-- end of main -->

  <!-- footer -->
  <footer>



  </footer>
  <!-- end of footer -->


  <!-- JavaScript Bundle with Popper -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- perso Script app.js -->
  <script src="assets/javascript/app.js"></script>
</body>

</html>

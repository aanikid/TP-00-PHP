<!-- header component -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--  -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <!-- Bootstrap style -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Perso Style -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>TP-00</title>
</head>

<body>


  <!-- 
        Gérer ici tous les elements a integrer avant de découper la page en component
        ex: header.php, footer.php
    -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
      <a class="navbar-brand" href="#"> <img src="./assets/img/newsup-logo.png" alt="logo"></a>
      <!-- toggle button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- end of toggle button -->
      <!-- navbar items -->
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto ">
          <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
          <a class="nav-link " href="articles.php">Articles</a>
          <a class="nav-link" href="#inscription" data-toggle="collapse" data-target="#register">Inscription</a>
          <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Connexion</a>
        </div>
      </div>
      <!-- end of navbar items -->
    </nav>
    <!-- end navbar -->


  <!-- main -->
  <main>

<!-- header component -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/slick/slick-theme.css" />
  <!-- Bootstrap style -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Perso Style -->
  <link rel="stylesheet" href="assets/css/side-bar.css">

  <link rel="stylesheet" href="assets/css/style.css">

  <title>TP-00</title>
</head>

<body>

  <header id="main-header">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
      <a class="navbar-brand" href="index.php"> <img src="./assets/img/newsup-logo.png" alt="logo"></a>
      
      <!-- FLash Message -->
      <?php if (isset($_SESSION['flash'])) : ?>
        
          <div class="my-auto alert alert-<?= $_SESSION['flash']['type'] ?>">
            <?= $_SESSION['flash']['message'] ?>
          </div>
        
        <?php unset($_SESSION['flash']) ?>
      <?php endif ?>
      <!-- end Flash Message -->

      <!-- toggle button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- end of toggle button -->
      <!-- navbar items -->
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto ">
        <?php if (isset($_SESSION['admin']) AND $_SESSION['admin'] == true ) : ?>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">Dashbord</a>
          </li>
          <?php else : ?>
            <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
            <a class="nav-link " href="articles.php">Articles</a>
        <?php endif ?>
          <?php if (isset($_SESSION['user'])) : ?>
            <!-- Menu user si l'utilisateur identifié -->
            <li class="nav-item">
              <a class="nav-link" href="profil.php"><?= $_SESSION['user']->firstname ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="security/logout.php">Log out</a>
            </li>
          <?php else : ?>
            
            <a class="nav-link" href="register.php">Inscription</a>
            <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Connexion</a>
          <?php endif ?>
        </div>
      </div>
      <!-- end of navbar items -->
    </nav>
    <!-- end navbar -->

  </header>
  <!-- main -->

  <div class="main-containt">
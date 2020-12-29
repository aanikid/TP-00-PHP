<!-- header component -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


  <!-- header -->
  <header>
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


    <!-- image header -->

    <figure class="figure w-100">
      <img src="assets/img/newsup-banner.jpg" alt="image article sur le covid" class="figure-img img-fluid w-100">
    </figure>


    <!-- end image header -->

  </header>
  <!-- end header -->

  <!-- main -->
  <main>

    <!-- carousel -->

    <div class="card-carousel">
      <div class="my-card">
      <figure>
      <img src="../assets/img/newsup-article1.png" alt="chien avec un journal dans la bouche">
      </figure>
      <h2>fidèle à l'info plus que jamais</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel amet fuga aliquid id laborum cupiditate itaque vero rerum. In consequuntur officia, reprehenderit ad perferendis delectus? Nostrum ut dignissimos voluptatem magnam.</p>
        
      </div>

      <div class="my-card">
        <figure>
          <img src="../assets/img/newsup-article2.png" alt="deux hommes qui tiennent un journal">
        </figure>
        <h2>fidèle à l'info plus que jamais</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ex accusamus delectus aut corrupti doloribus ratione, esse laudantium quo facere non aperiam odio in deserunt cumque recusandae vitae temporibus asperiores!</p>
      </div>

      <div class="my-card">
        <figure>
          <img src="../assets/img/newsup-article3.png" alt="plusieurs écrans superposés">
        </figure>
        <h2>fidèle à l'info plus que jamais</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis perferendis neque, hic, veritatis vero possimus qui iure error, quos modi accusantium eligendi nobis aliquam praesentium iste consequatur ipsa asperiores nam.</p>
      </div>

      <div class="my-card">
        <figure>
          <img src="../assets/img/newsup-article1.png" alt="chien avec un journal dans la bouche">
        </figure>
        <h2>fidèle à l'info plus que jamais</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit reprehenderit ratione nisi dignissimos dolorem, laborum maxime alias. Laborum, incidunt. Velit dolores adipisci dolore odit asperiores aspernatur, eaque sed culpa? Incidunt!</p>
      </div>

      <div class="my-card">
        <figure>
          <img src="../assets/img/newsup-article3.png" alt="plusieurs écrans superposés">
        </figure>
        <h2>fidèle à l'info plus que jamais</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, atque. Ex, tempore! Labore tempora a hic ut quaerat sit minus dolore maxime, aut quisquam error fuga blanditiis explicabo voluptatem asperiores.</p>
      </div>
    </div>
    <!-- end carousel -->

    <!-- exemple article -->
    <figure>
      <img src="../assets/img/thumbnail.jpg" alt="plusieurs journaux à l'entrée d'une maison">
    </figure>
    <h2>fidèle à l'info plus que jamais</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quam repellat iure, porro perferendis assumenda incidunt unde eligendi voluptatum magni eos reiciendis error esse, iste reprehenderit quod odit asperiores saepe.Laboriosam laudantium minima voluptate officia rem facere assumenda at, cupiditate fugit dolorem omnis, optio iusto! Deleniti nobis itaque dignissimos? Optio eaque facilis distinctio praesentium et quisquam culpa id deleniti sed?</p>
    <!-- end exemple article -->

    <!-- formulaire register -->
    <!-- end formulaire register -->
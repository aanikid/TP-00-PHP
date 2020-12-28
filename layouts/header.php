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
    <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-light shadow">
    <a class="navbar-brand" href="#"> <img src="../assets/img/newsup-logo.png" alt="logo"></a>
      <!-- toggle button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- end of toggle button -->
      <!-- navbar items -->
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto ">
          <a class="nav-link active " href="#">Accueil<span class="sr-only">(current)</span></a>
          <a class="nav-link " href="articles.php">Articles</a>
          <a class="nav-link" href="#">Inscription</a>
          <a class="nav-link" data-toggle="modal" data-target="#loginModal">Connexion</a>
        </div>
      </div>
      <!-- end of navbar items -->
    </nav>
    <!-- end navbar -->


    <!-- image header -->
    <figure>
      <img src="../assets/img/newsup-banner.jpg" alt="image article sur le covid">
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
      <img src="../assets/img/newsup-article1.png" alt="">
      </figure>
      <h2>fidèle à l'info plus que jamais</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel amet fuga aliquid id laborum cupiditate itaque vero rerum. In consequuntur officia, reprehenderit ad perferendis delectus? Nostrum ut dignissimos voluptatem magnam.</p>
        
      </div>
      
      <div class="my-card">
        <figure>
          <img src="../assets/img/newsup-article3.png" alt="">
        </figure>
        <h2>fidèle à l'info plus que jamais</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ex accusamus delectus aut corrupti doloribus ratione, esse laudantium quo facere non aperiam odio in deserunt cumque recusandae vitae temporibus asperiores!</p>
      </div>
      
      <div class="my-card">
        <figure>
          <img src="../assets/img/newsup-article1.png" alt="">
        </figure>
        <h2>fidèle à l'info plus que jamais</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis perferendis neque, hic, veritatis vero possimus qui iure error, quos modi accusantium eligendi nobis aliquam praesentium iste consequatur ipsa asperiores nam.</p>
      </div>

      <div class="my-card">
        <figure>
          <img src="../assets/img/newsup-article2.png" alt="">
        </figure>
        <h2>fidèle à l'info plus que jamais</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit reprehenderit ratione nisi dignissimos dolorem, laborum maxime alias. Laborum, incidunt. Velit dolores adipisci dolore odit asperiores aspernatur, eaque sed culpa? Incidunt!</p>
      </div>

      <div class="my-card">
        <figure>
          <img src="../assets/img/newsup-article3.png" alt="">
        </figure>
        <h2>fidèle à l'info plus que jamais</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, atque. Ex, tempore! Labore tempora a hic ut quaerat sit minus dolore maxime, aut quisquam error fuga blanditiis explicabo voluptatem asperiores.</p>
      </div>
    </div>
    <!-- end carousel -->

    <!-- exemple article -->
    <!-- end exemple article -->

    <!-- formulaire register -->
    <!-- end formulaire register -->




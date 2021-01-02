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

    <title>TP-00</title>
</head>

<body>

    <div class="d-flex collapse show" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Start Bootstrap </div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle" data-toggle="collapse" href="#sidebar-wrapper" role="button" aria-expanded="false" aria-controls="sidebar-wrapper">Toggle Menu</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto ">
                        <?php if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) : ?>
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
            </nav>

            <div class="container-fluid">
                <h1 class="mt-4">Simple Sidebar</h1>
                <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

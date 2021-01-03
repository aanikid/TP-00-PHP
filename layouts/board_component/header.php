<!-- page de l'admin article -->
<?php
include_once "config/config.php";
include_once "config/db_connect.php";

include_once HEADER_PATH;
//requête HTTP en methode GET = renvoie sur la page index
?>
<div class="row mt-lg-5">
    <div class="d-flex mt-lg-3" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-center bg-dark">
                <h2 class="text-primary my-auto">Dashbord</h2>
            </div>
            <!-- photo de profil -->
            <div class="profil-img border rounded-circle mx-auto my-2" style="height: 150px; width:70%;">

            </div>
            <!-- nom et prenom de la personne --> 
            <div class="row justify-content-center align-items-center">
            <i class="fas fa-user-tie border rounded-circle p-1 mb-2" style="color: #007bff; font-size:19px;"></i>
            <h4 class="text-center ml-1"><?= $_SESSION['user']->firstname . " " . $_SESSION['user']->lastname ?></h4>
            </div>
            <div class="list-group list-group-flush ">
            <!-- dropdown article menu -->
                <div class="dropdown border-0">
                    <a class="list-group-item list-group-item-action bg-light dropdown-toggle" href="#" role="button" id="articleDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Articles
                    </a>
                    <div class="dropdown-menu" aria-labelledby="articleDrop">
                        <a class="dropdown-item" href="#">Tous les articles</a>
                        <a class="dropdown-item" href="dashboard_create.php">Crée un article</a>
                        <a class="dropdown-item" href="#">Modifier un article</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- //ici rendre dynamique les page -->
        <div class="container-fluid mt-4">
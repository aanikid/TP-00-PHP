<?php
include_once "config/config.php";
include_once "config/db_connect.php"; 

//Check user session
//on redirige l'utilisateur si celui-ci n'est pas identifié
if(!isset($_SESSION['user']))
{
    header("location: index.php");
    exit;
}
include_once SECURITY_REGISTER;
include_once HEADER_PATH 
?>
<!-- ============================================================= -->
<?php include_once INDEX_COMPONENT_BANNER ?>
<div class="container mt-lg-5">
<h2>PROFIL</h2>
<h4>Qui suis je ?</h4>
<p>je suis <?= $_SESSION['user']->firstname ?></p>
</div>
<!-- remplacer le contenu ci-dessous par la page profil utilisateur -->
<!-- ============================================================= -->
<?php include_once FOOTER_PATH ?>
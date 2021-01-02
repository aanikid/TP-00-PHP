<!-- page de l'admin article -->
<?php
include_once "config/config.php";
include_once "config/db_connect.php";

include_once HEADER_PATH;
//requête HTTP en methode GET = renvoie sur la page index
?>
<div class="row mt-lg-5">
<div class="d-flex collapse show mt-lg-3" id="wrapper">
<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Dashbord</div>
    <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Articles</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
    </div>
</div>
<!-- /#sidebar-wrapper -->

</div>
</div>


<?php include_once FOOTER_PATH; ?>
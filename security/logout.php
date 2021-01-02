<!-- logout component -->
<?php

//demmarage de session
session_start();

//Destruction de session
session_destroy();

//demmarage de session
session_start();

//Message Flash : confirmation de deconnexion
$_SESSION['flash'] = [
    'type' => "info",
    'message' => "Vous avez été déconnecté."
];

//Redirection vers Homepage
header("location: ../index.php");
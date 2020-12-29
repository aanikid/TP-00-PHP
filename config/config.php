<!-- ici la config de notre site -->
<?php 


// On force l'affichage des messages d'erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//chemin des fichier LAYOUTS
const HEADER_PATH = "layouts/header.php";
const FOOTER_PATH = "layouts/footer.php";
const LOGIN_MODAL_PATH = "layouts/modal.php";

//chemlin des index component
const INDEX_COMPONENT_BANNER = "layouts/index_component/banner.php";
const INDEX_COMPONENT_CAROUSEL = "layouts/index_component/carousel.php";
const INDEX_COMPONENT_REGISTER = "layouts/index_component/register.php";
// Month definition
$month_text =["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

// Current date
$current_year = date("Y");

// Database
//--
//Definie le type de SGBD (mysql, postgresql, oracle)
$db_type = "mysql";

//Definie l'adresse du serveur SQL
$db_host =  "127.0.0.1";

//Definie le Nom d'utilisateur de la BDD
$db_user = "root";

//Definie le mot de passe de l'utilisateur de la BDD
$db_pass = "";

// Definie le nom de la base de données (dbschema, dbname)
$db_schema = "cours_discotheque";

//Infos facultatives

//Defini le numéro du port de la bdd
$db_port= "3306";

// Definie le jeu de caractères utilisé pour les requêtes
$db_charset = "utf8";
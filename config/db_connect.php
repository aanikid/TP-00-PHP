<!-- connection a la base de donnés -->
<?php
//Definition de la DSN
$db_dsn = $db_type . ":";
$db_dsn.= "host=". $db_host .";";
$db_dsn.= "dbname=" . $db_schema . ";";
$db_dsn.= "port= " . $db_port . ";";
$db_dsn.= "charset=". $db_charset . ";";

//Connexion à la BDD
try{
    //on instancie l'objet BDO
    $pdo = new PDO($db_dsn, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Echec de connexion :" . $e -> getMessage();
    die();
}
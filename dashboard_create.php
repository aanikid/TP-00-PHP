<?php include_once "config/config.php";?>
<?php include_once "config/db_connect.php";?>

<!--=============================================================================================================================== -->
<?php
// Définition du tableau d'erreurs
$errors = [];

//verification du form
if ( $_SERVER['REQUEST_METHOD'] === "POST" )
{
    $isValid = true;
    $_SESSION["data"] = [];


    // 1. Recup des données

    // recup du titre
    $title = isset($_POST['title']) ? $_POST['title'] : null;
    $_SESSION['data']['title'] = $title;
    
    // recup de l'auteur
    $createdBy = isset($_POST['createdBy']) ? $_POST['createdBy'] : null;
    $_SESSION['data']['createdBy'] = $createdBy;
    
    // recup de la date
    $createdAt = isset($_POST['createdAt']) ? $_POST['createdAt'] : null;
    $_SESSION['data']['createdAt'] = $createdAt;
    
    // recup du contenu
    $content = isset($_POST['content']) ? $_POST['content'] : null;
    $_SESSION['data']['content'] = $content;

    // 2. Controle des données
    if (empty($title))
    {
        $isValid = false;
        $errors['title'] = "Erreur sur le champ titre";
    }

    if (empty($createdBy))
    {
        $isValid = false;
        $errors['createdBy'] = "Erreur sur le champ auteur";
    }

    if (!preg_match("^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$",$createdAt))
    {
        $isValid = false;
        $errors['createdAt'] = "Erreur sur la date";
    }
    if (empty($errors)) {
        //Définition de la requete SQL
        $sql = "INSERT  INTO articles
            (`titre`, `contenu`, `createdBy`, `createdAt`)
        VALUES 
            (:titre,:contenu,:createdBy,:createdAt)";

        //préparation de la requete pour PDO
        $query = $pdo->prepare($sql);

        //Définition des paramètres de requete
        $query->bindParam(':titre', $title, PDO::PARAM_STR);
        $query->bindParam(':contenu', $content, PDO::PARAM_STR);
        $query->bindParam(':createdBy', $createdBy,PDO::PARAM_STR);
        $query->bindParam(':createdAt', $createdAt, PDO::PARAM_STR);


        //Execution de la requête
        $query->execute();
        //Test la validité de la requête
        $id = $pdo->lastInsertID();
        if ($id > 0) {
            //Flash Message register success
            $_SESSION['flash'] = [
                'type' => "success",
                'message' => "Félicitation $createdBy, votre article à été créé !"
            ];
            header('location: dashboard.php');
                exit;
        }
    }
}



include_once DASHBOARD_HEADER; ?>
<!--===============================================================================================================================-->

<!-- form de creation d'article -->

<form action="" method="post">
    <div class="d-flex justify-content-around mb-2">
        <label for="title">titre de l'article</label>
        <input type="text" id="title" name="title"  size=80  placeholder="titre de l'article">
        <label for="createdBy">auteur de l'article</label>
        <input type="text" id="createdBy" name="createdBy" placeholder="auteur de l'article" >
        <label for="createdAt"> date de création</label>
        <input type="text" id="createdAt" name="createdAt" placeholder="XX/XX/XXXX" >
    </div>

    <textarea id="content" name="content" rows="20" cols="200" placeholder="contenu de l'article"></textarea>

    <input type="submit" class="btn btn-primary btn-lg btn-block">
</form>

<!--===============================================================================================================================-->
<?php include_once DASHBOARD_FOOTER;?> 
<?php include_once FOOTER_PATH;?> 

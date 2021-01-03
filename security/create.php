<?php
// Définition du tableau d'erreurs
$errors = [];

//verification du form
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $isValid = true;
    $_SESSION["data"] = [];


    // 1. Recup des données

    // recup du fichier
    $illustration = isset($_POST['illustration']) ? $_POST['illustration'] : null;
    $_SESSION['data']['illustration'] = $illustration;

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

    $folder = 'assets/articles_img/';
    $illustration = basename($_FILES['illustration']['name']);
    $maxSize = 10000000;
    $size = filesize($_FILES['illustration']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
    $extension = strrchr($_FILES['illustration']['name'], '.'); 
    //Début des vérifications de sécurité...
    if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
    {
        $errors = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
    }
    if($size>$maxSize)
    {
        $errors = 'Le fichier est trop gros...';
    }
        //On formate le nom du fichier ici...
        $illustration = strtr($illustration, 
            'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
            'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
        $illustration = preg_replace('/([^.a-z0-9]+)/i', '-', $illustration);

    if (empty($title)) {
        $isValid = false;
        $errors['title'] = "Erreur sur le champ titre";
    }

    if (empty($createdBy)) {
        $isValid = false;
        $errors['createdBy'] = "Erreur sur le champ auteur";
    }

    if (!preg_match("#^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])$#", $createdAt)) {
        $isValid = false;
        $errors['createdAt'] = "Erreur sur la date";
    }
    if (empty($errors)) {
        move_uploaded_file($_FILES['illustration']['tmp_name'], $folder . $illustration);
        //Définition de la requete SQL
        $sql = "INSERT  INTO articles
            (`titre`, `contenu`, `illustration`, `createdBy`, `createdAt`)
        VALUES 
            (:titre,:contenu,:illustration,:createdBy,:createdAt)";

        //préparation de la requete pour PDO
        $query = $pdo->prepare($sql);

        //Définition des paramètres de requete
        $query->bindParam(':titre', $title, PDO::PARAM_STR);
        $query->bindParam(':titre', $title, PDO::PARAM_STR);
        $query->bindParam(':contenu', $content, PDO::PARAM_STR);
        $query->bindParam(':illustration', $illustration, PDO::PARAM_STR);
        $query->bindParam(':createdBy', $createdBy, PDO::PARAM_STR);
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
        } else {
            $_SESSION['flash'] = [
                'type' => "danger",
                'message' => "Une erreurs est survenue lors de l'envoie !"
            ];
        }
    }
};
?>
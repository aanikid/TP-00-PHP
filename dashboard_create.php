<?php include_once "config/config.php"; ?>
<?php include_once "config/db_connect.php"; ?>

<!--=============================================================================================================================== -->
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

    $folder = 'assets/img/';
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

    if (!preg_match("^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$^", $createdAt)) {
        $isValid = false;
        $errors['createdAt'] = "Erreur sur la date";
    }
    if (empty($errors)) {
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
}



// include_once DASHBOARD_HEADER; ?>
<!--===============================================================================================================================-->

<!-- form de creation d'article -->

<div class="container">
    <div class="row">
        <div class="col-12">
        <h2 class="text-primary text-center mb-lg-5">Création d'un article</h2>
        </div>

        <form action="" method="post" action="upload.php" enctype="multipart/form-data">
            <div>
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                Illustration (max 10Mo) : <input type="file" name="illustration" id="illustration">
            </div> 
            <div class="row">
                <div class="col-md-6">
                    <div class="form-groupe">
                        <label for="title" class="sr-only">titre de l'article</label>
                        <input type="text" id="title" name="title" class="form-control" size=80 placeholder="titre de l'article">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="createdBy" class="sr-only">auteur de l'article</label>
                        <input type="text" id="createdBy" class="form-control" name="createdBy" placeholder="auteur de l'article">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="createdAt" class="sr-only"> date de création</label>
                <input type="text" id="createdAt" class="form-control" name="createdAt" placeholder="date de création de l'article (DD/MM/YYYY)">
            </div>

            <div class="form-group">
                <textarea id="content" name="content" class="form-control" rows="20" cols="120" placeholder="contenu de l'article"></textarea>
            </div>

            <input type="submit" class="btn btn-primary btn-lg btn-block">
        </form>
    </div>
</div>

<!--===============================================================================================================================-->
<?php include_once DASHBOARD_FOOTER; ?>
<?php include_once FOOTER_PATH; ?>
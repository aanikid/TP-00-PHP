<!-- registrer component -->
<?php
//Si le formulaire est envoyé 
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    //tableau error
    $errors = [];

    //retrieve data 
    $firstname      = $_POST['firstname'] ?? null;
    $lastname       = $_POST['lastname'] ?? null;
    $email          = $_POST['email'] ?? null;
    $birth_day      = $_POST['birth']['day'] ?? null;
    $birth_month    = $_POST['birth']['month'] ?? null;
    $birth_year     = $_POST['birth']['year'] ?? null;
    $plain_password = $_POST['password'] ?? null;
    $confirmation_password = $_POST['password_confirm'] ?? null;
    $agreeTerms = isset($_POST['agreeTerms']) ?? null;

    //calcule de l'age de l'ux
    $d1 = new DateTime("$birth_year-$birth_month-$birth_day 00:00:00");
    $d2 = new DateTime( date("Y-m-d H:i:s"));
    $diff = $d2->diff($d1);
    $age = $diff->y;

    //Generate screenname ex: (John D.)
    $screename = $firstname . " " . strtoupper($lastname[0]) . ".";
    
    //Generate password hash
    $crypted = password_hash($plain_password, PASSWORD_BCRYPT);

            // 2. Check from data
        // --

        // Firstname
        if(!preg_match("/^[a-z-]+$/i", $firstname))
        {
            // $isValid = false;
            $errors['firstname'] = "Le prénom est invalide";
        }

        //lastname
        if(!preg_match("/^[a-z-]+$/i", $lastname))
        {
            // $isValid = false;
            $errors["lastname"] = "le nom est invalide";
        }

        //checkdate
        if (!checkdate($birth_month, $birth_day, $birth_year))
        {
            // $isValid = false;
            $errors['birthday'] = "Date invalide";
        }

        //si l'age  est inferieur a 13ans
        else if ($age < 13)
        {
            // $isValid = false;
            $errors['birthday'] = "Trop jeune !";
        }

        //email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            // $isValid = false;
            $errors['email'] = "Email invalide";
        }

            // Password : min 4 caractères, 1 alpha + 1 numerique
        if (!preg_match("/^(?=.*[A-Za-z])(?=.*\\d)[A-Za-z\\d^a-zA-Z0-9].{4,}$/i", $plain_password))
        {
            // $isValid = false;
            $errors['password'] = "Mot de passe invalide";
        }

        // Password Confirmation : doit etre identique à password
        if ($confirm_password != $plain_password)
        {
            // $isValid = false;
            $errors['confirmation'] = "Les mots de passe ne correspondent pas";
        }

        // Agree Terms : Obligatoire 
        if (!$agreeTerms)
        {
            // $isValid = false;
            $errors['agreeTerms'] = "Vous devez accepter les CGU";
        }

        //Test l'existence de l'ux en BDD
        $sql = "SELECT id FROM user WHERE email=:email";
        $query = $pdo->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();

        $user = $query->fetchALL(PDO::FETCH_OBJ);
        
}
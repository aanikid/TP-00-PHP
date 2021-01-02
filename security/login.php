<!-- login component -->
<?php
include_once "../config/config.php";
include_once "../config/db_connect.php";

//requête HTTP en methode POST = Traitement du formulaire
if($_SERVER['REQUEST_METHOD'] === "POST")
{
    //Objectif: Recup de l'id, screename et emial de l'utilisateur et stoker dans la $_SESSION
    //--------------------------------------------------------------------------

    // 1.Recup des données du formulaire
    //--
    // Objectif : Recup une valeur (peut importe la valeur) ou null

    //login(email)
    $login = $_POST['login'] ?? null;
    //password
    $plain_password = $_POST['password'] ?? null;

    //2. Controlle des données
    //--

    //Aucun controlle à affectuer

    //3. Recupe de l'utilisateur dans la BDD
    //--
    $sql = "SELECT id, firstname, lastname, email, isAdmin, password FROM users WHERE email=:email";
    $query = $pdo->prepare($sql);

    $query->bindParam(":email", $login, PDO::PARAM_STR);
    $query->execute();

    $user = $query->fetch(PDO::FETCH_OBJ);
    
    if($user){
        //4. Verification DU MDP
        //--
        //recuperation de la valeur de isAdmin dans l'objet $user
        $admin = $user->isAdmin;
        //recuperation du firstname dans l'objet $user
        $firstname = $user->firstname;
        //recuperation du lastname dans l'objet $user
        $lastname = $user->lastname;
        //Generate screenname ex: (John D.)
        $screename = $firstname . " " . strtoupper($lastname[0]) . ".";
        //session admin, afin d'afficher les elements adéquats
        $_SESSION['admin'] = $admin;
        if(password_verify($plain_password, $user->password))
        {
            //5. Procédure d'identification
            //--

            unset($user->password);

            //identification de l'utilisateur
            $_SESSION['user'] = $user;
            //message flash success a la redirection
            $_SESSION['flash'] = [
                'type' => "success",
                'message' => "Bonjour $screename"
            ];
            
        }
        // Le mot de passe ne correspond pas
        else
        {
            $_SESSION['flash'] = [
                'type' => "danger",
                'message' => "Login ou mot de passe incorrect"
            ];
        }
        
    }
    else
        {
            $_SESSION['flash'] = [
                'type' => "danger",
                'message' => "Login ou mot de passe incorrect"
            ];
        }
}

//Requête HTTP PAS en méthode POST (donc en GET) = INTERDIT = redirection vers la page d'acceuil
header('location: ../profil.php');
exit;
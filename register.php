<?php
include_once "config/config.php";
include_once "config/db_connect.php"; 

//Check user session
//on redirige l'utilisateur si celui-ci est deja identifié
if(isset($_SESSION['user']))
{
    header("location: profil.php");
    exit;
}

$firstname = null;
$lastname  = null;
$birth_day = 0;
$birth_month = 0;
$birth_year = 0;
$email = null;

include_once HEADER_PATH;
include_once SECURITY_REGISTER;
include_once INDEX_COMPONENT_BANNER;
?>
<!-- ======================================================================== -->


<div class="row mt-lg-5">
    <div class="col-md-8 offset-md-2">
        <div class="row bg-dark justify-content-between rounded">
        <h3 class="text-center text-white ml-3 my-auto text-uppercase" id="inscription" > devenez menbres </h3>
        <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#register" aria-expanded="false" aria-controls="register">
        <i class="fas fa-arrow-down"></i>
        </button>
        </div>
        <div class="collapse show" id="register">
            <div class="card card-body bg-light">
                <!-- Formulaire -->
                <form method="post" novalidate>

                    <!-- firstname -->
                    <div class="form-group">
                        <label for="firstname" class="sr-only">Prénom</label>
                        <input type="text" class="form-control <?= isset($errors['firstname']) ? "is-invalid" : null ?>" name="firstname" id="firstname" value="<?= $firstname ?>" placeholder="Prénom" required>
                        <?php if (isset($errors['firstname'])) : ?>
                            <div class="invalid-feedback"> <?= $errors['firstname'] ?> </div>
                        <?php endif ?>
                    </div>

                    <!-- lastname -->
                    <div class="form-group">
                        <label for="lastname" class="sr-only">Nom</label>
                        <input type="text" class="form-control <?= isset($errors['lastname']) ? "is-invalid" : null ?>" name="lastname" id="lastname" value="<?= $lastname ?>" placeholder="Nom" required>
                        <?php if (isset($errors['lastname'])) : ?>
                            <div class="invalid-feedback"> <?= $errors['lastname'] ?> </div>
                        <?php endif ?>
                    </div>

                    <!-- birthday -->
                    <div class="form-group">
                        <label for="birthday" class="sr-only">Birthday</label>
                        <div class="row">

                            <!-- select Jour -->
                            <div class="col-4">
                                <select name="birth[day]" id="birthday" class="form-control <?= isset($errors['birthday']) ? "is-invalid" : null ?>" required>
                                    <?php for ($i = 1; $i <= 31; $i++) : ?>
                                        <option value="<?= $i ?>" <?php if ($i == $birth_day) {echo "selected";}?>><?= $i ?>
                                        </option>
                                    <?php endfor ?>
                                </select>
                            </div>

                            <!-- select Mois -->
                            <div class="col-4">
                                <select name="birth[month]" class="form-control <?= isset($errors['birthday']) ? "is-invalid" : null ?>" required>
                                    <?php foreach ($month_text as $key => $value) : ?>
                                        <option value="<?= $key + 1 ?>" <?php if ($i == $birth_month) {echo "selected";}?>><?= $value ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <!-- select Année -->
                            <div class="col-4">
                                <select name="birth[year]" class="form-control <?= isset($errors['birthday']) ? "is-invalid" : null ?>" required>
                                    <?php for ($i = $current_year; $i >= $current_year - 100; $i--) : ?>
                                        <option value="<?= $i ?>" <?php if ($i == $birth_year) {echo "selected";}?>><?= $i ?>
                                        </option>
                                    <?php endfor ?>
                                </select>
                            </div>
                        </div>
                        <?php if (isset($errors['birthday'])) : ?>
                            <div class="invalid-feedback d-block"> <?= $errors['birthday'] ?> </div>
                        <?php endif ?>
                    </div>

                    <!-- email -->
                    <div class="form-group">
                        <label for="email" class="sr-only">email</label>
                        <input type="email" class="form-control <?= isset($errors['email']) ? "is-invalid" : null ?>" name="email" id="email" value="<?= $email ?>" placeholder="Email" required>
                        <?php if (isset($errors['email'])) : ?>
                            <div class="invalid-feedback d-block"> <?= $errors['email'] ?> </div>
                        <?php endif ?>
                    </div>

                    <!-- password -->
                    <div class="form-group">
                        <label for="password" class="sr-only">Mot de passe</label>
                        <input type="password" class="form-control <?= isset($errors['password']) ? "is-invalid" : null ?>" name="password" id="password" placeholder="Nouveau mot de passe" required>
                        <?php if (isset($errors['password'])) : ?>
                            <div class="invalid-feedback d-block"> <?= $errors['password'] ?> </div>
                        <?php endif ?>
                    </div>

                    <!-- password_confirm -->
                    <div class="form-group">
                        <label for="password_confim" class="sr-only">Confirmation du mot de passe</label>
                        <input type="password" class="form-control <?= isset($errors['confirmation']) ? "is-invalid" : null ?>" name="password_confirm" id="password_confirm" placeholder="Confirmation du mot de passe">
                        <?php if (isset($errors['confirmation'])) : ?>
                            <div class="invalid-feedback d-block"> <?= $errors['confirmation'] ?> </div>
                        <?php endif ?>
                    </div>

                    <!-- secret for admin access -->
                    <div class="form-group">
                        <label for="secret" class="sr-only">Le secret des admins</label>
                        <input type="password" class="form-control <?= isset($errors['secret']) ? "is-invalid" : null ?>" name="secret" id="secret" placeholder="Veuillez saisir le code secret">
                        <?php if (isset($errors['secret'])) : ?>
                            <div class="invalid-feedback d-block"> <?= $errors['secret'] ?> </div>
                        <?php endif ?>
                    </div>


                    <!-- agreeTerms -->
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" name="agreeTerms" id="agreeTerms" class="form-check-input <?= isset($errors['agreeTerms']) ? "is-invalid" : null ?>" required>
                            <label for="agreeTerms" class="form-check-label">J'accepte les C.G.U</label>
                        </div>
                    </div>

                    <!-- button submit -->
                    <button type="submit" class="btn btn-success btn-block">Je m'inscrit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once FOOTER_PATH; ?>
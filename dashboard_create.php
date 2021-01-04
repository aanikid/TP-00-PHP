<?php include_once "config/config.php"; ?>
<?php include_once "config/db_connect.php"; ?>
<?php include_once "security/create.php"; ?>

<!--===============================================================================================================================-->

<?php include_once DASHBOARD_HEADER; ?>

<!-- form de creation d'article -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-primary text-center mb-lg-5">Création d'un article</h2>
        </div>

        <form action="" method="post" action="upload.php" enctype="multipart/form-data" novalidate>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                        Illustration (max 10Mo) : <input type="file" name="illustration" id="illustration">
                        
                    </div>
                </div>
                <div class="col-md-6">
                <img id="preview" class=" border border-primary img-fluid mb-3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
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
                <input type="text" id="createdAt" class="form-control" name="createdAt" placeholder="date de création de l'article (YYYY-MM-DD)">
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

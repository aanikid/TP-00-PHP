<!--adrien pas besoin de refaire une page html le header.php contient tous le debut-->
    <!-- appel du layout header -->
    <?php include_once "layouts/header.php" ?>

    <!-- liste des articles -->
    <div class="container">
    
        <!-- article -->
        <div class="row justify-content-center border border-info rounded mt-3">
            <!-- photo de l'article -->
            <div class="col-4 p-0">
            <img src="assets/img/newsup-article1.png" alt="chien tenant un journal">
            </div>
            <!-- titre et résumé de l'article -->
            <div class="col-8">
            <h2>
                titre de l'article
            </h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam eaque repudiandae iste similique Lorem ipsum dolor sit,
                amet consectetur adipisicing elit. Ullam eaque repudiandae iste similique
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur qui dicta cupiditate deserunt labore tenetur eaque neque,
                maiores dolorem nulla hic necessitatibus saepe adipisci ab iste, a, assumenda quo laudantium?
            </p>
            </div>
        </div>
    
    </div>

<!--et le footer contient toute la fin -->
    <!-- appel du layout footer -->
    <?php include_once "layouts/footer.php" ?>
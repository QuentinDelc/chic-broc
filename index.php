<?php require('templates/header.php'); ?>

    <div class="banner">
        <div class="banner_overlay">
            <div class="container banner_container">
                <div class="green-box green-box-big">
                    <h1 class="green-box_title">Chic et Broc</h1>
                    <p class="green-box_subtitle">Bayonne</p>
                </div>
                <a class="banner_arrow-bottom js-scrollto" href="#main-product"></a>
            </div>
        </div>
    </div>
    <section class="main" id="main-product">
        <div class="slider-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="main-title slider-section__title">NOS PRODUITS</h2>
                        <div class="slider-section__text main-text">
                            <p>À la recherche d'un petit trésor, d'un cadeau, d'une pièce rare ?</p>
                            <p>À la recherche d'une décoration de caractère et unique ?</p>
                            <p>Chez Chic et Broc, vous trouverez de la décoration, des luminaires, des arts de la table, des gravures et reproductions de 18 au 20ème siècle, du petit mobilier, des miroirs, des céramiques ou simplement un coup de cœur !</p>
                            <p>Chez Chic et Broc, vous pouvez espérer trouver du beau monde comme Napoléon III, Valentin Omersa, Eugène Cicéri, Victor Vasarely, WillyRizzo, Louis-Philipe, les maisons Cazaux, Jansen ou Dior, Roger Tallon, Hans Nagel, Cécil Aldin, Otto Bauer, Louis XVI ou encore les italiens Goffredo Reggiani et Gaetano Sciolari ...</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="slider-section__carousel">
                            <div class="main-carousel owl-carousel-v1 owl-carousel owl-theme">
                                <div class="main-carousel__slide item slide1">
                                    <div class="main-carousel__overlay">
                                        <h3 class="main-carousel__title main-title main-title--center">DÉCORATIONS</h3>
                                        <p class="main-carousel__description">Tableaux, Céramiques, Gravures...</p>
                                        <a class="main-carousel__btn btn" href="decoration.php">DÉCOUVRIR </a>
                                    </div>
                                </div>
                                <div class="main-carousel__slide item slide2">
                                    <div class="main-carousel__overlay">
                                        <h3 class="main-carousel__title main-title main-title--center">LUMINAIRES</h3>
                                        <p class="main-carousel__description">Lustres, Lampadaires, Lampes de bureau...</p>
                                        <a class="main-carousel__btn btn" href="luminaire.php">DÉCOUVRIR</a>
                                    </div>
                                </div>
                                <div class="main-carousel__slide item slide3">
                                    <div class="main-carousel__overlay">
                                        <h3 class="main-carousel__title main-title main-title--center">PETIT MOBILIER</h3>
                                        <p class="main-carousel__description">Tables basses, Guéridons, Chevets...</p>
                                        <a class="main-carousel__btn btn" href="mobilier.php">DÉCOUVRIR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="main-store">
        <div class="text-img-sect">
            <div class="container">
                <h2 class="text-img-sect__title main-title main-title--center">La boutique</h2>
                <div class="row index">
                    <div class="col-lg-6 photo-store">
                        <div class="text-img-sect__translated-img img-bordered"><img class="img-fluid store" src="assets/img/home/boutique.jpg" alt="Boutique Chic et Broc"></div>
                    </div>
                    <div class="col-lg-6 photo-store">
                        <div class="text-img-sect__translated-img img-bordered  mtop"><img class="img-fluid store" src="assets/img/home/entree.jpg" alt="Boutique Chic et Broc"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php require('templates/social.php'); ?>
<?php require('templates/footer.php'); ?>


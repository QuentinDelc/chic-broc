<?php require('templates/header.php'); ?>

<div class="banner produit">
    <div class="banner_overlay">
        <div class="container banner_container">
            <div class="green-box green-box-big">
                <h1 class="green-box_title philo">NOS OBJETS</h1>
            </div><a class="banner_arrow-bottom js-scrollto" href="#produit"></a>
        </div>
    </div>
</div>

<section id="produit">
    <div class="container">
        <div class="row img-prod">
            <div class="col-md-4 product img-bordered decoration">
            <h3 class="product main-title main-title--center">DÉCORATIONS</h3>
                <p class="product">Tableaux, Céramiques, Gravures...</p>
                <a class="product btn" href="decoration.php">DÉCOUVRIR</a>
            </div>
            <div class="col-md-4 product lumi img-bordered">
                <h3 class="product main-title main-title--center">LUMINAIRES</h3>
                <p class="product">Lustres, Lampadaires, Lampes de bureau...</p>
                <a class="product btn" href="luminaire.php">DÉCOUVRIR</a>
            </div>
            <div class="col-md-4 product mobi img-bordered">
                <h3 class="product main-title main-title--center">PETIT MOBILIER</h3>
                <p class="product">Tables basses, Guéridons, Chevets...</p>
                <a class="product btn" href="mobilier.php">DÉCOUVRIR</a>
            </div>
        </div>
    </div>
</section>

<?php require('templates/footer.php'); ?>
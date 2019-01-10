<?php require('templates/header.php'); ?>

<div class="banner horaires">
    <div class="banner_overlay">
        <div class="container banner_container">
            <div class="green-box green-box-big">
                <h1 class="green-box_title philo">NOS JOURS D'OUVERTURE</h1>
            </div><a class="banner_arrow-bottom js-scrollto" href="#horaires"></a>
        </div>
    </div>
</div>
<section id="horaires">
    <div class="container">
        <div class="row">
            <div class="col-md-6 horaires middle">
                <p>Chic et Broc est fermé le lundi et le mercredi (horaires susceptibles de varier selon la saison)</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Matin</th>
                            <th scope="col">Après-midi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Lundi :</strong></td>
                            <td>Fermé</td>
                            <td>Fermé</td>
                        </tr>
                        <tr>
                            <td><strong>Mardi :</strong></td>
                            <td>10h-12h30</td>
                            <td>15h-18h</td>
                        </tr>
                        <tr>
                            <td><strong>Mercredi :</strong></td>
                            <td>Fermé</td>
                            <td>Fermé</td>
                        </tr>
                        <tr>
                            <td><strong>Jeudi :</strong></td>
                            <td>10h-12h30</td>
                            <td>15h-18h</td>
                        </tr>
                        <tr>
                            <td><strong>Vendredi :</strong></td>
                            <td>10h-12h30</td>
                            <td>15h-18h</td>
                        </tr>
                        <tr>
                            <td><strong>Samedi :</strong></td>
                            <td>10h-12h30</td>
                            <td>15h-18h</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 horaires img-bordered racines">
                <img src="assets/img/horaires/open.jpg" alt="Horaires d'ouverture" class="img-fluid">
            </div>
        </div>
        <div class="col-md-6 bouton matop">
            <a class="btn m" href="racines.php">Nos racines</a>
            <a class="btn m" href="philosophie.php">Philosophie</a>
        </div>
    </div>
</section>

<?php require('templates/footer.php'); ?>
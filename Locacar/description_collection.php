<?php
    require "header.php"
?>
<div class=container>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
            <li class="breadcrumb-item"><a href="voiture_collection.php">Voiture de Collection</a></li>
            <li class="breadcrumb-item active" aria-current="page">Description Voiture</li>
        </ol>
    </nav>
    <div class=row>
        <div class=col-lg-8 >
            <div class="card mb-3">
                <img src="img/chevrolet capitole.jpg" class="card-img-top" href="voiture_collection.php" alt="chevrolet"
                    title="chevrolet">
                <div class="card-body">
                    <h2>Chevrolet Capitole</h2>
                    <p class="card-text">Lorsque William Durant et Louis Chevrolet commencèrent à vendre des voitures
                        Chevrolet en 1911,
                        la nouvelle marque ne faisait pas partie de la General Motors.
                        William ‘Bill’ Durant était l’ancien directeur de GM au moment de sa fondation en 1908 mais il
                        se retrouva évincé de ses fonctions par les banquiers de la compagnie qui le considéraient
                        inapte pour mener à bien
                        les affaires d’une entreprise de la taille de General Motors. L’esprit revanchard, Billy Durant
                        n’avait alors pour ambition que de regagner sa position
                        en se servant de Chevrolet sur le long terme et de sa prospérité. Le succès financier de la
                        nouvelle firme lui permit alors d’engranger des actions du stock
                        de GM pour en prendre à nouveau le pouvoir. S’inspirant du Model T d’Henry Ford, William Durant
                        se mit à produire des modèles économiques et compétitifs.
                        Les voitures Chevrolet se vendirent plutôt bien et générèrent des profits suffisants pour
                        permettre à William Durant en 1916 de contrôler 54.5 %
                        du stock d’actions de GM et d'en prendre la direction et de se déclarer lui-même président.</p>
                </div>
            </div>
        </div>
        <div class=col-lg-4>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/old-1553877_640.jpg" class="d-block w-100" alt="ford" title="ford">
                    </div>
                    <div class="carousel-item">
                        <img src="img/model-t-2721126_640.png" class="d-block w-100" alt="ford" title="ford">
                    </div>
                    <div class="carousel-item">
                        <img src="img/old-model-t-ford-2683786_640.jpg" class="d-block w-100" alt="ford" title="ford">
                    </div>
                    <div class="carousel-item">
                        <img src="img/t-bucket-3624068_640.png" class="d-block w-100" alt="ford" title="ford">
                    </div>
                    <div class="carousel-item">
                        <img src="img/vintage-2573090_640.jpg" class="d-block w-100" alt="ford" title="ford">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
                <form>
                    <div class="form-group row mt-lg-5 ">
                        <label for="text" class="col-sm-6 col-form-label">Nom</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text" class="col-sm-6 col-form-label">Prénom</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="Lastname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text" class="col-sm-6 col-form-label">Téléphone</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-6 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-6 col-form-label">Mot de Passe</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="text" class="col-sm-6 col-form-label">Adresse</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="adresse">
                        </div>
                    </div>
                    <fieldset class="form-group bg-light">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0"></legend>
                    <h3>Formule de Location</h3>
                        <div class="col-sm-10">
                            <div class="form-check ml-5">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Formule 50€ la Journée.
                                </label>
                            </div>
                            <div class="form-check ml-5">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                    value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Formule 350€ la Semaine.
                                </label>
                            </div>
                            <div class="form-check disabled ml-5">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                    value="option3">
                                <label class="form-check-label" for="gridRadios3">
                                    Formule 1000€ le Mois.
                                </label>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-10 mt-lg-2 ml-5">
                                <button type="submit" class="btn btn-dark">Réserver</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php
    require "footer.php"
?>
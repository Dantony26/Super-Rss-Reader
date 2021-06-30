<?php require 'controllers/index-controller.php';?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <p class="h1 text-center">Super RSS Reader</p>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container-fluid d-flex flex-row">
                <a class="navbar-brand" href="#">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">sujet1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">sujet2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">sujet3</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= $emploiImg; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block bg-dark">
                        <p><?= $emploi->item[0]->title; ?></p>
                        <p><?= $emploi->item[0]->description ?></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= $industrieImg; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block bg-dark">
                        <p><?= $industrie->item[0]->title; ?></p>
                        <p><?= $industrie->item[0]->description; ?></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= $economieFrancaiseImg; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block bg-dark">
                        <p><?= $economieFrancaise->item[0]->title; ?></p>
                        <p><?= $economieFrancaise->item[0]->description; ?></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div>
        <?php 
            for ($i=0; $i < 12; $i++) { 
                $randomArticle = rand(0,4);
        ?>
            <div class="d-flex flex-row justify-content-between border mt-5 p-3">
                <div class="square"></div>
                <div>
                    <p><?= $articles[$randomArticle]->item[$i]->title; ?></p>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>
                </div>
                <div>
                <a href="<?=$articles[$randomArticle]->item[$i]->link;?>">Lien</a>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
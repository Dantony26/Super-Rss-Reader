<?php require 'controllers/index-controller.php'; ?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>
    <title>Document</title>
</head>

<body>
    <p class="h1 text-center my-5">Super RSS Reader</p>
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
            for ($i = 0; $i < 12; $i++) {
                $randomArticle = rand(0, 4);
                $date = $articles[$randomArticle]->item[$i]->pubDate;
            ?>
                <div class="d-flex flex-row justify-content-between border my-3 p-3 row">
                    <div class=" col-1 square <?php switch ($randomArticle) {
                                                    case 0:
                                                        echo "bg-primary";
                                                        break;
                                                    case 1:
                                                        echo "bg-success";
                                                        break;
                                                    case 2:
                                                        echo "bg-danger";
                                                        break;
                                                    case 3:
                                                        echo "bg-info";
                                                        break;
                                                    case 4:
                                                        echo "bg-dark";
                                                        break;
                                                    default:
                                                        echo "bg-secondary";
                                                        break;
                                                } ?>"></div>
                    <div class="col-8 text-vertical-align">
                        <p class="articleText"><?= $articles[$randomArticle]->item[$i]->title; ?></p>
                    </div>
                    <div class="col-1 articleText">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalArticle<?=$i?>">
                            Zoom
                        </button>
                    </div>
                    <div class="col-2 text-vertical-align text-center">
                        <a class="articleText" href="<?= $articles[$randomArticle]->item[$i]->link; ?>">Lien vers l'article</a>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modalArticle<?=$i?>" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header d-flex flex-column">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <p> <?=strftime("%A %d %B %Y %H:%M:%S", strtotime($date));?></p>
                                <p class="modal-title h5" id="exampleModalLabel"><?=$articles[$randomArticle]->item[$i]->title;?></p>
                            </div>
                            <div class="modal-body">
                                <img class="w-100 my-3" src="<?=$articles[$randomArticle]->item[$i]->children('media', true)->content->attributes();?>" alt="">
                                <p><?=$articles[$randomArticle]->item[$i]->description;?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <a href="<?=$articles[$randomArticle]->item[$i]->link;?>"><button type="button" class="btn btn-primary">Aller ver l'article</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
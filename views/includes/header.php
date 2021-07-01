<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="favicon.ico" />
    <title>Document</title>
</head>

<body class="<?= isset($_COOKIE['mode'])? $_COOKIE['mode']: ""; ?>">
    <p class="h1 text-center my-5">Super RSS Reader</p>
    <nav class="navbar navbar-expand-lg <?= isset($_COOKIE['mode'])? 'navbar-light bg-light': 'navbar-dark bg-dark'; ?>">
        <div class="container">
            <div class="container-fluid d-flex flex-row">
                <a class="navbar-brand" href="accueil">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="sujet1">sujet1</a>
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
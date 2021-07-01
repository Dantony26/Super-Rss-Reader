<?php
$articlesChoices = array('Emploi', 'Entreprise', 'Industrie', 'Economie-Francaise', 'Economie');
if (isset($_COOKIE['articles'])) {
    $articlesNav = explode(" ", $_COOKIE['articles']);
    foreach ($articlesNav as $key => $value) { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $value; ?>"><?= $value; ?></a>
        </li>
    <?php } ?>
    <li class="nav-item">
        <a class="nav-link" href="parametres">Paramètres</a>
    </li>
    <?php
} else {
    foreach ($articlesChoices as $key => $value) { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $value; ?>"><?= $value; ?></a>
        </li>
<?php } ?>
    <li class="nav-item">
        <a class="nav-link" href="parametres">Paramètres</a>
    </li>
<?php } ?>
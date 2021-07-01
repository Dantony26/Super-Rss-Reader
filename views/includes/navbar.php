<?php
if (isset($_COOKIE['articles'])) {
    $articlesNav = explode(" ", $_COOKIE['articles']);
    foreach ($articlesNav as $key => $value) { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $value; ?>"><?= $value; ?></a>
        </li>
    <?php } ?>
    <li class="nav-item">
        <a class="nav-link" href="parameters">Paramètres</a>
    </li>
    <?php
} else {
    foreach ($articlesChoices as $key => $value) { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $value; ?>"><?= $value; ?></a>
        </li>
<?php } ?>
    <li class="nav-item">
        <a class="nav-link" href="parameters">Paramètres</a>
    </li>
<?php } ?>
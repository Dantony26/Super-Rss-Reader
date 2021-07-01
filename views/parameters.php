<?php
include 'includes/header.php';
require '../controllers/index-controller.php';
require '../controllers/parameters-controller.php';
if (isset($_POST['mode']) && isset($_POST['numberOfArticles']) && in_array($_POST['mode'], $modeChoices) && in_array($_POST['numberOfArticles'], $articlesNumberChoices)) {
    setcookie('mode', htmlspecialchars(trim($_POST['mode'])), time() + 60);
    setcookie('numberOfArticles', htmlspecialchars(trim($_POST['numberOfArticles'])), time() + 60);
}

if (isset($_POST['mode'])) {
    header("Location: parametre");
    exit;
}
?>

<div class="container my-5">
    <form action="parametre" method="POST">
        <div class="mb-3">
            <p>A vous de voir si vous tenez a vos yeux ...</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="mode" id="lightMode" value="lightMode" checked>
                <label class="form-check-label" for="lightMode">
                    Blind mode
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="mode" id="darkMode" value="darkMode">
                <label class="form-check-label" for="darkMode">
                    Best mode
                </label>
            </div>
        </div>

        <div class="mb-3">
            <p>Veuillez choisir le nombre d'articles a afficher dans le fils d'actualité (12 par défaut) :</p>
            <?php foreach ($articlesNumberChoices as $choices) { ?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="numberOfArticles" id="<?= $choices; ?>" value="<?= $choices; ?>" <?= $x === count($articlesNumberChoices)? 'checked': '';?>>
                    <label class="form-check-label" for="<?= $choices; ?>">
                        <?= $choices; ?>
                    </label>
                </div>
            <?php  $x++;} ?>
        </div>
        <div class="mb-3">
            <p>Choississez les articles que vous souhaitez voir :</p>
            <?php
            foreach ($articlesChoices as $item) {
            ?>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="checkbox" id="<?= $item ?>" value="<?= $item ?>">
                    <label class="form-check-label" for="<?= $item ?>"><?= $item ?></label>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Valider</button>
        </div>
    </form>
</div>


<?php include 'includes/footer.php'; ?>
<?php
include 'includes/header.php';
require '../controllers/index-controller.php';
require '../controllers/parameters-controller.php';
if (isset($_POST['mode']) && isset($_POST['numberOfArticles'])) {
    setcookie('mode', htmlspecialchars(trim($_POST['mode'])), time()+60);
    setcookie('numberOfArticles', htmlspecialchars(trim($_POST['numberOfArticles'])), time()+60);
}

if(isset($_POST['mode'])){
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
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="numberOfArticles" id="6" value="6">
                <label class="form-check-label" for="6">
                    6
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="numberOfArticles" id="9" value="9">
                <label class="form-check-label" for="9">
                    9
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="numberOfArticles" id="12" value="12" checked>
                <label class="form-check-label" for="12">
                    12
                </label>
            </div>
        </div>
        <div class="mb-3">
            <p>Choississez les articles que vous souhaitez voir :</p>
            <?php
            foreach ($xml as $item) {
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
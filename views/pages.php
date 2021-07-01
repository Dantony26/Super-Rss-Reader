<?php include 'includes/header.php';
require '../controllers/pages-controller.php';
?>

<div class="container"><?php
foreach($categories[$_GET['sujet']]->channel->item as $item) {
    ?><div class="d-flex flex-row justify-content-between border my-3 p-3 row gx-0 fw-bold">
    <div class="col-5 col-md-5 text-vertical-align">
    <img class="img-fluid my-3" src="<?= $item->children('media', true)->content->attributes(); ?>" alt="">
    </div>
    <div class="col-7 col-md-7 text-vertical-align ps-4 pe-4">
    <?php echo $item->title;?>
    <p class="fw-normal pt-3"><?= $item->description; ?></p>
    <p class="fw-normal pt-3"><?= date('D, d M Y',strtotime($item->pubDate)); ?></p>
    <div><a href="<?= $item->link; ?>"><button type="button" class="btn btn-primary">Aller ver l'article</button></a></div>
    </div>
    </div>
    <?php
}?>
</div>
<?php include "includes/footer.php";
?>

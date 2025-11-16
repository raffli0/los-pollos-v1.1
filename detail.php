<?php include("includes/header.php"); ?>
<?php include("data/data.php"); ?>

<?php
$id = $_GET['id'] ?? null;
$selected = null;

foreach($infoData as $data){
    if($data["id"] == $id){
        $selected = $data;
        break;
    }
}
?>

<div class="container py-5 text-center">
<?php if($selected): ?>
    <img src="<?= $selected['img'] ?>" class="img-fluid mb-3" style="max-width:350px;">
    <h2><?= $selected['title'] ?></h2>
    <p class="mt-3"><?= $selected['content'] ?></p>
    <h4 class="text-danger"><?= $selected['price'] ?></h4>
    <a href="index.php" class="btn btn-secondary mt-3">Back</a>
<?php else: ?>
    <div class="alert alert-danger mt-5">Data not found</div>
<?php endif; ?>
</div>

<?php include("includes/footer.php"); ?>

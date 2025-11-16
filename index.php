<?php include("includes/header.php"); ?>
<?php include("data/data.php"); ?>

<section class="hero">
    <div class="hero-content">
        <img src="assets/img/lph-logos.png" class="hero-logo mb-4">
    </div>
</section>

<div class="color-transition"></div>

<div class="gif-cta text-center my-0">
    <a href="menu.php" class="gif-link">
        <img src="assets/img/los-pollos-hermanos-ad.gif" class="img-fluid gif-hiring">
    </a>
</div>

<div class="color-transition-bottom"></div>

<section id="menu" class="py-5 parallax"
style="background-image:url('https://images.unsplash.com/photo-1600891964909-8bdfc3e1b1b0');">
    <div class="container text-center text-dark bg-light bg-opacity-75 rounded p-4">
        <h2 class="fw-bold mb-4">Our Menu</h2>
        <div class="row g-4">
            <?php foreach($infoData as $item): ?>
            <div class="col-md-4">
                <div class="card menu-card shadow-sm">
                    <img src="<?= $item['img']; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5><?= $item['title'] ?></h5>
                        <p><?= $item['summary'] ?></p>
                        <p class="fw-bold text-danger"><?= $item['price'] ?></p>
                        <a href="detail.php?id=<?= $item['id'] ?>" class="btn btn-warning btn-sm">Details</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>

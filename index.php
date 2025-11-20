<?php $page = "home"; include("includes/header.php"); ?>
<?php include("data/data.php"); ?>

<section class="hero">
    <div class="hero-content">
        <img src="assets/img/lph-logos.png" class="hero-logo mb-4">
    </div>
</section>

<div class="color-transition"></div>

<div class="gif-cta text-center my-0">
    <a href="jobs.php" class="gif-link">
        <img src="assets/img/los-pollos-hermanos-ad.gif" class="img-fluid gif-hiring">
    </a>
</div>

<div class="color-transition-bottom"></div>

<section id="company-info" class="py-5">
    <div class="container text-center">

        <div class="row g-4">
            <?php foreach($infoData as $item): ?>
            <div class="col-md-4">
                <a href="<?= $item['link']; ?>" style="text-decoration:none; color:inherit;">
                    <div class="card shadow-sm h-100 info-card">
                        <img src="<?= $item['img']; ?>" class="card-img-top"
                             style="height:240px; object-fit:cover;">
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>



<?php include("includes/footer.php"); ?>

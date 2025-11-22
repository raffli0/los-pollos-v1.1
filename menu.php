<?php $page = "menu"; include("includes/header.php"); ?>
<?php include("data/data.php"); ?>

<?php
// jika user belum login → arahkan kembali ke halaman login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

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

<div class="container text-center py-5">
    <h2>Welcome to Dashboard</h2>
    <p>Here you can manage menu / company info.</p>
    <a href="api/index.php" class="btn btn-success">Open CRUD API</a>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>


<?php include("includes/footer.php"); ?>

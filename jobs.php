<?php  include("includes/header.php"); ?>
<?php include("data/data.php"); ?>
<?php $heroBg = "assets/img/lp-job.png"; ?>


<section class="hero" style="background-image: url('<?= $heroBg ?>');">
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

<!-- JOB LISTINGS -->
<section class="py-5" style="background-color: #f8d210;">
    <div class="container">

        <h2 class="fw-bold text-center mb-5" style="color: #9f1000;">Open Positions</h2>

        <div class="row g-4">

            <!-- JOB 1 -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4 class="fw-bold">Kitchen Staff</h4>
                        <p class="text-muted mb-2">Location: Albuquerque, NM</p>
                        <span class="badge bg-warning text-dark mb-3">Full Time</span>
                        <p>Responsible for food preparation, maintaining cleanliness, and supporting daily kitchen operations.</p>
                        <a href="#" class="btn btn-danger fw-bold w-100" style="background-color: #9f1000;">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- JOB 2 -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4 class="fw-bold">Cashier</h4>
                        <p class="text-muted mb-2">Location: Albuquerque, NM</p>
                        <span class="badge bg-info text-dark mb-3">Part Time</span>
                        <p>Handle customer transactions, service excellence, and maintain smooth front-desk operations.</p>
                        <a href="#" class="btn btn-danger fw-bold w-100" style="background-color: #9f1000;">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- JOB 3 -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4 class="fw-bold">Delivery Driver</h4>
                        <p class="text-muted mb-2">Location: Albuquerque, NM</p>
                        <span class="badge bg-success text-light mb-3">Contract</span>
                        <p>Deliver orders quickly and safely using company vehicle. Good driving record required.</p>
                        <a href="#" class="btn btn-danger fw-bold w-100" style="background-color: #9f1000;">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- JOB 4 -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4 class="fw-bold">Restaurant Supervisor</h4>
                        <p class="text-muted mb-2">Location: Albuquerque, NM</p>
                        <span class="badge bg-danger text-light mb-3">Full Time</span>
                        <p>Lead store operations, manage staff, and maintain customer satisfaction to brand standards.</p>
                        <a href="#" class="btn btn-danger fw-bold w-100" style="background-color: #9f1000;">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- JOB 5 -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4 class="fw-bold">Cleaning & Maintenance</h4>
                        <p class="text-muted mb-2">Location: Albuquerque, NM</p>
                        <span class="badge bg-secondary text-light mb-3">Full Time</span>
                        <p>Ensure restaurant cleanliness, equipment maintenance, and support facility needs.</p>
                        <a href="contact.php" class="btn btn-danger fw-bold w-100" style="background-color: #9f1000;">Apply Now</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<?php include("includes/footer.php"); ?>

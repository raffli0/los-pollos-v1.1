<?php
$page = "apply";
$position = $_GET['position'] ?? 'Unknown Position';
include("includes/header.php");

// Protect this page: require login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
// $jobs = $conn->query("SELECT title FROM jobs ORDER BY title ASC");
?>

<style>
    /* Floating Back Button */
    .floating-back {
        position: relative;
        top: -20px;
        left: -5px;
        z-index: 5000;
        background: hsla(50, 100%, 50%, 0.92);
        color: #000;
        padding: 10px 18px;
        border-radius: 50px;
        font-weight: 600;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(6px);
        transition: .25s ease;
        text-decoration: none;
    }

    .floating-back:hover {
        transform: translateY(-3px);
        filter: brightness(1.15);
        color: #000;
    }
</style>



<div class="container py-5" style="margin-top:70px;">
    <a href="jobs.php" class="floating-back">← Back to Jobs</a>
    <h2 class="fw-bold mb-4">Apply for: <?= htmlspecialchars($position); ?></h2>

    <form action="apply_process.php" method="POST" class="p-4 bg-light rounded shadow">

        <input type="hidden" name="position" value="<?= $position; ?>">

        <div class="mb-3">
            <label class="form-label fw-bold">Full Name</label>
            <input type="text" class="form-control" name="fullname" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Phone Number</label>
            <input type="text" class="form-control" name="phone" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Position Applied</label>
            <select name="position" class="form-select" required>
                <option value="" selected disabled>Choose a position</option>

                <?php while ($row = $jobs->fetch_assoc()): ?>
                    <option value="<?= $row['title']; ?>" <?= ($row['title'] == ($position ?? '')) ? 'selected' : '' ?>>
                        <?= $row['title']; ?>
                    </option>
                <?php endwhile; ?>

            </select>
        </div>


        <button class="btn btn-warning fw-bold w-100">Submit Application</button>
    </form>
</div>

<?php include("includes/footer.php"); ?>
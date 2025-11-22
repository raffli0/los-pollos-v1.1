<?php
$page = "register";
include("includes/header.php");

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/koneksi/koneksi.php';

    // ensure users table exists
    $createSql = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL UNIQUE,
        password_hash VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
    $database_connection->exec($createSql);

    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($email === '' || $password === '') {
        $error = 'Masukkan email dan password.';
    } else {
        // check if email already exists
        $check = $database_connection->prepare('SELECT id FROM users WHERE email = :email LIMIT 1');
        $check->execute([':email' => $email]);
        if ($check->fetch()) {
            $error = 'Email sudah terdaftar.';
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $ins = $database_connection->prepare('INSERT INTO users (email, password_hash) VALUES (:email, :hash)');
            $ins->execute([':email' => $email, ':hash' => $hash]);
            $success = 'Registrasi berhasil. Silakan login.';
        }
    }
}
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height:80vh;">
<div class="card p-4 shadow" style="width:350px;">
    <h3 class="text-center mb-3">Register</h3>
    <?php if ($error): ?>
        <p class="text-danger small"><?= htmlspecialchars($error) ?></p>
    <?php elseif ($success): ?>
        <p class="text-success small"><?= htmlspecialchars($success) ?></p>
    <?php endif; ?>
    <form id="registerForm" method="post" action="register.php">
        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
        <button class="btn btn-warning w-100" type="submit">Register</button>
    </form>
    <p class="text-center mt-3">Already have an account? <a href="login.php">Login here</a></p>
</div>
</div>

<?php include("includes/footer.php"); ?>
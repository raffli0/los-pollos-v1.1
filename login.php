<?php
$page = "login";
include("includes/header.php");

$error = '';
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
        $sql = "SELECT id, password_hash FROM users WHERE email = :email LIMIT 1";
        $stmt = $database_connection->prepare($sql);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $email;
        
            header('Location: menu.php');
            exit;
        } else {
            $error = 'Email atau password salah.';
        }
    }
}
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height:80vh;">
<div class="card p-4 shadow" style="width:350px;">
    <h3 class="text-center mb-3">Login</h3>
    <?php if ($error): ?>
        <p class="text-danger small"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form id="loginForm" method="post" action="login.php">
        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
        <button class="btn btn-warning w-100" type="submit">Login</button>
    </form>
    <p class="text-center mt-3">Don't have an account? <a href="register.php">Register here</a></p>
</div>
</div>

<?php include("includes/footer.php"); ?>

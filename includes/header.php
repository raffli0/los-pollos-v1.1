<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <style>
        <?php include("assets/style.css"); ?>
    </style>
    <title>Los Pollos Hermanos</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Los Pollos Hermanós</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <?php if ($page == "home"): ?>
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="index.php#company-info" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <?php elseif ($page == "menu"): ?>
                        <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
                        <li class="nav-item"><a href="" onclick="logout()" class="nav-link">Logout</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        function logout() {
            sessionStorage.removeItem("login");
            window.location.href = "login.php";
        }
    </script>
<?php include("includes/header.php"); ?>

<script>
// jika user belum login → arahkan kembali ke halaman utama
if(!sessionStorage.getItem("login")){
    alert("Access Denied!");
    window.location.href = "login.php";
}
</script>

<div class="container text-center py-5">
    <h2>Welcome to Dashboard</h2>
    <p>Here you can manage menu / company info.</p>
    <a href="api/index.php" class="btn btn-success">Open CRUD API</a>
    <button class="btn btn-danger" onclick="logout()">Logout</button>
</div>

<script>
function logout(){
    sessionStorage.removeItem("login");
    window.location.href = "login.php";
}
</script>

<?php include("includes/footer.php"); ?>

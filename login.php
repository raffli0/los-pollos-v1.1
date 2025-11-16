<?php include("includes/header.php"); ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height:80vh;">
<div class="card p-4 shadow" style="width:350px;">
    <h3 class="text-center mb-3">Login</h3>
    <form id="loginForm">
        <input type="text" id="email" class="form-control mb-3" placeholder="Email" required>
        <input type="password" id="password" class="form-control mb-3" placeholder="Password" required>
        <p id="err" class="text-danger small d-none">Email atau Password salah</p>
        <button class="btn btn-warning w-100" type="submit">Login</button>
    </form>
</div>
</div>

<script>
document.getElementById("loginForm").addEventListener("submit", e => {
    e.preventDefault();
    let email = document.getElementById("email").value;
    let pass  = document.getElementById("password").value;

    if(email === "admin" && pass === "123456"){
        sessionStorage.setItem("login", true);
        window.location.href = "menu.php";
    } else {
        document.getElementById("err").classList.remove("d-none");
    }
});
</script>

<?php include("includes/footer.php"); ?>

function showRegister() {
    document.getElementById("login-box").style.display = "none";
    document.getElementById("register-box").style.display = "block";
}

function showLogin() {
    document.getElementById("login-box").style.display = "block";
    document.getElementById("register-box").style.display = "none";
}

function register() {
    alert("Registration Successful! Please Login.");
    showLogin();
}

function login() {
    window.location.href = "booking.html";
}

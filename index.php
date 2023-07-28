<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login Page</title>
</head>
<body>

<div class="login-box">
<form class="input-forms" id="input-form" action="" method="post">
<h1> Login</h1 >
<input name = "usr-email"  type="text" placeholder=" Enter your email address">
<input name="usr-password" id="user-password" type="password" placeholder=" Enter your password">
<div class="show-pass">
<input name="" class = "check-box" id="pass-check" type="checkbox"><label class="check-label" id="pass-label" for="">Show Password</label>
</div>
<button class="sub-btn">LOGIN</button>
<a href="">Forgotten your password?</a>
<hr>
<div>
<label for="">If you dont have an account?</label><a href=""> Register</a>
</div>
</form>
</div>



<script>
var passInput = document.getElementById("user-password");
var showPassCheck = document.getElementById("pass-check");
var passLabel = document.getElementById("pass-label");
showPassCheck.addEventListener("change", function() {
  if (showPassCheck.checked) {
    passInput.setAttribute("type", "text");
    passlabel.innerHTML = "Hide Password";
  } else {
    passInput.setAttribute("type", "password");
    passLabel.innerHTML = "Show Password";
    
  }
}); 
</script>
    
</body>
</html>
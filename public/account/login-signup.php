<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <section class="container">
        <div class="image-section">
            <div class="image-wrapper">
                <img src="../img/mesh-gradient.png" alt="">
            </div>
            <div class="content-container">
                <h1 class="section-heading">Empowering Minds Through Digital <span>Education.</span></h1>
                <p class="section-paragraph">Every step forward is a step towards knowledge. Embrace the journey.</p>
            </div>
        </div>
        <div class="form-section">
            <div class="form-wrapper">
                <div class="logo-container">
                    <a href="#" class="logo-container">
                        <img src="../img/logo.png" alt="Logo">
                    </a>
                </div>
                <h2>Welcome Back! 👋🏻</h2>
                <p>Enter your credentials to access your account.</p>
                <div class="input-container">
                    <form id="signup-form">
                        <label for="username">Username</label><br>
                        <input type="text" id="signup-username" name="signup-username" autocomplete="off"><br>
                        <label for="password">Password</label><br>
                        <input type="password" id="signup-password" name="signup-password">
                </div>
                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" value="remember-me" id="remember-me">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <a href="#">Forgot password?</a>
                </div>
                <button class="login-btn" id="login-btn" type="submit">Sign Up</button>
                <p id="signup">Have an account? <a href="">Sign in</a></p>
</form>
                <div class="or-divider">or</div>
                <button class="google-signin">
                    <object data="./google.svg"></object>
                    <span>Sign in with Google</span>
                </button>
            </div>
        </div>
    </section>
</body>
<script src="../js/login-signup.js"></script>
</html>
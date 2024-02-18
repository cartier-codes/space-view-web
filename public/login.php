
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="wrapper">
        <div class="form-container">
            <!-- Sign Up Form -->
            <form action="signup.php" method="post">
                <h2 class="text-center">Sign Up</h2>
                <input type="text" id="signup-username" name="signup-username" required placeholder="Username">
                <input type="password" id="signup-password" name="signup-password" required class="passwords mt-3" placeholder="password">
                <button type="submit">Sign Up</button>
            </form>

            <!-- Sign In Form -->
            <form action="signin.php" method="post">
                <h2 class="text-center mt-3">Sign In</h2>
                <input type="text" id="signin-username" name="signin-username" required placeholder="username">
                <input type="password" id="signin-password" name="signin-password" required class="passwords mt-3" placeholder="password">
                <button type="submit">Sign In</button>
            </form>
        </div>
    </div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="js/login.js" type="module"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="welcome.css">
</head>
<body class="login-page">
    <div class="wrapper">
        <form action="auth.php" method="POST">
            <h1>Login</h1>

            <?php if(isset($_GET['error'])): ?>
                <p class="error">Username atau Password salah</p>
            <?php endif; ?>

            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <i class='bx bx-user'></i>
            </div>

            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class='bx bx-lock'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="#">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>

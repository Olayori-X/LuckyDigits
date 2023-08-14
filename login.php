<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "loginSignupstyle.css">
    </head>
    
    <body>
        <header>
            <h1>🎰 Lucky Digits 🎰</h1>
        </header>

        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Rules</a>
            <a href="#">Contact</a>
        </nav>

        <div id = "body">
            <div id="forms-container">
                <h2>Welcome to the Lottery Casino</h2>

                <div id="login-form">
                    <h3>Login</h3>
                    
                    <form action = "checkuser.php" method = "post">
                        <label for="login-username">Username</label>
                        <input type="text" id="login-username" name="login-username" required>
                        <label for="login-password">Password</label>
                        <input type="password" id="login-password" name="login-password" required>
                        <button type="submit">Login</button>
                    </form>
                </div>
                <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
            </div>
        </div>
    </body>
</html>
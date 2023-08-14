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

                <div id="signup-form">
                    <h3>Sign Up</h3>
                    
                    <form action = "createusers.php" method = "post">
                        <label for="signup-username">Username</label>
                        <input type="text" id="signup-username" name="signup-username" required>
                        <label for="signup-email">Email</label>
                        <input type="email" id="signup-email" name="signup-email" value = "<?php echo $_GET['key']; ?>" readonly>
                        <label for="signup-password">Password</label>
                        <input type="password" id="signup-password" name="signup-password" required>
                        <label for="signup-confirm-password">Confirm Password</label>
                        <input type="password" id="signup-confirm-password" name="signup-confirm-password" required>
                        <button type="submit">Sign Up</button>
                    </form>
                </div>
                
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </div>
    </body>
</html>
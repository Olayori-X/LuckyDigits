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
                <?php if(isset($_GET['message'])){?>
                    <p class = "message"><?php echo $_GET['message'];?></p>
                <?php } ?>

                <div id="signup-form">
                    <h3>Sign Up</h3>
                    
                    <form action = "reward.php" method = "post">
                        <label for="ID">Input ID</label>
                        <input type="text" id="ID" name="ID" required>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                
                <p><tab>       </tab></p>
            </div>
        </div>
    </body>
</html>
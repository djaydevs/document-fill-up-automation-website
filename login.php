<?php
include("connection.php");
?>
<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document Fill-Up Automation Website - Log in</title>
</head>
<body>
    <div class="top-nav">
        <img class="logo" src="assets/fatimalogo.svg" alt="logo">      
        <form action="authentication.php" method="POST">
            <h2>LOGIN</h2>        
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>        
            <label>Username:</label>
            <input type="text" name="uname" placeholder="Username"><br>

            <label>Password:</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
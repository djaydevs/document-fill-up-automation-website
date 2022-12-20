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
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/login.css ?v=<?php echo time(); ?>">
    <title>Document Fill-Up Automation Website - Log in</title>
</head>
<body>
    <!-- LOGIN FORM -->
    <div class="grid-container">
        <div class="leftsection">
            <img src="css/assets/logovector.svg" alt="">
            <p class="title">Document Fill-Up Automation</p>
            <p class="description">Document request and fill-up is now easy and convenient!</p>
        </div>
        <div class="rightsection">      
            <form action="authentication.php" method="POST">
                <h2>LOGIN</h2>        
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>        
                <label>Username:</label><br>
                <input type="text" name="uname" class="input-user" placeholder="Username"><br>

                <label>Password:</label><br>
                <input type="password" name="password" class="input-pass" placeholder="Password"><br>

                <input type="submit" class="btn-login" value="LOGIN">
        </div>
    </div>
</body>
</html>
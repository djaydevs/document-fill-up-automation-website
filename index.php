<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/splash.css ?v=<?php echo time(); ?>">
    <title>Document Fill-Up Automation</title>
</head>
<!-- LOADING SCREEN -->
<body> 
    <div id="splash">
        <img class="imglogo" src="css/assets/logovector.svg" alt="">
        <h1 class="fs-primary-heading fw-bold" id="title">Document Fill-Up Automation</h1>
    </div>
    <div class="load">
        <img class="loading" src="css/assets/load.gif" alt="">
    </div>
    <!-- 3 SECONDS TIMER -->
    <script>
        function Redirect() {  
            window.location="request.php"; 
        } setTimeout('Redirect()', 3000);   
    </script>
</body>
</html>
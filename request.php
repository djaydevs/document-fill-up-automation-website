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
    <link rel="stylesheet" href="request.css ?v=<?php echo time(); ?>">
    <title>Document Fill-Up - Request Document</title>
</head>
<body>
    <div class="grid-container">
        <div class="leftsection">
            <img src="assets/logovector.svg" alt="">
            <p class="title">Document Fill-Up Automation</p>
            <p class="description">Document request and fill-up is now easy and convenient!</p>
        </div>
        <div class="rightsection">
            <form action="" method="POST">
                <h2>Request Document</h2> 
                <div class="user-input">     
                    <label>Resident No. :</label>
                    <input type="text" name="residentnum" placeholder="Ex. 202201" class="input-rin"><br>
                    <label>Name : </label>
                    <input type="text" name="residentname" placeholder="Firstname MI. Surname" class="input-name"><br>
                </div>
                <div class="select-menu">
                    <div class="select-btn">
                        <span class="sBtn-text">Purpose of Document</span>
                        <i class="bx bx-chevron-down"></i>
                    </div>
                    <ul class="options">
                        <li class="option"><span class="option-text">Scholarship</span></li>
                        <li class="option"><span class="option-text">Food Assistance</span></li>
                        <li class="option"><span class="option-text">Medical Assistance</span></li>
                        <li class="option"><span class="option-text">Cash Assistance</span></li>
                        <li class="option"><span class="option-text">Educational Assistance</span></li>
                        <li class="option"><span class="option-text">Police Clearance</span></li>
                        <li class="option"><span class="option-text">Employment</span></li>
                    </ul>
                </div>
                <div class ="select-doc">
                        <span class="choosedocument">Choose Document</span>
                        <input type="radio" id="rdCOI" class="rdCOI" name="choosedoc" value="Certificate of Indgency">
                        <label for="html">Certificate of Indigency</label> <br>
                        <input type="radio" id="rdCOR" class="rdCOR" name="choosedoc" value="Certificate of Residency">
                        <label for="html">Certificate of Residency</label> <br>
                        <input type="radio" id="rdCOC" class="rdCOc" name="choosedoc" value="Barangay Clearance">
                        <label for="html">Barangay Clearance</label> <br>
                </div>
                <input type="submit" class="btn-send" value="SEND REQUEST">
            </form>
            <a href="http://localhost/document-fill-up-automation-website/login.php" class="link">Administrator</a>
        </div>
    </div>
    <script src="request.js"></script>
</body>
</html>
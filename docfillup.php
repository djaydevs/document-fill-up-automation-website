<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="docfillup.css ?v=<?php echo time(); ?>">
    <title>Document Fill-Up Automation Website</title>
</head>
<body>
    <nav class="topnav">
        <img class="logo" src="assets/fatimalogo.svg" alt="logo">
        <p class="tntitle">Barangay Fatima 1</p>
        <ul>
            <li><a href="#">Account</a>
                <ul class="ul-acc">
                    <li class="ul-li-acc"><a href="">Admin</a></li>
                    <li class="ul-li-acc"><a href="request.php">Log Out</a></li>
                </ul>
            </li>
            <li><a href="residentsdata.php">Residents Data</a>
                <ul>
                    <li><a href="residentsdata.php">Residents Table View</a></li>
                    <li><a href="create.php">Residents Registration</a></li>
                    <li><a href="">Residents Modification</a></li>
                </ul>
            </li>
            <li><a class="active" href="#">Document Fill-Up</a>
                <ul>
                    <li><a href="indigency.php">Certificate of Indigency</a></li>
                    <li><a href="residency.php">Certificate of Residency</a></li>
                    <li><a href="clearance.php">Barangay Clearance</a></li>
                </ul>
            </li>
        </ul>
    </nav>
<!--
    <div class="grid-container">
            <div class="left-section">
                <form>
                    <div class ="select-doc">
                        <span class="choosedocument">Choose Document</span><br>
                        <input type="radio" id="rdCOI" name="choosedoc" value="Certificate of Indgency">
                        <label for="html">Certificate of Indigency</label>
                        <input type="radio" id="rdCOR" name="choosedoc" value="Certificate of Residency">
                        <label for="html">Certificate of Residency</label>
                        <input type="radio" id="rdCOR" name="choosedoc" value="Barangay Clearance">
                        <label for="html">Barangay Clearance</label>
                    </div>
                    <div class="choose-purpose">
                        <label for ="purpose">Purpose</label><br>
                        <select  name="purpose" id="purpose" required>
                            <option value="Scholarship">Scholarship</option>
                            <option value="Food Assistance">Food Assistance</option>
                            <option value="Medical Assistance">Medical Assistance</option>
                            <option value="Cash Assistance">Cash Assistance</option>
                            <option value="Educational Assistance">Educational Assitance</option>
                            <option value="Police Clearance">Police Clearance</option>
                            <option value="Employment">Employment</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="right-section">
        </div>
    </div>


    <div class="select-menu">
                    <div class="select-btn">
                        <span class="sBtn-text">Purpose of Document</span>
                        <i class="bx bx-chevron-down"></i>
                    </div>
                    <ul class="options">
                        <li class="option"><span class="option-text" name="purpose" value="Scholarship">Scholarship</span></li>
                        <li class="option"><span class="option-text" name="purpose" value="Food Assistance">Food Assistance</span></li>
                        <li class="option"><span class="option-text" name="purpose" value="Medical Assistance">Medical Assistance</span></li>
                        <li class="option"><span class="option-text">Cash Assistance</span></li>
                        <li class="option"><span class="option-text">Educational Assistance</span></li>
                        <li class="option"><span class="option-text">Police Clearance</span></li>
                        <li class="option"><span class="option-text">Employment</span></li>
                    </ul>
                </div>
-->
</body>
</html>
<?php
// SESSION FOR ALERT
session_start();
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
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel="stylesheet">
    <link rel="stylesheet" href="css/create.css?v=<?php echo time(); ?>">
    <title>Document Fill-Up Automation Website - Resident Registration Form</title>
</head>
<body>
   <!-- NAVIGATION BAR -->
   <nav class="topnav"> 
            <img class="logo" src="css/assets/fatimalogo.svg" alt="logo">
            <p class="tntitle">Barangay Fatima 1</p>
            <ul>
                <li><a href="#">Account</a>
                    <ul class="ul-acc">
                        <li class="ul-li-acc"><a href="">Admin</a></li>
                        <li class="ul-li-acc"><a href="index.php">Log Out</a></li>
                    </ul>
                </li>
                <li><a class="active" href="residentsdata.php">Residents Data</a>
                    <ul>
                        <li><a href="residentsdata.php">Residents Table View</a></li>
                        <li><a class="active" href="create.php">Residents Registration</a></li>
                    </ul>
                </li>
                <li><a href="documentfillup.php">Document Fill-Up</a></li>
            </ul>
    </nav>
    
    <div class="container"> 
        <div class="left-column">
            <!-- REGISTRATION FORM -->
            <form action="crud.php" method="POST" class="residents-form">
                <h1 class="form-title">Residents Registration</h2>
                <!-- RESIDENT NAME -->
                <div class="user_info">
                    <div class="input_lname">
                        <label for="lname">Last Name</label><br>
                        <input type="text" name="lname" id="lname" placeholder="Enter your last name" required>
                    </div>
                    <div class="input_fname">
                        <label for="fname">First Name</label><br>
                        <input type="text" name="fname" id="fname"  placeholder="Enter your first name"required>
                    </div>
                    <div class="input_mi">
                        <label for="mi">Middle Initial</label><br>
                        <input type="text" name="initial" id="initial"  placeholder="Enter your middle initial"required>
                    </div>

                </div>
                <!-- RESIDENT ADDRESS -->
                <div class="user_address">
                    <label for="address">Address</label>
                    <br>
                    <input type="number" name="housenum" id="housenum"  placeholder="Enter house number" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="street" id="street"  placeholder="Enter street" required>
                </div>
                <!-- RESIDENT GENDER -->
                <div class="rbtn_gender">
                    <span class="gender-title">Gender</span>
                    <input type="radio" name="gender"  id="gender" value="Male"> Male
                    <input type="radio" name="gender"  id="gender" value="Female"> Female
                </div>
                <!-- RESIDENT AGE AND YEAR OF STAY-->
                <div class="userAY">

                    <div class="u-age">
                        <label for="age">Age</label><br>
                        <input type="number" name="age" id="age"  placeholder="Enter your age" required>
                    </div>

                    <div class="u-stay">
                        <label for="yearofstay">Year of stay</label><br>
                        <input type="number" name="yos" id="yos" placeholder="Enter year of stay" required>
                    </div>
                </div>
                <!-- RESIDENT BIRTHDAY AND BIRTHPLACE -->
                <div class="u-bp">
                    <div class="u-bday">
                        <label for="birthday">Date of birth</label><br>
                        <input type="date" name="bday" id="bday" placeholder="Enter your birthday">
                    </div>

                    <div class="u-bplace">
                    <label for="birthplace">Place of birth</label><br>
                    <input type="text" name="bplace"  id="bplace" placeholder="Enter your birthplace" required>
                    </div>
                </div>
                <!-- RESIDENT CONTACT -->
                <div class="contact">
                    <label for="contactnum">Contact number</label>
                    <br>
                    <input type="number" name="contact" id="contact" placeholder="Enter your contact number" required> 
                </div>
                <!-- SAVE AND GO BACK BUTTON -->
                <div class="form-btn">
                <input type="submit" value="SAVE" class="btn-save" name="save_record">
                <a href="residentsdata.php" class="btn-back">Back</a>
                </div>
            </form>
        </div>
    </div> 
</body>
</html>
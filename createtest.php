<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Residents Data</title>
</head>
<body>
    <?php include('alert.php'); ?>
    <div class="container"> 
    <h1 class="form-title">Residents Registration</h2>
    <form action="crud.php" method="POST">
                <div>
                <label for="lname">Last Name</label>
                <input type="text" name="lname"  placeholder="Enter your last name">
                </div>

                <div class>
                <label for="lname">First Name</label>
                <input type="text" name="fname"  placeholder="Enter your first name">
                </div>

                
                <div class>
                <label for="lname">Middle Initial</label>
                <input type="text" name="initial"  placeholder="Enter your middle initial">
                </div>

                <div class>
                <label for="lname">Address</label>
                <input type="number" name="housenum"  placeholder="Enter house number" >
                <input type="text" name="street"  placeholder="Enter street">
                </div>

                <div class>
                    <span class="gender-title">Gender</span>
                    <input type="radio" name="gender"  value="Male"> Male
                    <input type="radio" name="gender"  value="Female"> Female
                </div>

                <div class>
                    <label for="age">Age</label>
                    <input type="number" name="age"  placeholder="Enter your age" >
                </div>

                <div class>
                    <label for="yearofstay">Year of stay</label>
                    <input type="number" name="yos"  placeholder="Enter year of stay">
                </div>

                <div class>
                    <label for="birthday">Date of birth</label>
                    <input type="date" name="bday" placeholder="Enter your birthday">
                </div>

                <div class>
                <label for="birthplace">Place of birth</label>
                <input type="text" name="bplace" placeholder="Enter your birthplace">
                </div>

                <div class>
                    <label for="contactnum">Contact number</label>
                    <input type="number" name="contact" placeholder="Enter your contact number">
                </div>
                <div class>
                    <button type="submit" name="save_record" >Save</button>
                </div>
                <div class>
                    <a href="residentsdata.php">Back</a>
                </div>
    </form>
</div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
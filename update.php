<?php
session_start();
require 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residents Data</title>
</head>
<body>
    <?php include('alert.php'); ?>
    <div class="container"> 
    <h1 class="form-title">Edit Residents Data</h2>
    <?php 
        if(isset($_GET['rin'])){

            $residents_rin = mysqli_real_escape_string($conn, $_GET['rin']);
            $sql = "SELECT * FROM table_residents WHERE rin='$residents_rin' ";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                
                $row = mysqli_fetch_array($result);
                ?>
                
            <form action="crud.php" method="POST">
            <input type="hidden" name="residents_rin"  value="<?=$row ['rin'];?>">
                <div>
                <label for="lname">Last Name</label>
                <input type="text" name="lname"  placeholder="Enter your last name" value="<?=$row['lname'];?>">
                </div>

                <div class>
                <label for="lname">First Name</label>
                <input type="text" name="fname"  placeholder="Enter your first name" value="<?=$row['fname'];?>">
                </div>

                
                <div class>
                <label for="lname">Middle Initial</label>
                <input type="text" name="initial"  placeholder="Enter your middle initial" value="<?=$row['mi'];?>">
                </div>

                <div class>
                <label for="lname">Address</label>
                <input type="number" name="housenum"  placeholder="Enter house number" value="<?=$row['housenum'];?>">
                <input type="text" name="street"  placeholder="Enter street" value="<?=$row['street'];?>">
                </div>

                <div class>
                    <span class="gender-title">Gender</span>
                    <input type="radio" name="gender"  value="Male"> Male
                    <input type="radio" name="gender"  value="Female"> Female
                </div>

                <div class>
                    <label for="age">Age</label>
                    <input type="number" name="age"  placeholder="Enter your age" value="<?=$row['age'];?>" >
                </div>

                <div class>
                    <label for="yearofstay">Year of stay</label>
                    <input type="number" name="yos"  placeholder="Enter year of stay"value="<?=$row['yearofstay'];?>">
                </div>

                <div class>
                    <label for="birthday">Date of birth</label>
                    <input type="date" name="bday" placeholder="Enter your birthday" value="<?=$row['birthday'];?>">
                </div>

                <div class>
                <label for="birthplace">Place of birth</label>
                <input type="text" name="bplace" placeholder="Enter your birthplace" value="<?=$row['birthplace'];?>">
                </div>

                <div class>
                    <label for="contactnum">Contact number</label>
                    <input type="number" name="contact" placeholder="Enter your contact number" value="<?=$row['contact'];?>">
                </div>
                <div class>
                    <button type="submit" name="update_record" >Update</button>
                </div>
                <div class>
                    <a href="residentsdata.php">Back</a>
                </div>
            </form>
            <?php
                

            } else {
                echo"No Such RIN Found";
            }
        }  
    ?>    
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>   
</body>
</html>
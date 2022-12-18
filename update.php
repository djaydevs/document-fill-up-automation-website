<?php
require 'connection.php';

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
    <link rel="stylesheet" href="create.css?v=<?php echo time(); ?>">
    <title>Residents Data</title>
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
    <div class="container"> 
    <?php 
        if(isset($_GET['rin'])){

            $residents_rin = mysqli_real_escape_string($conn, $_GET['rin']);
            $sql = "SELECT * FROM table_residents WHERE rin='$residents_rin' ";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                
                $row = mysqli_fetch_array($result);
                ?>
        <div class="left-column">       
            <form action="crud.php" method="POST" class="residents-form">
            <h1 class="form-title">Edit Residents Data</h2>
            <input type="hidden" name="residents_rin"  value="<?=$row ['rin'];?>">
                <div class="user_info">
                    <div class="input_lname">
                    <label for="lname">Last Name</label><br>
                    <input type="text" name="lname" id="lname"   placeholder="Enter your last name" value="<?=$row['lname'];?>">
                    </div>

                    <div class="input_fname">
                    <label for="fname">First Name</label><br>
                    <input type="text" name="fname" id="fname"   placeholder="Enter your first name" value="<?=$row['fname'];?>">
                    </div>

                    
                    <div class="input_mi">
                    <label for="mi">Middle Initial</label><br>
                    <input type="text" name="initial" id="initial" placeholder="Enter your middle initial" value="<?=$row['mi'];?>">
                    </div>
                </div>

                <div class="user_address">
                    <label for="address">Address</label>
                    <br>
                    <input type="number" name="housenum" id="housenum"  placeholder="Enter house number" value="<?=$row['housenum'];?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="street" id="street" placeholder="Enter street" value="<?=$row['street'];?>">
                </div>

                <div class="rbtn_gender">
                    <span class="gender-title">Gender</span>
                    <input type="radio" name="gender"  id="gender" value="Male"> Male
                    <input type="radio" name="gender"   id="gender" value="Female"> Female
                </div>

                <div class="userAY">
                    <div class="u-age">
                        <label for="age">Age</label><br>
                        <input type="number" name="age" id="age"  placeholder="Enter your age" value="<?=$row['age'];?>" >
                    </div>

                    <div class="u-stay">
                        <label for="yearofstay">Year of stay</label><br>
                        <input type="number" name="yos" id="yos" placeholder="Enter year of stay"value="<?=$row['yearofstay'];?>">
                    </div>
                </div>
                <div class="u-bp">
                    <div class="u-bday">
                        <label for="birthday">Date of birth</label><br>
                        <input type="date" name="bday" id="bday" placeholder="Enter your birthday" value="<?=$row['birthday'];?>">
                    </div>

                    <div class="u-bplace">
                    <label for="birthplace">Place of birth</label><br>
                    <input type="text" name="bplace" id="bplace" placeholder="Enter your birthplace" value="<?=$row['birthplace'];?>">
                    </div>
                </div>

                <div class="contact">
                    <label for="contactnum">Contact number</label>
                    <br>
                    <input type="number" name="contact" id="contact" placeholder="Enter your contact number" value="<?=$row['contact'];?>">
                </div>

                <div class="form-btn">
                    <button type="submit" name="update_record" class="btn-save" >Update</button>
                    <a href="residentsdata.php" class="btn-back">Back</a>
                </div>
                
            </form>
            <?php
                

            } else {
                echo"No Such RIN Found";
            }
        }  
    ?>    
        </div>
    </div>   
</body>
</html>
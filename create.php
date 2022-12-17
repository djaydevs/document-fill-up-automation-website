<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "brgydb";

//Create connection
$connection = new mysqli($servername, $username, $password, $database);

$Lname = "";
$Fname = "";
$Initial = "";
$Housenum = "";
$Street = "";
$Gender = "";
$Age = "";
$Yos = "";
$Bday = "";
$Bplace = "";
$Contact = "";

$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Lname = $_POST["lname"];
    $Fname = $_POST["fname"];
    $Initial = $_POST["initial"];
    $Housenum = $_POST["housenum"];
    $Street = $_POST["street"];
    $Gender = $_POST["gender"];
    $Age = $_POST["age"];
    $Yos = $_POST["yos"];
    $Bday = $_POST["bday"];
    $Bplace = $_POST["bplace"];
    $Contact = $_POST["contact"];

    do {
        if ( empty($Lname) || empty ($Fname) || empty ($Initial) ) {
            $errorMessage = "All the fields are required";
            break;
        }

        //add new record to database
        $sql = "INSERT INTO table_residents (lname, fname, mi, housenum, street, gender, age,
                yearofstay, birthday, birthplace, contact)" . "VALUES('$Lname', '$Fname', 
                '$Initial', '$Housenum', '$Street', '$Gender', '$Age', '$Yos', '$Bday',
                '$Bplace ', '$Contact')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query:" . $connection->error;
            break;
        }

        $Lname = "";
        $Fname = "";
        $Initial = "";
        $Housenum = "";
        $Street = "";
        $Gender = "";
        $Age = "";
        $Yos = "";
        $Bday = "";
        $Bplace = "";
        $Contact = "";

        $successMessage = "Record added succesfully";
        header("location: /document-fill-up-automation-website/residentsdata.php");
        exit;

    }while (false);
}

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
    <link rel="stylesheet" href="residentsdata.css">
    <title>Document Fill-Up Automation Website - Resident Data</title>
</head>
<body>
    <!-- Registration Form -->
    <div class="topnav">
        <img class="logo" src="assets/fatimalogo.svg" alt="logo">
        <p class="tntitle">Barangay Fatima 1</p>
        <nav>
            <ul>
                <li><a href="#">Account</a></li>
                <li><a class="active" href="#">Residents Data</a></li>
                <li><a href="#">Document Fill-Up</a></li>
            </ul>
        </nav>
    </div>
        <div class="container">
            <?php
            if ( !empty($errorMessage)) {
                echo "
                    <div class='alert alert-warning alert-dismissable fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-cloase' data-bs-dismiss='alert' aria=label='Close'></button>
                </div>
                ";
            }
            ?>
            <div class="left-column">
                <form method="POST" id="form" class="residents-form">
                    <h1 class="form-title">Residents Registration</h1>

                    <div class="user_info">
                        <div class="input_lname">
                            <label for="lname">Last Name</label><br>
                            <input type="text" name="lname" id="lname" placeholder="Enter your last name" value="<?php echo $Lname;?>">
                        </div>
                        <div class="input_fname">
                            <label for="lname">First Name</label><br>
                            <input type="text" name="fname" id="fname" placeholder="Enter your first name" value="<?php echo $Fname;?>">                
                        </div>
                        <div class="input_mi">
                        <label for="lname">Middle Initial</label><br>
                        <input type="text" name="initial" id="initial" placeholder="Enter your middle initial" value="<?php echo $Initial;?>">
                        </div>
                    </div>

                    <div class="user_address">
                        <label for="lname">Address</label>
                        <br>
                        <input type="number" name="housenum" id="housenum" placeholder="Enter house number" value="<?php echo $Housenum;?>"> &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="street" id="street" placeholder="Enter street" value="<?php echo $Street?>">
                    </div>

                    <div class="rbtn_gender">
                        <span class="gender-title">Gender</span>
                        <input type="radio" name="gender" id="gender" value="Male"> Male
                        <input type="radio" name="gender" id="gender" value="Female"> Female
                    </div>

                    <div class=userAY>
                        <div class="u-age">
                            <label for="age">Age</label><br>
                            <input type="number" name="age" id="age" placeholder="Enter your age" value="<?php echo $Age;?>">
                        </div>

                        <div class="u-stay">
                            <label for="yearofstay">Year of stay</label><br>
                            <input type="number" name="yos" id="yos" placeholder="Enter year of stay" value="<?php echo $Yos;?>">
                        </div>
                    </div>

                    <div class="u-bp">
                        <div class="u-bday">
                            <label for="birthday">Date of birth</label><br>
                            <input type="date" name="bday" id="bday" placeholder="Enter your birthday" value="<?php echo $Bday;?>">
                        </div>

                        <div class="u-bplace">
                            <label for="birthplace">Place of birth</label><br>
                            <input type="text" name="bplace" id="bplace" placeholder="Enter your birthplace" value="<?php echo $Bplace;?>">
                        </div>
                    </div>

                    <div class="contact">
                        <label for="contactnum">Contact number</label>
                        <br>
                        <input type="number" name="contact" id="contact" placeholder="Enter your contact number" value="<?php echo $Contact;?>">
                    </div>

                    <?php
                    if ( !empty($errorMessage)) {
                        echo "
                        <div class='alert alert-warning alert-dismissable fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-cloase' data-bs-dismiss='alert' aria=label='Close'></button>
                        </div>
                        ";
                    }
                    ?>

                    <div class="form-btn">
                        <input type="submit" value="SAVE" class="btn-save" id="save">
                        <!--<a href="/document-fill-up-automation-website/residentsdata.php" class="btn-cancel" role=""button>Cancel</a>-->
                        <input type="reset" value="CANCEL" class="btn-save" onclick="residentsdata.php">
                    </div>
                </form>
            </div>
        </div>
    
    
</body>
</html>
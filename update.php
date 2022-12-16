<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "brgydb";

//Create connection
$connection = new mysqli($servername, $username, $password, $database);

$Rin = "";
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

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET method: Show the data of the client

    if( !isset($_GET["rin"]) ) {
        header("location:/document-fill-up-automation-website/residentsdata.php");
        exit;
    }

    $Rin = $_GET["rin"];

    // read the row of the selected record from the database table
    $sql = "SELECT * FROM table_residents WHERE rin=$Rin";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:/document-fill-up-automation-website/residentsdata.php");
        exit;
    }

    $Lname = $row["lname"];
    $Fname = $row["fname"];
    $Initial = $row["mi"];
    $Housenum = $row["housenum"];
    $Street = $row["street"];
    $Gender = $row["gender"];
    $Age = $row["age"];
    $Yos = $row["yearofstay"];
    $Bday = $row["birthday"];
    $Bplace = $row["birthplace"];
    $Contact = $row["contact"];

}
else {
    //POST method: Update the data of the residents

    $Rin = $_POST["rin"];
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

    do{
        if ( empty($Lname) || empty ($Fname) || empty ($Initial) ) {
            $errorMessage = "All the fields are required";
            break;
        }  
         
        $sql = "UPDATE table_residents" .
        "SET lname='$Lname', fname='$Fname', mi='$Initial', housenum='$Housenum', street='$Street',
         gender='$Gender', age='$Age', yearofstay='$Yos', birthday='$Bday', 
         birthplace='$Bplace', contact='$Contact' " .
        "WHERE rin = $Rin";
               
        $result = $connection->query($sql);

            if (!$result) {
                $errorMessage = "Invalid query:" . $connection->error;
                break;
            }
            $successMessage = "Record updated succesfully";

            header("location: /document-fill-up-automation-website/residentsdata.php");
            exit;
               
    } while (false);

}

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
    <!-- Registration Form -->
    <div class="container">
        <h1 class="form-title">Residents Registration</h2>
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
            <form method="POST" id="form" class="residents-form">
                <input type="text" name="rin" value="<?php echo $Rin;?>">
                <div class>
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="fname" placeholder="Enter your last name" value="<?php echo $Lname;?>">
                </div>

                <div class>
                <label for="lname">First Name</label>
                <input type="text" name="fname" id="fname" placeholder="Enter your first name" value="<?php echo $Fname;?>">
                </div>

                
                <div class>
                <label for="lname">Middle Initial</label>
                <input type="text" name="initial" id="initial" placeholder="Enter your middle initial" value="<?php echo $Initial;?>">
                </div>

                <div class>
                <label for="lname">Address</label>
                <input type="number" name="housenum" id="housenum" placeholder="Enter house number" value="<?php echo $Housenum;?>">
                <input type="text" name="street" id="street" placeholder="Enter street" value="<?php echo $Street?>">
                </div>

                <div class>
                    <span class="gender-title">Gender</span>
                    <input type="radio" name="gender" id="gender" value="<?php echo $Gender?>"> Male
                    <input type="radio" name="gender" id="gender" value="<?php echo $Gender?>"> Female
                </div>

                <div class>
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" placeholder="Enter your age" value="<?php echo $Age;?>">
                </div>

                <div class>
                    <label for="yearofstay">Year of stay</label>
                    <input type="number" name="yos" id="yos" placeholder="Enter year of stay" value="<?php echo $Yos;?>">
                </div>

                <div class>
                    <label for="birthday">Date of birth</label>
                    <input type="date" name="bday" id="bday" placeholder="Enter your birthday" value="<?php echo $Bday;?>">
                </div>

                <div class>
                <label for="birthplace">Place of birth</label>
                <input type="text" name="bplace" id="bplace" placeholder="Enter your birthplace" value="<?php echo $Bplace;?>">
                </div>

                <div class>
                    <label for="contactnum">Contact number</label>
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

                <div class>
                    <button type="submt">Save</button>
                </div>
                <div class>
                    <a href="/document-fill-up-automation-website/residentsdata.php" role=""button>Cancel</a>
                </div>
            </form>
    </div>
    
</body>
</html>
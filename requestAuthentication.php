<?php
session_start();
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "brgydb";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    die('Connection Failed'. mysqli_connect_error());
}

if(isset($_POST ["request"])) {
    if(!empty($_POST["residentnum"]))
    {
        $rin = $_POST['residentnum'];
        $sql = "SELECT * FROM table_residents WHERE rin='$rin'";
        $result = mysqli_query($conn, $sql);

        $rname = $_POST['residentname'];
        $purpose = $_POST['purpose'];
        $choosedoc = $_POST['choosedoc'];

        if (mysqli_num_rows($result)== 1) {
            $sql = ("INSERT INTO tbl_request(residentnum, name, purpose, document) VALUES ('$rin', '$rname', '$purpose', '$choosedoc')");
            $results = mysqli_query($conn, $sql);

            $_SESSION['status']= "Request Sent Successfully !";
            header("Location: request.php");
            exit();

        }else {
            header("Location: request.php?error=Resident data doesn't exist.");
            #exit();
        }
    }elseif(empty($residentname)) 
    {
        header("Location:request.php?error=Resident name is required.");
        #exit();
    }elseif(empty($_POST['purpose'])) {
        header("Location:request.php?error=Please choose a Purpose.");
    }elseif(empty($_POST['choosedoc'])) {
        header("Location:request.php?error=Please choose a Certificate.");
    }
}
?>

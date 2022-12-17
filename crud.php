<?php
session_start();
require 'connection.php';

if(isset($_POST['save_record']))
{
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $initial = mysqli_real_escape_string($conn, $_POST['initial']);
    $housenum = mysqli_real_escape_string($conn, $_POST['housenum']);
    $street = mysqli_real_escape_string($conn, $_POST['street']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $yos = mysqli_real_escape_string($conn, $_POST['yos']);
    $bday = mysqli_real_escape_string($conn, $_POST['bday']);
    $bplace = mysqli_real_escape_string($conn, $_POST['bplace']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);

    $sql = "INSERT INTO table_residents (lname, fname, mi, housenum, street, gender, age,
        yearofstay, birthday, birthplace, contact)  VALUES ('$lname', '$fname', 
        '$initial', '$housenum', '$street', '$gender', '$age', '$yos', '$bday',
        '$bplace ', '$contact')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION['alert']= "Residents Data Added Successfully !";
        header("Location: createtest.php");
        exit(0);
    }
    else {
        $_SESSION['alert']= "Residents Data failed to save !";
        header("Location: createtest.php");
        exit(0);
    }
}

if(isset($_POST['update_record'])){
    $residents_rin = mysqli_real_escape_string($conn, $_POST['residents_rin']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $initial = mysqli_real_escape_string($conn, $_POST['initial']);
    $housenum = mysqli_real_escape_string($conn, $_POST['housenum']);
    $street = mysqli_real_escape_string($conn, $_POST['street']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $yos = mysqli_real_escape_string($conn, $_POST['yos']);
    $bday = mysqli_real_escape_string($conn, $_POST['bday']);
    $bplace = mysqli_real_escape_string($conn, $_POST['bplace']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);

    $sql = "UPDATE table_residents SET lname='$lname', fname='$fname', mi='$initial', housenum='$housenum', street='$street', 
        gender='$gender', age='$age', yearofstay='$yos', birthday='$bday', birthplace='$bplace', contact='$contact' WHERE rin='$residents_rin' ";
    
    $result = mysqli_query($conn, $sql);

    if($result){

        $_SESSION['alert']= "Residents Data Updated Successfully !";
        header("Location: residentsdata.php");
        exit(0);

    }else {

        $_SESSION['alert']= "Residents Data failed to update !";
        header("Location: residentsdata.php");
        exit(0);

    }
}

if(isset($_POST['delete_record'])) {
    $residents_rin = mysqli_real_escape_string($conn, $_POST['delete_record']);

    $sql = "DELETE FROM table_residents WHERE rin='$residents_rin' ";
    $result = mysqli_query($conn, $sql);

    if($result){

        $_SESSION['alert']= "Residents Data Deleted Successfully !";
        header("Location: residentsdata.php");
        exit(0);

    }else {

        $_SESSION['alert']= "Residents Data failed to delete !";
        header("Location: residentsdata.php");
        exit(0);

    }



}
?>
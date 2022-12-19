<?php
    session_start();
    require "connection.php";
    
    if(isset($_POST['btncreate'])){

        //CROSS JOIN to merge the two tables
        $residents_rin = mysqli_real_escape_string($conn, $_GET['residentnum']);
        $sql = "INSERT INTO transaction (fname, mi, lname, age, yearofstay, housenum, street, purpose) SELECT table_residents.fname, table_residents.mi, table_residents.lname, 
        table_residents.age, table_residents.yearofstay, table_residents.housenum, table_residents.street, 
        tbl_request.purpose FROM table_residents CROSS JOIN tbl_request";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result)) {
        //to print the data from database
        echo "Name: " .$row['fname'], " " . $row['mi'], ". " . $row['lname'], "<br>";
        echo "Age: " . $row['age'], "<br>";
        echo "Year of Stay: " . $row['yearofstay'], "<br>";
        echo "Adress: " .$row['housenum'], " " . $row['street'], "<br>";
        echo "Purpose:" . $row['purpose'], "<br>";
        echo "<br>";
        }
    }
    
    //delete the record from the database
    if(isset($_POST['btn-delete'])) {
        $residents_rin = mysqli_real_escape_string($conn, $_POST['btn-delete']);
    
        $sql = "DELETE FROM tbl_request WHERE residentnum='$residents_rin' ";
        $result = mysqli_query($conn, $sql);
    
        if($result){
    
            $_SESSION['status']= "Residents Data Deleted Successfully !";
            header("Location: documentfillup.php");
    
        }else {
    
            $_SESSION['status']= "Residents Data failed to delete !";
            header("Location: documentfillup.php");
    
        }
    }
?>
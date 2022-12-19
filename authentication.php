<?php
include("connection.php");
session_start();

    //get the data from the user input
    if (isset($_POST['uname']) && isset($_POST['password'])) {

        //validate the data
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $uname = validate($_POST['uname']);
        $pass = validate($_POST['password']);

        //condition to check if the username and password are empty or not
        if(empty($uname)) {
            header("Location: login.php?error=Username is required");
            exit();
        }else if(empty($pass)){
            header("Location: login.php?error=Password is required");
            exit();
        }else{    
            //compare the data from the database and user input              
            $sql = "SELECT * FROM tbl_user WHERE username='$uname' AND password='$pass'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result)== 1) {
                $row = mysqli_fetch_assoc($result);
                if($row['username'] === $uname && $row['password'] === $pass) 
                {
                    header("Location: documentfillup.php");
                    exit();
                }                
            }else {
                header("Location: login.php?error=Incorrect Username or password");
                exit();
            }
        }
    }else{
        header("Location: login.php");
        exit();
    }
?>
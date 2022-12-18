<?php require "connection.php"; ?>
<?php
    session_start();
    require "connection.php";

    if(isset($_GET['residentnum'])){
        //CROSS JOIN to merge the two tables
        $residents_rin = mysqli_real_escape_string($conn, $_GET['residentnum']);
        $sql = "INSERT INTO transaction (fname, mi, lname, age, yearofstay, housenum, street, purpose) SELECT table_residents.fname, table_residents.mi, table_residents.lname, 
        table_residents.age, table_residents.yearofstay, table_residents.housenum, table_residents.street, 
        tbl_request.purpose FROM table_residents CROSS JOIN tbl_request";
        $result = mysqli_query($conn, $sql);
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="documentfillup.css ?v=<?php echo time(); ?>">
    <title>Document Fill-Up Automation - Certificate of Indigency</title>
</head>
<body>
    <!-- NAVIGATION BAR -->
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
                </ul>
            </li>
            <li><a class="active" href="documentfillup.php">Document Fill-Up</a></li>
        </ul>
    </nav>
    <!-- GRID -->
    <div class="grid-container">
        <div class="request-container">  <!-- LEFT SECTION -->
            <!-- ON CLICK SWITCH DOCUMENT -->
            <div class="switchdoc">
                <button class="btndoc" onclick="switchDoc1()" >Certificate of Indigency</button><br>
                <button class="btndoc" onclick="switchDoc2()" >Certificate of Residency</button><br>
                <button class="btndoc" onclick="switchDoc3()" >Barangay Clearance</button>
            </div>
            <p class="request-text">RESIDENTS REQUEST</p>
            <!--TABLE-->
            <div class="tableview" style="overflow-x:auto;" style="overflow-y:auto;">
                <table class="request-table" id="table" >
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Resident No.</th>
                            <th>Name</th>
                            <th>Document Purpose</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT *FROM tbl_request";
                            $result = mysqli_query($conn, $sql);

                            if( mysqli_num_rows($result) > 0) {
                                foreach($result as $row){
                                    ?>
                                    <tr>
                                    <td><?= $row['reqid']; ?></td>
                                    <td><?= $row['residentnum']; ?></td>
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['purpose']; ?></td>
                                    <td>
                                        <a class="u-btn"href="documentfillup.php?residentnum=<?=$row['residentnum'];?>">Create</a>
                                        <form action="fillup.php" method="POST" class="btn-form">
                                            <button type="submit" name="btn-delete" value="<?=$row['residentnum'];?>">Delete</button>
                                        </form> 
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }else {
                                echo "No Record Found";
                            } 
                        ?>
                    </tbody>
                    <tbody style="display:none;">
                        <?php
                            $sql = "SELECT *FROM transaction";
                            $result = mysqli_query($conn, $sql);

                            if( mysqli_num_rows($result) > 0) {
                                foreach($result as $row){
                                ?>
                                    <tr>
                                        <td><?= $row['trans_id']; ?></td>
                                        <td id="firstname"><?= $row['fname']; ?></td>
                                        <td id="initial"><?= $row['mi']; ?></td>
                                        <td id="lastname"><?= $row['lname']; ?></td>
                                        <td id="age"><?= $row['age']; ?></td>
                                        <td id="yearstay"><?= $row['yearofstay']; ?></td>
                                        <td id="housenum"><?= $row['housenum']; ?></td>
                                        <td id="street"><?= $row['street']; ?></td>
                                        <td id="purpose"><?= $row['purpose']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }else {
                                echo "No Record Found";
                            } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pdf-container"> <!-- RIGHT SECTION -->
            <div class="pdf-border">
                <div id="pdf-view">
                    <!-- INPUT TYPE FOR INDIGENCY -->
                    <input type="text" name="resname" id="resname1" value="">
                    <input type="text" name="resage" id="resage1" value="">
                    <input type="text" name="resaddress" id="resaddress1" value="">
                    <input type="text" name="respurpose" id="respurpose1" value="">
                    <input type="text" name="month" id="month1" value="">
                    <input type="text" name="day" id="day1" value="">
                    <input type="text" name="year" id="year1" value="">
                    <input type="text" name="date" id="date1" value="">
                    <!-- INPUT TYPE FOR RESIDENCY -->
                    <input type="text" name="resname" id="resname2" value="">
                    <input type="text" name="resage" id="resage2" value="">
                    <input type="text" name="resaddress" id="resaddress2" value="">
                    <input type="text" name="stay" id="stay2" value="">
                    <input type="text" name="resname" id="resname_2" value="">
                    <input type="text" name="respurpose" id="respurpose2" value="">
                    <input type="text" name="month" id="month2" value="">
                    <input type="text" name="day" id="day2" value="">
                    <input type="text" name="year" id="year2" value="">
                    <input type="text" name="date" id="date2" value="">
                    <input type="text" name="resname" id="res_name_2" value="">
                    <!-- INPUT TYPE FOR CLEARANCE -->
                    <input type="text" name="resname" id="resname3" value="">
                    <input type="text" name="resage" id="resage3" value="">
                    <input type="text" name="resaddress" id="resaddress3" value="">
                    <input type="text" name="stay" id="stay3" value="">
                    <input type="text" name="respurpose" id="respurpose3" value="">
                    <input type="text" name="month" id="month3" value="">
                    <input type="text" name="day" id="day3" value="">
                    <input type="text" name="year" id="year3" value="">
                    <input type="text" name="date" id="date3" value="">
                    <input type="text" name="resname" id="resname_3" value=""
                    <!-- DOCUMENT IMAGES -->
                    <img src="assets/docindigency.svg" id="docCOI" alt="">
                    <img src="assets/docresidency.svg" id="docCOR" alt="">
                    <img src="assets/docclearance.svg" id="docCOC" alt="">
                </div>
                <button id="btnsave">Save or Print Document</button>
            </div>
        </div>
    </div>
    <!-- SCRIPT FOR SAVING/PRINTING DOCUMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script
		src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
		integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer"></script>
    
    <script src="documentfillup.js"></script>
</body>
</html>
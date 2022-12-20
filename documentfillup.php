<?php
    require 'connection.php';
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/documentfillup.css ?v=<?php echo time(); ?>">
        <title>Document Fill-Up Automation</title>
    </head>
    <body>
        <!-- NAVIGATION BAR -->
        <nav class="topnav"> 
            <img class="logo" src="css/assets/fatimalogo.svg" alt="logo">
            <p class="tntitle">Barangay Fatima 1</p>
            <ul>
                <li><a href="#">Account</a>
                    <ul class="ul-acc">
                        <li class="ul-li-acc"><a href="">Admin</a></li>
                        <li class="ul-li-acc"><a href="splash.php">Log Out</a></li>
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
                <p class="doc-text">Choose Document</p>
                <div class="switchdoc">
                    <button class="btndoc" onclick="switchDoc1()" id="COI">Certificate of Indigency</button><br>
                    <button class="btndoc" onclick="switchDoc2()" id="COR" >Certificate of Residency</button><br>
                    <button class="btndoc" onclick="switchDoc3()" id="COC" >Barangay Clearance</button>
                </div>
                <p class="request-text">Residents Request</p>
        
                <!--TABLE-->
                <div class="tableview" style="overflow-x:auto;" style="overflow-y:auto;">
                    <table class="request-table" id="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Document</th>
                                <th>Document Purpose</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                // DELETE REQUEST FROM THE DATABASE AND TABLE
                                if(isset($_POST['btn-delete'])) {
                                    $residents_rin = mysqli_real_escape_string($conn, $_POST['btn-delete']);

                                    $sql = "DELETE FROM tbl_request WHERE residentnum='$residents_rin' ";
                                    $result = mysqli_query($conn, $sql);

                                    if($result){

                                        $_SESSION['status']= "Residents Request Deleted Successfully !";
                                        header("Location: documentfillup.php");
                                        exit();

                                    }else {

                                        $_SESSION['status']= "Residents Request failed to delete !";
                                        header("Location: documentfillup.php");
                                    }
                                }
                            ?>
                            <?php //access two tables from database
                                $query = "select res.*,req.residentnum, res.*,req.document, res.*,req.purpose from table_residents res, tbl_request req where res.rin = req.residentnum";
                                $result = mysqli_query($conn, $query);
                                if(isset($_GET['rin']) == isset($_GET['residentnum'])){
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr data-toggle="tooltip" title="Click to display data.">
                                            <td> <a href="residentsdata.php" class="tb-link" data-toggle="tooltip" title="Go to residents data."><?php echo $row['rin']?></a></td>
                                            <td id="fullname"><?php echo $row['fname']?> <?php echo $row['mi']?>. <?php echo $row['lname']?></td>
                                            <td style="display:none;" id="age"><?php echo $row['age']?></td>
                                            <td style="display:none;" id="address"><?php echo $row['housenum']?> <?php echo $row['street']?></td>
                                            <td id="document"><?php echo $row['document']?></td>
                                            <td id="purpose"><?php echo $row['purpose']?></td>
                                            <td style="display:none;" id="stay"><?php echo $row['yearofstay']?></td>
                                            <td>
                                                <form method="POST" class="btn-form">
                                                    <button data-toggle="tooltip" title="Delete Request" type="submit" class="del-btn" name="btn-delete" value="<?=$row['rin'];?>" onclick="return confirmDelete();"></button>
                                                </form> 
                                            </td>
                                        </tr>
                                    <?php
                                    }
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
                        <input type="text" name="resname" id="resname_3" value="">
                        <!-- DOCUMENT IMAGES -->
                        <img src="css/assets/docindigency.svg" id="docCOI" alt="">
                        <img src="css/assets/docresidency.svg" id="docCOR" alt="">
                        <img src="css/assets/docclearance.svg" id="docCOC" alt="">
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
        <script src="js/documentfillup.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <?php include('js/scriptforstatus.php');?>
        <script>
            function confirmDelete() {
            return confirm('Are you sure you want to delete this record?');
            }
        </script>
        <!-- SCRIPT FOR TOOLTIP -->
       <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
        <!-- SCRIPT FOR DISPLAYING DATA AND ONCLICK EVENTS -->
        <script src="js/documentfillup.js"></script>
</body>
</html>
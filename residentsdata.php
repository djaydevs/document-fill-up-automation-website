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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="residentsdata.css ?v=<?php echo time(); ?>">
    <title>Residents Data</title>
  
</head>
<body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
        <div>
        <?php include('alert.php'); ?>
        </div>
        <h2 class="header">RESIDENTS TABLE</h2>
        <a class="new-btn" id="btn-new"href="/document-fill-up-automation-website/create.php" role = button>
        <ion-icon name="add-outline"></ion-icon>New Record
        </a>
        <div class="tableview" style="overflow-x:auto;" style="overflow-y:auto;"> 
            <table class="content-table">
                <thead>
                    <tr>
                        <th>RIN</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Initial</th>
                        <th>House #</th>
                        <th>Street</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Year of Stay</th>
                        <th>Birthday</th>
                        <th>Birthplace</th>
                        <th>Contact #</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT *FROM table_residents";
                        $result = mysqli_query($conn, $sql);

                        if( mysqli_num_rows($result) > 0) {
                            foreach($result as $row){
                                ?>
                                <tr>
                                    <td><?= $row['rin']; ?></td>
                                    <td><?= $row['lname']; ?></td>
                                    <td><?= $row['fname']; ?></td>
                                    <td><?= $row['mi']; ?></td>
                                    <td><?= $row['housenum']; ?></td>
                                    <td><?= $row['street']; ?></td>
                                    <td><?= $row['gender']; ?></td>
                                    <td><?= $row['age']; ?></td>
                                    <td><?= $row['yearofstay']; ?></td>
                                    <td><?= $row['birthday']; ?></td>
                                    <td><?= $row['birthplace']; ?></td>
                                    <td><?= $row['contact']; ?></td>
                                    <td>
                                        <a href="update.php?rin=<?=$row['rin'];?>">Update</a>
                                        <form action="crud.php" method="POST" class="">
                                            <button type="submit" name="delete_record" value="<?=$row['rin'];?>">Delete</button>
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
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
</body>
</html>   
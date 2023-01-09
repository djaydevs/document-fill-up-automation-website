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
    <link rel="stylesheet" href="css/residentsdata.css ?v=<?php echo time(); ?>">
    <title>Document Fill-Up Automation Website - Residents Data</title>
  
</head>
<body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- NAVIGATION BAR -->
    <nav class="topnav"> 
        <img class="logo" src="css/assets/fatimalogo.svg" alt="logo">
        <p class="tntitle">Barangay Fatima 1</p>
            <ul>
                <li><a href="#">Account</a>
                    <ul class="ul-acc">
                        <li class="ul-li-acc"><a href="">Admin</a></li>
                        <li class="ul-li-acc"><a href="index.php">Log Out</a></li>
                    </ul>
                </li>
                <li><a class="active" href="residentsdata.php">Residents Data</a>
                    <ul>
                        <li><a class="active" href="residentsdata.php">Residents Table View</a></li>
                        <li><a href="create.php">Residents Registration</a></li>
                    </ul>
                </li>
                <li><a href="documentfillup.php">Document Fill-Up</a></li>
            </ul>
    </nav>
    
    <div class="container">
        <h2 class="header">RESIDENTS TABLE</h2>
        <!-- SEARCH AND NEW RECORD FORM-->
        <div class="new-search-container">
            <div class="float-r">
                <form action=""class="search-form" method="POST">
                    <input type="text" name="search" id="search-box" class="txt-search" placeholder="Search Record">
                    <button id="btn-search">Search</button>
                </form>
            </div>
            <a class="new-btn" id="btn-new"href="create.php" role = button>
                <ion-icon class="ion-icon" name="add-outline"></ion-icon>   NEW RECORD
            </a>
        </div>
        <!-- RESIDENTS RECORD TABLE -->
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
                    <!-- SEARCH RECORD FROM THE DATABASE AND FILTER TABLE -->
                    <?php
                    if(isset($_POST['search'])){
                        $searchKey = $_POST['search'];
                        $sql = "SELECT * FROM table_residents WHERE rin LIKE '%$searchKey%' OR lname LIKE '%$searchKey%' OR fname LIKE '%$searchKey%'";
                    }else
                        // DISPLAY RESIDENTS RECORD FROM DATABASE TO TABLE
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
                                        <a class="u-btn"href="update.php?rin=<?=$row['rin'];?>">Update</a>
                                        <form action="crud.php" method="POST" class="btn-form">
                                            <button type="submit" id="btn-del" name="delete_record" value="<?=$row['rin'];?>" onclick="return confirmDelete();">Delete</button>
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
    <!-- SCRIPT FOR DISPLAYING DATA AND ONCLICK EVENTS -->
    <script src="js/sweetalert.min.js"></script>
    <?php include('js/scriptforstatus.php')?>
    <script>
    function confirmDelete() {
    return confirm('Are you sure you want to delete this record?');
    }
    </script>
</body>
</html>   
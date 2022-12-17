<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="indigency.css ?v=<?php echo time(); ?>">
    <title>Document Fill-Up Automation - Certificate of Indigency</title>
</head>
<body>
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
    <div class="grid-container">
        <div class="request-container">
            <!--TABLE-->
            <div class="tableview" style="overflow-x:auto;" style="overflow-y:auto;">
                <table class="request-table" id="table" >
                    <thead>
                        <tr>
                            <th>Resident No.</th>
                            <th>Name</th>
                            <th>Document Purpose</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pdf-container">

        </div>
    </div>
</body>
</html>
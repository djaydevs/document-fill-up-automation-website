<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residents Data</title>
    
</head>
<body>
    <div class="table-cointaner">
        <h2>Residents Table</h2>
        <a href="/document-fill-up-automation-website/create.php" role = button>New Record</a>
        <table>
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
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "brgydb";

                //Create connection
                $connection = new mysqli($servername, $username, $password, $database);

                //Check connection
                if($connection->connect_error) {
                    die("Connection faield: " . $connection->connect_error);
                }

                //read all row from database table
                $sql = "SELECT * FROM table_residents";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }

                //read data of each row
                while($row = $result->fetch_assoc()) {
                    echo"
                    <tr>
                    <td>$row[rin]</td>
                    <td>$row[lname]</td>
                    <td>$row[fname]</td>
                    <td>$row[mi]</td>
                    <td>$row[housenum]</td>
                    <td>$row[street]</td>
                    <td>$row[gender]</td>
                    <td>$row[age]</td>
                    <td>$row[yearofstay]</td>
                    <td>$row[birthday]</td>
                    <td>$row[birthplace]</td>
                    <td>$row[contact]</td>
                    <td>
                        <a href='/document-fill-up-automation-website/update.php?rin=$row[rin]'>Update</a>
                        <a href='/document-fill-up-automation-website/delete.php?rin=$row[rin]'>Delete</a>
                    </td>
                </tr> 
                    ";
                }

                ?>
               
            </tbody>
        </table>
    </div>
</body>
</html>   
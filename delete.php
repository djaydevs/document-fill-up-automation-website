<?php

if (isset($_GET["rin"])) {
    $Rin = $_GET["rin"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "brgydb";

    //Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM table_residents WHERE rin=$Rin";
    $connection->query($sql);
}

header("location: /document-fill-up-automation-website/residentsdata.php");
exit;
?>
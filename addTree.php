
<!DOCTYPE html>
<html>
    <head>
        <title> Add a Tree </title>
    </head>
    <body>
        <h1 style="text-align: center">Add a Tree to the Database</h1>
        <div style="text-align: center"><form method="POST" action="">
            Tree Species: <br>
            <input type="text" name="Species"> <br>
            Decorators: <br>
            <input type="text" name="Decorators"> <br>
            Latitude: <br>
            <input type="text" name="latitude"> <br>
            Longitude: <br>
            <input type="text" name="longitude"> <br>
            <input type="submit" value="Add Tree">
        </form></div>
        
    </body>
</html>

<?php

$servername = "testdatabase.c2uw4uu5co9m.us-west-2.rds.amazonaws.com";
$username = "lukewarm11";
$password = "Leel1995!";
$dbname = "testdb";

$con = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_REQUEST['Species']) && isset($_REQUEST['Decorators']) && isset($_REQUEST['latitude']) && isset($_REQUEST['longitude'])) {
    $species = $_POST['Species'];
    $decorators = $_POST['Decorators'];
    $latitude = $_POST['latitude'];
    $longitude =  $_POST['longitude'];

    echo $species;
    echo $decorators;
    echo $latitude;
    echo $longitude;

    $query="INSERT INTO Trees (Species, Decorators, latitude, longitude, hiddenT) VALUES ('$species', '$decorators', '$latitude', '$longitude', '0')";

    $result = mysqli_query($con, $query);

    $con->close();

} //else {
    //die('Some information was missing!');
//}

?>

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
        <h1 style="text-align: center">Press Here to Generate Tree List</h1>
        <a href="treeList.php"><div style="text-align: center"><button id="button4" type="button">Generate Tree List</button></div></a>
        <h1 style="text-align: center">Press Here to Delete a Tree from the Database</h1>
        <a href="deleteTree.php"><div style="text-align: center"><button id="button2" type="button">Delete A Tree</button><div></a>
        <h1 style="text-align: center">Press Here to Generate a Data File</h1>
        <a href="dataForm.php"><div style="text-align: center"><button id="button3" type="button">Generate Data File</button><div></a>
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

    $query="INSERT INTO Trees (Species, Decorators, latitude, longitude, hidden) VALUES ('$species', '$decorators', '$latitude', '$longitude', '1')";

    $result = mysqli_query($con, $query);

    $con->close();

    echo '<script type="text/javascript">alert("Successfully added a new tree!");</script>';

} //else {
    //die('Some information was missing!');
//}



?>
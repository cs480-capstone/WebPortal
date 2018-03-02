<!DOCTYPE html> 
<html>
    <head>
        <title>Delete A Tree</title>
    </head>
    <body>
        <h1 style="text-align: center">Delete a Tree from the Database</h1>
        <div style="text-align: center"><form method="POST" action="">
            Tree ID: <br>
            <input type="text" name="treeID"> <br>
            <input type="submit" value="Delete Tree">
        </form><div>
        <h1 style="text-align: center">Press Here to Generate Tree List</h1>
        <a href="treeList.php"><div style="text-align: center"><button id="button4" type="button">Generate Tree List</button></div></a>
        <h1 style="text-align: center">Press Here to Add a Tree to the Database</h1>
        <a href="addTree.php"><div style="text-align: center"><button id="button2" type="button">Add A Tree</button><div></a>
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

if(isset($_REQUEST['treeID'])){
    $idTrees = $_POST['treeID'];

    $query = "DELETE FROM Trees WHERE idTrees = $idTrees";

    $result = mysqli_query($con, $query);

    $con->close();

    echo '<script type="text/javascript">alert("Successfully deleted a tree!");</script>';

}



?>
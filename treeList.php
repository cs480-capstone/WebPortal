<?php
    if(isset($_GET['Generate'])){
        $servername = "testdatabase.c2uw4uu5co9m.us-west-2.rds.amazonaws.com";
        $username = "lukewarm11";
        $password = "Leel1995!";
        $dbname = "testdb";
        
        $con = mysqli_connect($servername, $username, $password, $dbname);

        $sql="SELECT * FROM Trees";

        $query = mysqli_query($con, $sql);

        $file = fopen("php://output", "w");

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="treeList.csv"');
        header('Pragma: no-cache');    
        header('Expires: 0');

        $emptyarr = array();

        $fieldinf = mysqli_fetch_fields($query);
        foreach ($fieldinf as $valu){
            array_push($emptyarr, $valu->name);
        }

        fputcsv($file,$emptyarr);

        while($row = mysqli_fetch_assoc($query))
        {
            fputcsv($file,$row);
        }
        fclose($file);

        exit();

        mysqli_free_result($query);
        mysqli_close($con);
    }
?>

<!DOCTYPE html>
<html>

    <head>
        <Title>Tree List</title>
    </head>
    <body>
        <h1 style="text-align: center">Press Here to Generate Tree List</h1>
        <div style="text-align: center"><form><input type="submit" action='' name="Generate" value="Generate"></form></div>
        <h1 style="text-align: center">Press Here to Generate Data File</h1>
        <a href="dataForm.php"><div style="text-align: center"><button id="button4" type="button">Generate Data File</button></div></a>
        <h1 style="text-align: center">Press Here to Add A Tree to the Database</h1>
        <a href="addTree.php"><div style="text-align: center"><button id="button2" type="button">Add New Tree</button></div></a>
        <h1 style="text-align: center">Press Here to Delete A Tree from the Database</h1>
        <a href="deleteTree.php"><div style="text-align: center"><button id="button3" type="button">Delete a Tree</button></div></a>
    </body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Add a Treevia Question</title>
    </head>
    <body>
        <h1 style="text-align: center">Add a Treevia Question to the Database</h1>
        <div style="text-align: center"><form method="POST" action="">
            Treevia Question: <br>
            <input type="text" name="Question"> <br>
            Correct Answer: <br>
            <input type="text" name="CorrectAnswer"> <br>
            Incorrect Answer: <br>
            <input type="text" name="IncorrectAnswer"> <br>
            Incorrect Follow Up Text: <br>
            <input type="text" name="IncorrectFollowUp"> <br>
            <input type="submit" value="Add Treevia Question">
        </form></div>
        <h2 style="text-align: center">Press Here to Generate Tree List</h2>
        <a href="treeList.php"><div style="text-align: center"><button id="button4" type="button">Generate Tree List</button></div></a>
        <h2 style="text-align: center">Press Here to Add a Tree to the Database</h2>
        <a href="addTree.php"><div style="text-align: center"><button id="button4" type="button">Add a Tree</button></div></a>
        <h2 style="text-align: center">Press Here to Delete a Tree from the Database</h2>
        <a href="deleteTree.php"><div style="text-align: center"><button id="button2" type="button">Delete a Tree</button><div></a>
        <h2 style="text-align: center">Press Here to Generate a Data File</h2>
        <a href="dataForm.php"><div style="text-align: center"><button id="button3" type="button">Generate Data File</button><div></a>
    </body>
</html>

<?php

$servername = "testdatabase.c2uw4uu5co9m.us-west-2.rds.amazonaws.com";
$username = "lukewarm11";
$password = "Leel1995!";
$dbname = "testdb";

$con = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_REQUEST['Question']) && isset($_REQUEST['CorrectAnswer']) && isset($_REQUEST['IncorrectAnswer']) && isset($_REQUEST['IncorrectFollowUp'])) {
    $question = $_POST['Question'];
    $correct = $_POST['CorrectAnswer'];
    $incorrect = $_POST['IncorrectAnswer'];
    $followUp =  $_POST['IncorrectFollowUp'];

    $query="INSERT INTO Treevia (question, correctAnswer, incorrectAnswer, incorrectFollowUp) VALUES ('$question', '$correct', '$incorrect', '$followUp')";

    $result = mysqli_query($con, $query);

    $con->close();

    echo '<script type="text/javascript">alert("Successfully added a new Treevia Question!");</script>';

} 

?>
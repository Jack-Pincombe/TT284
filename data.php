


<?php


/**
 * Function to connect to d
 */
$server_name = 'tt284.open.ac.uk';
$user_name = 'zy339049';
$password = 'duY6NVjW';
$db = 'zy339049_db';

$con = mysqli_connect($server_name,$user_name,$password,$db);
//check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to mySql: " .mysqli_connect_error();
}

//performing the queries
$one = 1;
$RunnerId = $_POST['RunnerID'];
$EventID = $_POST['EventID'];
$Date = $_POST['Date'];
$FinishTime =$_POST['FinishTime'];
$Position = $_POST['Position'];
$CategoryID = $_POST['CategoryID'];
$AgeGrade = $_POST['AgeGrade'];
$PB = $_POST['PB'];

$sql = "INSERT INTO Results (RunnerID,EventID,Date,FinishTime,Position,CategoryID,AgeGrade,PB) 
VALUES ('$RunnerId','$EventID','$Date','$FinishTime','$Position','$CategoryID','$AgeGrade','$PB')";



//$result = mysqli_query($con,$sql);



$result = $con->query($sql);
if (!$result) die("Database access failed: " .$con->error);





?>
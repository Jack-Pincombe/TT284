


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

$group = array($RunnerId, $EventID, $Date,$FinishTime,$Position,$CategoryID,
    $AgeGrade,$PB);



$sql = "INSERT INTO Results (RunnerID,EventID,Date,FinishTime,Position,CategoryID,AgeGrade,PB) 
VALUES ('$RunnerId','$EventID','$Date','$FinishTime','$Position','$CategoryID','$AgeGrade','$PB')";






$result = $con->query($sql);
if (!$result) die("Database access failed: " .$con->error);

echo '<h1>Success! your information has been submitted<br></h1>';
echo '<h3>';
echo "RunnerID = " . $RunnerId . '<br>';
echo "EventID = " . $EventID . '<br>';
echo "Date = " . $Date . '<br>';
echo "FinishTime = " . $FinishTime . '<br>';
echo "Position = " . $Position . '<br>';
echo "CategoryID = " .$CategoryID . '<br>';
echo "AgeGrade = " . $AgeGrade . '<br>';
echo "PB = " . $PB . '<br>';
echo '</h3>';



?>
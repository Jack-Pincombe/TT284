<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 09/01/2017
 * Time: 22:51
 */

// information to connect to server
$server_name = 'tt284.open.ac.uk';
$user_name = 'zy339049';
$password = 'duY6NVjW';
$db = 'zy339049_db';

// connect to server
$con = mysqli_connect($server_name,$user_name,$password,$db);

if (mysqli_connect_errno()) {
    echo "Failed to connect to mySql: " . mysqli_connect_error();
}

// storing the users input
$value = $_POST['SortBy'];
$sortOption = $_POST['SortIn'];
$ageReq = $_POST['IncludeAgeGrade'];
$ageGrade = $_POST['AgeGrade'];
//sorting the database to userinput
$query = "SELECT * FROM Results ORDER BY $value $sortOption ";
$sorted = mysqli_query($con,$query);

$key = array('RunnerID','EventID','Date','FinishTime','Position','CategoryID','AgeGrade','PB');

//creating table with sort table
echo "<table cellpadding='1' cellspacing='1' border = '1'>";
echo "<tr>";
foreach ($key as $x){
    echo "<th>";
    print_r($x);
    echo"</th>";

}
echo "</tr>";
while ($row = mysqli_fetch_array($sorted)) {

    echo "<tr>";

    for ($column = 0; $column < count($row); $column++) {
        if ($ageReq == false)
        {
            if ($column == 6){
                $row[$column] = "NA";
                //echo "<td>NA</td>";
            }
        }
        
        echo "<td>" . $row[$column] . "</td>";
    }
    echo "</tr>";
}
echo '</table>';



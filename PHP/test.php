<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 03/01/2017
 * Time: 19:32
 */


$employment = array(
    "K Smith" => "Plumber",
    "N Jones" => "Electrician",
    "P Inbotson" => "Plasterer"

);

echo '<table border=1><tr><th>Field</th><th>Value</th></tr>';
foreach ($employment as $person => $job)
{
    echo '<tr><td>';
    echo htmlspecialchars(print_r($person, true));
    echo '</td><td>';
    echo htmlspecialchars(print_r($job, true));
    echo '</td></tr>';

}
echo "</table>";
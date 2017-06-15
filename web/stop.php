<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "piradio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE `radio_stations` SET `playing`=0 WHERE `playing`=1";
$result = $conn->query($sql);

$output = shell_exec('sudo /home/pi/pifm/scripts/kill_radio.sh 2>&1');
echo $output;

?>

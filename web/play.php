<?php

shell_exec('sudo pkill avconv');
sleep(1);

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
$sql2 = "UPDATE `radio_stations` SET `playing`=1 WHERE `id`=" . $_POST['station'];
$result2 = $conn->query($sql2);
$sql = "SELECT `url` FROM `radio_stations` WHERE `id`=" . $_POST['station'];
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    while($row = $result->fetch_assoc()) {
        shell_exec('sudo /home/pi/pifm/scripts/radio_player.sh ' . $row["url"]);
    }
}

?>
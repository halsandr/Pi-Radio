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

$sql = "SELECT `url` FROM `radio_stations` WHERE `id`=" . $_POST['station'] . ";";
$sql .= "UPDATE `radio_stations` SET `playing`=0 WHERE `playing`=1;";
$sql .= "UPDATE `radio_stations` SET `playing`=1 WHERE `id`=" . $_POST['station'] . ";";

if ($conn->multi_query($sql)) {
    /* store first result set */
    if ($result = $conn->store_result()) {
        while ($row = $result->fetch_row()) {
            shell_exec('sudo /home/pi/pifm/scripts/radio_player.sh ' . $row[0]);
        }
        $result->free();
    }
}

/* close connection */
$conn->close();

?>
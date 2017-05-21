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

$sql = "SELECT * FROM `radio_stations` ORDER BY `radio_stations`.`pretty_name` ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pi-Radio</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet">
    <script defer src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script defer src="update.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <H1>
                    Pi-Radio
                </H1>
            </div>
        </div>
        <div class="row">
            <ul class="list-group clearfix">
                
                <?php while($row = $result->fetch_assoc()) { ?>
                
                <li class="list-group-item"><?php echo $row["pretty_name"] ;?>
                    <button class="btn btn-default pull-right button-stop" type="button">
                        <i class="glyphicon glyphicon-stop"></i>
                    </button>
                    <button onclick="playRadio(<?php echo $row["id"] ;?>)" class="player btn btn-<?php if($row["playing"]){echo "success";}else{echo "default";} ?> pull-right" type="button">
                        <i class="glyphicon glyphicon-play"></i>
                    </button>
                </li>
                
                <?php } ;?>
            </ul>
                        
        </div>
    </div>
</body>

</html>

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
        <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
        <link rel="manifest" href="images/icons/manifest.json">
        <link rel="mask-icon" href="images/icons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="images/icons/favicon.ico">
        <meta name="msapplication-config" content="images/icons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <title>Pi-Radio</title>
        <link href="css/main.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <H1>
                        <img class="pi-icon" src="images/icons/rpi.svg"> Pi-Radio
                    </H1>
                </div>
            </div>
            <div class="row">
                <ul class="list-group clearfix">

                    <?php while($row = $result->fetch_assoc()) { ?>

                    <li class="list-group-item">
                        <?php echo $row["pretty_name"] ;?>
                        <button class="btn btn-default pull-right button-stop" type="button">
                        <i class="fa fa-stop"></i>
                    </button>
                        <button onclick="playRadio(<?php echo $row["id"] ;?>)" class="player btn btn-<?php if($row["playing"]){echo "success ";}else{echo "default ";} ?> pull-right" type="button">
                        <i class="fa fa-play"></i>
                    </button>
                    </li>

                    <?php } ;?>
                </ul>

            </div>
        </div>


        <script defer src="js/jquery-3.2.1.min.js"></script>
        <script defer src="update.js"></script>

    </body>

    </html>

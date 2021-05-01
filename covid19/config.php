<?php
$mysqli = new mysqli("localhost", "root", "", "data_covid");
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
?>

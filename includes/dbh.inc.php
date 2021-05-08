<?php

$servername = "185.138.42.135";
$dBUsername = "vasilisk792731_vasil_hackthon";
$dBPassword = "Dew$69vasilis6945";
$dBName = "vasilisk792731_hackthon";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

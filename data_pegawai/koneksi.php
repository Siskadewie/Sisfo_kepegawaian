<?php 

$dbhost = "localhost";
$dbname = "1";
$dbuser = "root";
$dbpass = "";

$koneksi = new PDO ("mysql:host="  . $dbhost . ";
					dbname=" . $dbname . "",
					$dbuser, $dbpass);
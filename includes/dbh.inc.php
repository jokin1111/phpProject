<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassworwd = "";
$dBName = "phpproject01";

$dbConn = mysqli_connect($serverName, $dBUsername, $dBPassworwd,  $dBName);

if (!$dbConn) {
    die("Connection Failed". mysqli_connect_error());
}
echo"exito";
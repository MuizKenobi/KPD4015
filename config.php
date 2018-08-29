<?php
//MAKLUMAT PANGKALAN DATA
$databaseHost = 'localhost';//NAMA SERVER LOCAL
$databaseName = 'simpan';//NAMA PANGKALAN DATA
$databaseUsername = 'root';//NAMA PENGGUNA PANGKALAN DATA
$databasePassword = '';//TIADA KATALALUAN PNGKALAN DATA

$mysqli = mysqli_connect_($databaseHost, $databaseUsername, $databaseUsername,
$databasePassword, $databaseName);
?>
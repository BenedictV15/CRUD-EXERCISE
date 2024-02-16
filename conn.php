<?php
$servername = 'Localhost';
$username = 'root';
$password = '';
$dbname = 'crud';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    // echo 'Database Connected';
} else {
    die('Database not connected' . mysqli_connect_error());
}

<h1>Hello world!</h1>

<?php
$hostname = 'mysql';
$username = 'root';
$password = 'root';
$database = 'db';

mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
} else {
    die('Connected to MySQL successfully!');
}
?>
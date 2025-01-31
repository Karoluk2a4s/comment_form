
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comment_form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Prisijungti nepavyko: " . $conn->connect_error);
}

?>
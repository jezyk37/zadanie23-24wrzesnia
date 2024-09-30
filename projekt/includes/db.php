<!--/includes/db.php-->
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pdf_managment';

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error){
    die("Connetion failed: " . $conn->connect_error);
}
?>
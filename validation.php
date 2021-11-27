<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(0);
error_reporting(E_ALL);
?>
<?php
$servername = "localhost:3307";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'reg');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully <br>";
}


$name = ($_POST['usn']);
$pass = ($_POST['pw']);

$s = "SELECT * FROM `users` WHERE username='$name' AND pass='$pass'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
if ($num == 1) {
    echo "Login Succes";
    header('Refresh: 0.2; URL=h1.php');
} else {
    echo "<script>alert('Login failed')</script>";
    header('Refresh: 0.5; URL=index.php');
}

?>

<?php

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Login ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    if( $result->fetch_assoc()) {
        $_POST["email"] && $_POST["pwd"]
            
        echo "email: " . $result["email"]. " - Password: " . $result["password"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
?>


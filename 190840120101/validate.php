<?php
$servername = "localhost";
$username = "root";
$password = "actscdac";
$dbname= "astro";

// establishing the connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checking the connection
if ($conn->connect_error) {
    echo "error while connecting the data base";
}
echo "Connection Established Successfully";
$email=$_POST["email"];
$pass=$_POST["pass"];

//sql query to validate the student details
$query="select * from students where username='$email' and Password='$pass'";
$result=$conn->query($query); //collecting the result to the result variable
if($result->num_rows>0)
{
    $_REQUEST["emailid"]="$email";
    echo "<h2 style='color: blue; '>Login Sucessful</h2>";  
}
else{
    echo "<h3 style='color:red;'>Incorrect Password please type correctly</h3>";
}
?>
<html>
<body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";

//Getting Data From QUery String
$username1=$_GET["name"];
$password1=$_GET["pass"];

echo $username1;
// Create connection FOr Database
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "use student";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

//Query to create table
$sql = "CREATE table Stud(username varchar(20) PRIMARY KEY ,password varchar(20),email varchar(20))";
if (mysqli_query($conn, $sql)) {
    echo "Table Created Sucessfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}*/


//Query to insert values into table
$sql="INSERT INTO Stud Values('shu','123','shu123@')";
if (mysqli_query($conn, $sql)) {
    echo "Nrecord created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//Query For Finding Student with username password;
$sql="SELECT * from stud where username='shu'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{   
    echo mysqli_num_rows($result);
    while($row=mysqli_fetch_assoc($result))
    {  
       if($row["username"]==$username1 && $row["password"]==$password1)
       {
           echo "Data Found Succesfully";
       }
        echo $row["UserName"]."<br>";
    }
}
mysqli_close($conn);
?>
</body>
</html>
<?php
$servername = "localhost";
$username = "wordpressuser";
$password = "Password?00";
$dbname = "wordpress";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM *";

$result = $conn->query($sql);

if( $result->num_rows > 0) {
    
while($row = $result->fetch_assoc()){
    echo $row;
}
} else {
    echo "0 results";
}

$conn->close();
?>
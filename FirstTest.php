<?php
$servername = "localhost";
$username = "wordpressuser";
$password = "Password?00";
$dbname = "wordpress";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM pet";

$result = $conn->query($sql);

if( $result->num_rows > 0) {
    echo '<table style="width:20%">';
    echo '<tr>';
    echo '<th>name</th>';
    echo '<th>owner</th>';
    echo '<th>species</th>';
    echo '<th>sex</th>';
    echo '</tr>';
while($row = $result->fetch_assoc()){
    echo '<tr>';
    echo '<th>' . $row[name] . '</th>';
    echo '<th>' . $row[owner] . '</th>';
    echo '<th>' . $row[species] . '</th>';
    echo '<th>' . $row[sex] . '</th>';
    echo '</tr>';
}
} else {
    echo "0 results";
}

$conn->close();
?>
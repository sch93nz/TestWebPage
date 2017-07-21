<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<header>
    <title>Mysql Test</title>
    <h1>Here is a Quick Test of PHP with Mysql</h1>
    <hr>
</header>

<body>
    <div>
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
                echo '<table style="width:20%">' . '<tr>' . '<th>name</th>' . '<th>owner</th>' . '<th>species</th>' . '<th>sex</th>' . '</tr>';
                while($row = $result->fetch_assoc()){
                    echo '<tr>' . '<th>' . $row[name] . '</th>' . '<th>' . $row[owner] . '</th>' . '<th>' . $row[species] . '</th>' . '<th>' . $row[sex] . '</th>' . '</tr>';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
    </div>
</body>
<footer>
    <p>Created by matthew</p>
</footer>

</html>
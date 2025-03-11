<p>
<?php
include_once "config.php";
include_once "config-private.php";

// Create connection
$conn = new mysqli($servername, $username, $password, "schedule_admin");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM test";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    // var_dump($row);
    echo $row['name'] . "<br>";
}

?>
</p>
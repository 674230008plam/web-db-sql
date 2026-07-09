<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "67_44";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL Query
$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);

// Check result
if ($result && $result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] .
            " - Name: " . $row["firstname"] .
            " " . $row["lastname"] . "<br>";
    }

} else {
    echo "0 results";
}

$conn->close();
?>
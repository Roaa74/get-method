<?php
// connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "getmethod";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

// get search query from GET request
$search = $_GET['search'];

// search database and display results
$sql = "SELECT * FROM numbers WHERE input = '$search'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"] . " - Input: " . $row["input"] . "<br>";
    }
} else {
    echo "No results found";
}

// close database connection
$conn->close();
?>te

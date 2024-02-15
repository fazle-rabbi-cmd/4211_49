<?php
// Database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "clothing_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get special offers
$sql = "SELECT * FROM items WHERE special_offer = 1";
$result = $conn->query($sql);

// Display special offers
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<p>" . $row["name"] . "</p>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<p>$" . $row["price"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No special offers available";
}

$conn->close();
?>

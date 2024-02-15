<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Clothing</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Men's Clothing</h1>
    </header>
    
    <main>
        <section class="clothing">
            <h2>Men's Clothing</h2>
            <div class="item-list">
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

                // Query to get men's clothing
                $sql = "SELECT * FROM men_clothing";
                $result = $conn->query($sql);

                // Display men's clothing
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='item'>";
                        echo "<img src='clothing_images/{$row["code"]}.jpg' alt='{$row["name"]}'>";
                        echo "<h3>{$row["name"]}</h3>";
                        echo "<p>Code: {$row["code"]}</p>";
                        echo "<p>Price: $" . number_format($row["price"], 2) . "</p>";
                        echo "<button>Add to Cart</button>";
                        echo "</div>";
                    }
                } else {
                    echo "No items available";
                }

                $conn->close();
                ?>
            </div>
        </section>
        
        <section class="shopping-cart">
            <h2>Shopping Cart</h2>
            <!-- Add shopping cart functionality here -->
        </section>
    </main>
</body>
</html>

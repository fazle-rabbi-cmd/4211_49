<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Job</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Apply for Job</h1>
    </header>

    <main>
        <form action="submit_application.php" method="POST" class="apply-for-job" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="qualification">Qualification:</label>
                <input type="text" id="qualification" name="qualification" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group">
                <label for="id_number">ID Number:</label>
                <input type="text" id="id_number" name="id_number" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>

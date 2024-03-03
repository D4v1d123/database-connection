<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Connection between PHP and MySQL</title>
</head>
<body>
    <div class="container">
        <a href="./db_connection.php" class="button">Connect to the database</a>
        <?php  
            // The isset function checks if a variable or function exist.
            if (isset($_GET["msg"])) {
                echo "<p class='message'>" . $_GET["msg"] . "</p>";
            }
        ?>
    </div>
</body>
</html>
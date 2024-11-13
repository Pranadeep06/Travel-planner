<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Planned Trips</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Your Planned Trips</h1>
    <div class="trip-container">
        <?php
        $sql = "SELECT * FROM trips ORDER BY date_planned DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='trip'>
                    <h3>Destination: " . $row['destination'] . "</h3>
                    <p>Flight: " . $row['flight'] . "</p>
                    <p>Accommodation: " . $row['accommodation'] . "</p>
                    <p>Attractions: " . $row['attractions'] . "</p>
                    <p>Date Planned: " . $row['date_planned'] . "</p>
                </div>";
            }
        } else {
            echo "<p>No trips planned yet.</p>";
        }
        $conn->close();
        ?>
    </div>
    <a href="index.php" class="button">Back to Home</a>
</body>
</html>

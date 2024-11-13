<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = $_POST['destination'];
    $flight = $_POST['flight'];
    $accommodation = $_POST['accommodation'];
    $attractions = $_POST['attractions'];

    $sql = "INSERT INTO trips (destination, flight, accommodation, attractions) VALUES ('$destination', '$flight', '$accommodation', '$attractions')";

    if ($conn->query($sql) === TRUE) {
        echo "Trip planned successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plan Your Trip</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Plan Your Trip</h1>
    <form method="post" action="plan_trip.php">
        <label>Destination:</label>
        <input type="text" name="destination" required><br>
        
        <label>Flight:</label>
        <input type="text" name="flight" required><br>
        
        <label>Accommodation:</label>
        <input type="text" name="accommodation" required><br>
        
        <label>Attractions:</label>
        <textarea name="attractions" required></textarea><br>
        
        <button type="submit">Save Trip</button>
    </form>
</body>
</html>

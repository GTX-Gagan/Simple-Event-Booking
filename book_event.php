<?php
$conn = new mysqli("localhost", "root", "", "event_booking");

$user_id = $_POST['user_id'];
$event_id = $_POST['event_id'];

$sql = "INSERT INTO bookings (user_id, event_id) VALUES ('$user_id', '$event_id')";

if ($conn->query($sql) === TRUE) {
    echo "Booked Successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

<?php

// Get the data from the AJAX request
$data = json_decode(file_get_contents("php://input"));

$eventId = $data->eventId;
$isChecked = $data->isChecked;

// Connect to the database
$conn = new mysqli("localhost", "root", "root", "dariusdev_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update the display status in the database
$sql = "UPDATE dariusdev_event SET display = " . ($isChecked ? 1 : 0) . " WHERE id = " . $eventId;

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}

$conn->close();
?>

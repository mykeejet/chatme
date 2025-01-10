<?php
// Database credentials
$host = 'localhost'; // or your hosting service's database host
$username = 'your_db_username';
$password = 'your_db_password';
$database = 'your_database_name';

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]));
}

// Handle incoming POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Example: Fetch data based on a parameter sent by the app
    $key = $_POST['key']; // Assuming 'key' is sent in the request body
    $query = "SELECT * FROM your_table WHERE column_name = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $key); // Bind parameter safely
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch and return data as JSON
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode(["status" => "success", "data" => $data]);

    $stmt->close();
}

$conn->close();
?>

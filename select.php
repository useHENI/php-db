<?php
// include("./database.php");
require "./database.php";

// Prepare and execute the query to fetch the last record
$sql = "SELECT * FROM user_data  ";
$result = $conn->query($sql);

// Check if there's a result
if ($result->num_rows > 0) {
    // Fetch the last row as an associative array
    $row = $result->fetch_assoc();
    // echo $row;

    // Convert the data to JSON format
    $jsonData = json_encode($row);
    //  echo $jsonData;

    // Set the content type header
    // header('Content-Type: application/json');

    // Output the JSON data
    echo $jsonData;
} else {
    // Handle case where no data is found
    echo json_encode(['error' => 'No data found']);
}

// $conn->close($conn);
mysqli_close($conn);



?>
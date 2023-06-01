<?php
session_start();

// Retrieve the POST data
$data = json_decode(file_get_contents('php://input'), true);

include "dbconfig.php";

if (!isset($_SESSION['userID'])) {
    // User is not logged in, handle the error accordingly
    $response = array('status' => 'error', 'message' => 'User is not logged in');
    echo json_encode($response);
    exit;
}

$userID = $_SESSION['userID'];

// Extract the required data
$amount = $data['amount'];

// Check if the user_id exists in the user table
$checkUserQuery = "SELECT id FROM user WHERE id = '$userID'";
$result = $conn->query($checkUserQuery);

if ($result->num_rows == 0) {
    // User ID does not exist in the user table, handle the error accordingly
    $response = array('status' => 'error', 'message' => 'Invalid user ID');
    echo json_encode($response);
    exit;
}

// Determine the investment_plan_id based on the amount
if ($amount == 25000) {
    $investmentPlanID = 1;
} elseif ($amount == 50000) {
    $investmentPlanID = 2;
} elseif ($amount == 70000) {
    $investmentPlanID = 3;
} elseif ($amount == 100000) {
    $investmentPlanID = 4;
} elseif ($amount == 300000) {
    $investmentPlanID = 5;
} else {
    // Invalid amount, handle the error accordingly
    $response = array('status' => 'error', 'message' => 'Invalid amount');
    echo json_encode($response);
    exit;
}

// Prepare the SQL statement to insert the investment
$stmt = $conn->prepare("INSERT INTO investments (user_id, investment_plan_id, amount, created_at) VALUES (?, ?, ?, NOW())");

if (!$stmt) {
    // Preparation of SQL statement failed, handle the error accordingly
    $response = array('status' => 'error', 'message' => 'Failed to prepare SQL statement');
    echo json_encode($response);
    exit;
}

// Bind the parameters and execute the statement
$stmt->bind_param("iid", $userID, $investmentPlanID, $amount);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    // Investment stored successfully
    $response = array('status' => 'success', 'message' => 'Investment stored successfully');
    echo json_encode($response);
} else {
    // Failed to store investment
    $response = array('status' => 'error', 'message' => 'Failed to store investment');
    echo json_encode($response);
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>

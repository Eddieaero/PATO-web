<?php

include "dbconfig.php";
// session_start();

// if (!isset($_SESSION['id'])) {
//     // User is not logged in, handle the error accordingly
//     $response = array('status' => 'error', 'message' => 'User is not logged in');
//     echo json_encode($response);
//     exit;
// }


$userID = $_SESSION['userID'];

// Retrieve the POST data
$data = json_decode(file_get_contents('php://input'), true);

// Extract the required data
$amount = $data['amount'];

// Check if the user_id exists in the user table
$checkUserQuery = "SELECT id FROM user WHERE id = '$userID'";
$result = $conn->query($checkUserQuery);


// Retrieve the amount from the request
$amount = $_POST['amount'];


// Retrieve the user_id from the current session
//  echo $_SESSION['userID'] ;




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
    echo "Invalid amount.";
    exit;
}
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




// Prepare the SQL statement to insert the investment
$stmt = $conn->prepare("INSERT INTO investments (user_id, investment_plan_id, amount) VALUES (?, ?, ?)");

if (!$stmt) {
    die("Preparation of SQL statement failed: " . $conn->connect_error);
}

// Bind the parameters and execute the statement
$stmt->bind_param("iid", $userID, $investmentPlanID, $amount);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    // Investment stored successfully
    echo "Investment stored successfully.";
} else {
    // Failed to store investment
    echo "Failed to store investment.";
}

// Close the statement and database connection'
$stmt->close();
$conn->close();
?>



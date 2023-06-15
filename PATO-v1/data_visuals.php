<?php
session_start();

include "dbconfig.php";

if (!isset($_SESSION['userID'])) {
    // User is not logged in, handle the error accordingly
    $response = array('status' => 'error', 'message' => 'User is not logged in');
    echo json_encode($response);
    exit;
}

$userID = $_SESSION['userID'];

// Retrieve user's investment data
$query = "SELECT * FROM investments WHERE user_id = '$userID'";
$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    // Fetch the data and store it in an array
    $investments = $result->fetch_all(MYSQLI_ASSOC);
} else {
    // Handle the error if the query fails
    $response = array('status' => 'error', 'message' => 'Failed to retrieve user investments');
    echo json_encode($response);
    exit;
}

// Retrieve investment plans data
$investmentPlans = array();
$investmentPlansQuery = "SELECT * FROM investment_plans";
$investmentPlansResult = $conn->query($investmentPlansQuery);
if ($investmentPlansResult) {
    // Fetch the data and store it in an array
    $investmentPlansData = $investmentPlansResult->fetch_all(MYSQLI_ASSOC);
    foreach ($investmentPlansData as $plan) {
        $investmentPlans[$plan['id']] = $plan;
    }
} else {
    // Handle the error if the query fails
    $response = array('status' => 'error', 'message' => 'Failed to retrieve investment plans');
    echo json_encode($response);
    exit;
}

// Update the investment data
foreach ($investments as $investment) {
    $investmentID = $investment['id'];
    $investmentAmount = $investment['amount'];
    $investmentDate = $investment['created_at'];
    $investmentPlanID = $investment['investment_plan_id'];
    $returnPercentage = $investmentPlans[$investmentPlanID]['return_percentage'];
    $periodInDays = $investmentPlans[$investmentPlanID]['period_in_days'];

    $currentTime = time();
    $currentDay = date('Y-m-d H:i:s');
    $currentDate = strtotime(date('Y-m-d'));

    $expectedAmount = $investmentAmount * (1 + $returnPercentage);
    $completionDate = date('Y-m-d', strtotime($investmentDate . ' + ' . $periodInDays . ' days'));
    $completionDateTimestamp = strtotime($completionDate);
    $daysRemaining = round(max(0, ($completionDateTimestamp - $currentDate) / (60 * 60 * 24)),0);

    $daysDifference = $periodInDays - $daysRemaining;
    // $percentageProgress = ($daysDifference / ($periodInDays*60*60*24)) * 100;
    $percentageProgress = ($daysDifference / ($periodInDays)) * 100;
    $progress = $percentageProgress * $expectedAmount/100;
    // Update the investment record in the database
    $updateQuery = "UPDATE investments SET days_remaining = '$daysRemaining', progress_amount = '$progress', perc_progress = '$percentageProgress', end_date = '$completionDate' WHERE id = '$investmentID' AND user_id = '$userID'";
    $updateResult = $conn->query($updateQuery);

    if (!$updateResult) {
        // Handle the error if the update fails
        $response = array('status' => 'error', 'message' => 'Failed to update investment: ' . $conn->error);
        echo json_encode($response);
        exit;
    }
    else{
        $response = array('status' => 'success', 'message' => ' update investment successfully: ' );
        echo json_encode($response);
        // echo "<p>Investment ID: $investmentID</p>";
        // echo "<p>Progress: $progress</p>";
        // echo "<p>Expected Amount: $expectedAmount</p>";
        // echo "<p>Percentage of Progress: $percentageProgress%</p>";
        // echo "<p>Days Remaining: $daysRemaining</p>";
        // echo "<p>Cash out Day : $completionDate</p>";
        // echo "<p>invested : $investmentAmount</p>";
        // echo "<p>investment date : $investmentDate</p>";
        // echo "<p>current day  : $currentDay</p>";
        //  // exit;
    }
}



// Close the database connection
$conn->close();
?>

<!-- <meta http-equiv="refresh" content="5"> -->
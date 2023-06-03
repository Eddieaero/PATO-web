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

// Fetch investment plan data from the database
$query = "SELECT * FROM investment_plans";
$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    // Fetch the data and store it in an array
    $investmentPlans = $result->fetch_all(MYSQLI_ASSOC);
} else {
    // Handle the error if the query fails
    $response = array('status' => 'error', 'message' => 'Failed to retrieve investment plans');
    echo json_encode($response);
    exit;
}

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

// Create visuals for each investment plan
foreach ($investmentPlans as $plan) {
    $planID = $plan['id'];
    $returnPercentage = $plan['return_percentage'];
    $periodInDays = $plan['period_in_days'];
    $membershipFee = $plan['membership_fee'];
    $initialInvestment = $plan['initial_investment'];

    // Retrieve the user's investment data for the current plan
    $investmentData = array_filter($investments, function ($investment) use ($planID) {
        return $investment['investment_plan_id'] == $planID;
    });

    // Calculate investment progress and additional metrics
    $investmentProgress = array();
    foreach ($investmentData as $investment) {
        $investmentID = $investment['id'];
        $investmentAmount = $investment['amount'];
        $investmentDate = $investment['created_at'];

        $progress = $initialInvestment * pow(1 + $returnPercentage, (time() - strtotime($investmentDate)) / (60 * 60 * 24 * $periodInDays));
        $expectedAmount = $initialInvestment * (1 + $returnPercentage);
        $completionDate = date('Y-m-d', strtotime($investmentDate . ' + ' . $periodInDays . ' days'));

        // Add the investment progress and additional metrics to the array
        $investmentProgress[$investmentID] = array(
            'progress' => $progress,
            'expectedAmount' => $expectedAmount,
            'completionDate' => $completionDate
        );
    }

    // Generate visuals for the current investment plan
    echo "<div>";
    echo "<h3>Investment Plan: $planID</h3>";
    foreach ($investmentProgress as $investmentID => $progressData) {
        $progress = $progressData['progress'];
        $expectedAmount = $progressData['expectedAmount'];
        $completionDate = $progressData['completionDate'];

        echo "<p>Investment ID: $investmentID</p>";
        echo "<p>Progress: $progress</p>";
        echo "<p>Expected Amount: $expectedAmount</p>";
        echo "<p>Completion Date: $completionDate</p>";
        // Add visualization code here (e.g., charts, graphs, progress bars)
        echo "<br>";
    }
    echo "</div>";
}

// Close the database connection
$conn->close();
?>

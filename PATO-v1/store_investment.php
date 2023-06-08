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
    $investmentCat = "weekly";
} elseif ($amount == 50000) {
    $investmentPlanID = 2;
    $investmentCat = "monthly";
} elseif ($amount == 70000) {
    $investmentPlanID = 3;
    $investmentCat = "Quarterly";
} elseif ($amount == 100000) {
    $investmentPlanID = 4;
    $investmentCat = "Half-yearly";
} elseif ($amount == 300000) {
    $investmentPlanID = 5;
    $investmentCat = "yearly";
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



// here stays manipulations of the investment
// includes all details of days remaining, amount on progress, percentage of the progress and last date of the investment
// before being inserted to the database

// Retrieve user's investment data
// $query = "SELECT * FROM investments WHERE user_id = '$userID'";
// $result = $conn->query($query);

// // Check if the query was successful
// if ($result) {
//     // Fetch the data and store it in an array
//     $investments = $result->fetch_all(MYSQLI_ASSOC);
// } else {
//     // Handle the error if the query fails
//     $response = array('status' => 'error', 'message' => 'Failed to retrieve user investments');
//     echo json_encode($response);
//     exit;
// }

// // Retrieve investment plans data
// $investmentPlans = array();
// $investmentPlansQuery = "SELECT * FROM investment_plans";
// $investmentPlansResult = $conn->query($investmentPlansQuery);
// if ($investmentPlansResult) {
//     // Fetch the data and store it in an array
//     $investmentPlansData = $investmentPlansResult->fetch_all(MYSQLI_ASSOC);
//     foreach ($investmentPlansData as $plan) {
//         $investmentPlans[$plan['id']] = $plan;
//     }
// } else {
//     // Handle the error if the query fails
//     $response = array('status' => 'error', 'message' => 'Failed to retrieve investment plans');
//     echo json_encode($response);
//     exit;
// }


// // Update the investment data
// foreach ($investments as $investment) {
//     $investmentID = $investment['id'];
//     $investmentAmount = $investment['amount'];
//     $investmentDate = $investment['created_at'];
//     $investmentPlanID = $investment['investment_plan_id'];
//     $returnPercentage = $investmentPlans[$investmentPlanID]['return_percentage'];
//     $periodInDays = $investmentPlans[$investmentPlanID]['period_in_days'];

//     // Calculate investment progress and additional metrics
//     // $progress = round($investmentAmount * pow(1 + $returnPercentage, (time() - strtotime($investmentDate)) / (60 * 60 * 24 * $periodInDays)), 2);
//     $currentTime = time();
//     $expectedAmount = $investmentAmount * (1 + $returnPercentage);
//     $currentDate = strtotime(date('Y-m-d'));
//     $completionDate = date('Y-m-d', strtotime($investmentDate . ' + ' . $periodInDays . ' days'));
//     $completionDateTimestamp = strtotime($completionDate);
//     // $daysRemaining = max(0, ceil((strtotime($completionDate) - time()) / (60 * 60 * 24)));
//     $daysRemaining = max(0, ($completionDateTimestamp - $currentDate) / (60 * 60 * 24));


//     // $completionDateTimestamp = strtotime($completionDate);
   
//     $investmentTime = strtotime($investmentDate);
//     $timeDifference = $currentTime - $investmentTime;
//     $percentageProgress = round(($timeDifference / ($periodInDays*60*60*24)) * 100, 2);
//     $progress = $percentageProgress * $expectedAmount/100;


//     // Update the investment record in the database
//     $updateQuery = "UPDATE investments SET progress_amount = '$progress', perc_progress = '$percentageProgress', days_remaining = '$daysRemaining', end_date = '$completionDate' WHERE id = $investmentID";
//     $updateResult = $conn->query($updateQuery);

//     if (!$updateResult) {
//         // Handle the error if the update fails
//         $response = array('status' => 'error', 'message' => 'Failed to update investment: ' . $conn->error);
//         echo json_encode($response);
//         exit;
//     }


//     echo "<div>";
//     echo "<h3>Investment Plan: $planID</h3>";
//     foreach ($investmentProgress as $investmentID => $progressData) {
//         $progress = $progressData['progress'];
//         $expectedAmount = $progressData['expectedAmount'];
//         $completionDate = $progressData['completionDate'];

//         // Calculate the percentage of progress
//         // $percentageProgress = round(($progress / $expectedAmount) * 100);
//         $percentageProgress = round(($timeDifference / ($periodInDays*60*60*24)) * 100, 2);
//         $progress = $percentageProgress * $expectedAmount/100;


//         // Calculate the days remaining for the investment to complete
//         $currentDate = strtotime(date('Y-m-d'));
//         $completionDateTimestamp = strtotime($completionDate);
//         $daysRemaining = max(0, ($completionDateTimestamp - $currentDate) / (60 * 60 * 24));

//         echo "<p>Investment ID: $investmentID</p>";
//         echo "<p>Progress: $progress</p>";
//         echo "<p>Expected Amount: $expectedAmount</p>";
//         echo "<p>Percentage of Progress: $percentageProgress%</p>";
//         echo "<p>Days Remaining: $daysRemaining</p>";
//         echo "<p>Cash out Day : $completionDate</p>";
        
//         // Add visualization code here (e.g., charts, graphs, progress bars)
//         echo "<br>";




// }




// }

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
